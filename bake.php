<?php
    include"config.php";
    $pid=$_SESSION['uID'];
    //for timer
    $sqla = "select count(oid) as r from ovenplayer  where pid='$pid' and status=1";
    $resultsta=mysqli_query($conn,$sqla);
    $rsa=mysqli_fetch_array($resultsta);
    $sqltimer = "select oid , ovenplayer.bid , btime from ovenplayer , bread  where pid='$pid' and status=1 and ovenplayer.bid=bread.bid";
    $resultst=mysqli_query($conn,$sqltimer);
    while ($rst=mysqli_fetch_array($resultst)) {
        $oid[]=$rst['oid'];
        $bid[]=$rst['bid'];
        $endtime[]=$rst['btime'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 最新編譯和最佳化的 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- 選擇性佈景主題 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bake.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/countdown.min.js"></script>
    <script text/javascript>
    function start(){
        <?php for($i=1;$i<=$rsa['r'];$i++){?>
            new Countdown({
                selector: '.timer<?php echo $oid[$i-1];?>',
                msgBefore: "",
                msgAfter: "<?php echo "<a href='bakeok.php?oid=".$oid[$i-1]."'>好了!</a>";?>",
                msgPattern: "{seconds} s",
                dateStart: new Date(),
                dateEnd: new Date('<?php echo date("M d, Y H:i:s",$endtime[$i-1])?>'),
                onStart: function() {
                    console.log('start');
                },
                onEnd: function() { 
                    console.log('end');
                },
            });
        <?php   };?>
    };
    function statuscheck(){
      <?php 
        $sqlb = "select * from ovenplayer  where pid='$pid' order by oid";
        $resultstb=mysqli_query($conn,$sqlb);
        while($rsc=mysqli_fetch_array($resultstb)){?>
            var i = <?php echo $rsc['oid']?>;
            var j = <?php echo $rsc['bid']?>;
            var oven_now = '<?php echo $rsc['oid'] ?>';
            var target = "oven"+oven_now+"_b";
            <?php if($rsc['status']=='1'){ ?>
                $("#"+target).attr('disabled',true);
                $("#"+target).css("background-image", "url('img/oven3.png')");
                start();
            <?php } 
            else if($rsc['status']=='2'){ ?>
                var targeturl1="bakedone.php?oid="+i+"&bid="+j;
                var targeton1="self.location.href='"+targeturl1+"'";
                $("#"+target).attr('disabled',false);
                $("#"+target).attr('data-toggle',false);
                $("#"+target).attr('data-target',false);
                $("#"+target).attr('Onclick',""+targeton1+"");
                $("#"+target).css("background-image", "url('img/oven5.png')");
            <?php }  
            else if($rsc['status']=='3'){ ?> 
                var targeturl2="unlockoven.php?oid="+oven_now;
                var targeton2="self.location.href='"+targeturl2+"'"; 
                $("#"+target).attr('disabled',false);
                $("#"+target).attr('data-toggle',false);
                $("#"+target).attr('data-target',false);
                $("#"+target).attr('Onclick',""+targeton2+"");
                $("#"+target).attr('disabled',false);
                $("#"+target).css("background-image", "url('img/oven4.png')");
            <?php } 
            else if($rsc['status']=='4'){ ?>
                $("#"+target).attr('disabled',true);
                $("#"+target).css("background-image", "url('img/oven2.png')");
            <?php }  
            else if($rsc['status']=='0'){ ?>
                $("#"+target).attr('disabled',false);
                $("#"+target).css("background-image", "url('img/oven.png')");
            <?php } ?>
        <?php }; ?>
    };
    window.onload = function () {
        statuscheck();
        setTimeout(start, 500);
    };
    </script>
<title>快樂廚房</title>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-md-12" id="section1">
            <div class="row no-gutter" id="section1-1">
                <div class="col-md-3" id="leftbar">
                    <?php
                        $sql1 = "select  * from player  where pid='$pid'";
                        $results1=mysqli_query($conn,$sql1);
                        if($rows=mysqli_fetch_array($results1)){
                            echo"<div id=\"column\">",
                                "玩家名稱：".$rows["pname"]."</br>",
                                "等級:".$rows["level"]."</br>",
                                "金幣:".$rows["coin"]."</br>",
                                "經驗值：".$rows["exp"]."</br>",
                                "材料包:".$rows["material"]."個<br></div>";
                        }
                    ?>
                </div>
                <div class="col-md-9" id="main">
                    <div class="container-fluid" id="main_in">
                        <div class="row">
                            <div class="col-md-6" id="oven1">
                                <button type="button" id="oven1_b" class="oven btn btn-link btn-block" data-toggle="modal" data-target="#put_material1"></button><?php echo "<span id=\"upper\" class=\"timer1 label label-info\"></span>";?>
                                <div class="modal fade bs-example-modal-sm" id="put_material1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <h2>要放幾個料包呢?</h2></br>
                                        <form method='post' action='bakestart.php'>
                                        <?php $sql1 = "select  * from player  where pid='$pid'";
                                              $results1=mysqli_query($conn,$sql1);
                                              if($rows=mysqli_fetch_array($results1)){
                                                $m_num=$rows["material"];
                                                echo "<input id=\"m_num\" name=\"m_num\" type=\"number\" min=\"0\" max=\"$m_num\" value=\"0\">";
                                              }
                                        ?>
                                        <input id="oven_s" name="oven_s" type="hidden" value="1">
                                        </br><br>
                                        <button type="submit" class="btn btn-warning btn">Start</button>
                                        <button class="btn btn-danger btn" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="oven2">
                                <button type="button" id="oven2_b" class="oven btn btn-link btn-block" data-toggle="modal" data-target="#put_material2"></button><?php echo "<span id=\"upper\" class=\"timer2 label label-info\"></span>";?>
                                <div class="modal fade bs-example-modal-sm" id="put_material2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <h2>要放幾個料包呢?</h2></br>
                                        <form method='post' action='bakestart.php'>
                                        <?php $sql1 = "select  * from player  where pid='$pid'";
                                              $results1=mysqli_query($conn,$sql1);
                                              if($rows=mysqli_fetch_array($results1)){
                                                $m_num=$rows["material"];
                                                echo "<input id=\"m_num\" name=\"m_num\" type=\"number\" min=\"0\" max=\"$m_num\" value=\"0\">";
                                              }
                                        ?>
                                        <input id="oven_s" name="oven_s" type="hidden" value="2">
                                        </br><br>
                                        <button type="submit" class="btn btn-warning btn">Start</button>
                                        <button class="btn btn-danger btn" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6" id="oven3">
                                <button type="button" id="oven3_b" class="oven btn btn-link btn-block" data-toggle="modal" data-target="#put_material3"></button><?php echo "<span id=\"upper\" class=\"timer3 label label-info\"></span>";?>
                                <div class="modal fade bs-example-modal-sm" id="put_material3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <h2>要放幾個料包呢?</h2></br>
                                        <form method='post' action='bakestart.php'>
                                        <?php $sql1 = "select  * from player  where pid='$pid'";
                                              $results1=mysqli_query($conn,$sql1);
                                              if($rows=mysqli_fetch_array($results1)){
                                                $m_num=$rows["material"];
                                                echo "<input id=\"m_num\" name=\"m_num\" type=\"number\" min=\"0\" max=\"$m_num\" value=\"0\">";
                                              }
                                        ?>
                                        <input id="oven_s" name="oven_s" type="hidden" value="3">
                                        </br><br>
                                        <button type="submit" class="btn btn-warning btn">Start</button>
                                        <button class="btn btn-danger btn" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>                           
                            <div class="col-md-6" id="oven4">
                                <button type="button" id="oven4_b" class="oven btn btn-link btn-block" data-toggle="modal" data-target="#put_material4"></button><?php echo "<span id=\"upper\" class=\"timer4 label label-info\"></span>";?>
                                <div class="modal fade bs-example-modal-sm" id="put_material4" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <h2>要放幾個料包呢?</h2></br>
                                        <form method='post' action='bakestart.php'>
                                        <?php $sql1 = "select  * from player  where pid='$pid'";
                                              $results1=mysqli_query($conn,$sql1);
                                              if($rows=mysqli_fetch_array($results1)){
                                                $m_num=$rows["material"];
                                                echo "<input id=\"m_num\" name=\"m_num\" type=\"number\" min=\"0\" max=\"$m_num\" value=\"0\">";
                                              }
                                        ?>
                                        <input id="oven_s" name="oven_s" type="hidden" value="4">
                                        </br><br>
                                        <button type="submit" class="btn btn-warning btn">Start</button>
                                        <button class="btn btn-danger btn" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="row no-gutter">
                <div class="col-md-12" id="space"> </div>
            </div>
            <div class="row no-gutter" id="button">
                <div class="col-md-1 col-xs-4">
                    <button class="buttons btn-block" onclick="self.location.href='material.php'">材料包</button>
                </div>
                <div class="col-md-1 col-xs-4">
                    <button class="buttons btn-block" onclick="self.location.href='bread.php'">麵包圖鑑</button>
                </div>
                <div class="col-md-1 col-xs-4 col-md-offset-9">
                    <button class="buttons btn-block" onclick="self.location.href='kitchen.php'">返回</button>
                </div>
            </div>
        </div>
    </div>
	<div id="picture">
		<p><img src="img/m7.gif"width="200"/ ></p>
	</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/countdown.min.js"></script>
<audio src="music/happy.mp3" controls autoplay loop hidden="true" >
</body>
</html>
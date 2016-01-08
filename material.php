<?php
    include"config.php";
    $pid=$_SESSION['uID'];
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
<link rel="stylesheet" href="css/bread.css">
<title>快樂廚房</title>
<style type="text/css">
body {
background-color:#DAA520;
background-image:url(img/22.jpg);
background-opacity:0.1;
background-position: 150px 300px;
font-size:12pt;
}
#leftbar {
background: linear-gradient(to right,#DEB887 40%,#FFDAB9);
background-image:url(img/12.jpg);
background-repeat: no-repeat;
padding:8px 0px 3px 10px;
opacity:0.7;
letter-spacing: 4pt;
font-size:14pt;
}
#picture {
position:absolute;
left:12%;
top:34%;
opacity:0.6;
}
#picture2 {
position:absolute;
left:1%;
top:34%;
opacity:0.6;
}
button {
background-image:url(img/13.jpg);
background-repeat:no-repeat;
background-position:center;
color:#8B0000;
}
button:hover {
background-image:url(img/13.jpg);
color:orange;
font-weight:bold;
}
#button1
{
background-image:url(img/back.jpg);
}
</style>
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
                                "材料包:".$rows["material"]."個</br></br></br></div>";
                        }
                    ?>
                </div>
                <div class="col-md-9" id="table">
                    <table align="center"  cellspacing="10" cellpadding="5" >
                    <thead><tr><br/>
                    <th width="200"height="150"align="Center">薑餅人<br/><img src="img/8.png"width="175px"height="150px"/><br/>材料包：1 
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player where pid='$pid'";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
					    if($rs["level"] >= 1){      
                            if($rs["material"] < 0 ){
                                echo "<button>buy</button><br/></th>";
                            }
                            else echo "<button><a href='materialbuy.php?id=",1 ,"'>buy</a></button><br/></th>";
                            }
                        }    
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">甜甜圈<br/><img src="img/6.png"width="175"height="150"/></button><br/>材料包：2
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player where pid='$pid'  ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 2){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",2 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">紅豆麵包<br/><img src="img/1.png"width="175"height="150"/><br/>材料包：3
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid'  ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 3){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",3 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">杯子蛋糕<br/><img src="img/4.png"width="175"height="150"/><br/>材料包：4
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid' ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 4){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",4 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    </tr></thead>
                    <thead><tr>
                    <th width="200"height="150"align="Center">法國麵包<br/><img src="img/5.png"width="175"height="150"/><br/>材料包：5
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid'  ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 5){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",5 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">牛角麵包<br/><img src="img/3.png"width="175"height="150"/><br/>材料包：6
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid' ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 6){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",6 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">牛奶吐司<br/><img src="img/2.png"width="175"height="150"/><br/>材料包：7
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid'";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 7){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",7 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    <th width="200"height="150"align="Center">燕麥吐司<br/><img src="img/7.png"width="175"height="150"/><br/>材料包：8
                    &nbsp;&nbsp;&nbsp;<img src="img/15.gif"width="25"height="20"/> 
                    <?php
				    $sqlb = "select * from player  where pid='$pid'  ";
				    $results=mysqli_query($conn,$sqlb);
				    if($rs=mysqli_fetch_array($results)){
                        if($rs["coin"] > 14){
                        if($rs["level"] >= 8){
					    if($rs["material"] < 0){
						    echo "<button>buy</button><br/></th>";
					    }
					    else echo "<button><a href='materialbuy.php?id=",8 ,"'>buy</a></button><br/></th>";
                        }
                        }
				    }
				    else echo "<button>buy</button><br/></th>";
				    ?>
                    </tr></thead>
                    <br/><thead><tr><th></th>
                    <th style="font-size:13pt;">
                    <?php
                        $sql1 = "select  * from player  where pid='$pid'";
                        $results1=mysqli_query($conn,$sql1);
                        if($rows=mysqli_fetch_array($results1)){
                            echo"<div id=\"column\">",
                                "材料包庫存:   ".$rows["material"]."個</br></br></br></div>";
                        }
                    ?>
                    </th>
                    <th style="font-size:13pt;">
                    <?php
                        $sql1 = "select  * from player  where pid='$pid'";
                        $results1=mysqli_query($conn,$sql1);
                        if($rows=mysqli_fetch_array($results1)){
                            echo"<div id=\"column\">",
                                "金幣:".$rows["coin"]."個</br></br></br></div>";
                        }
                    ?>
                    </th>
                    </tr>
                    </thead>
                    </table>
                    <br/>
                </div>        
            </div>
            <div class="row no-gutter">
                <div class="col-md-12" id="space"> </div>
            </div>
            <div class="row no-gutter" id="button">
			<button onclick="self.location.href='material.php'" style="position:absolute; bottom:10px; left:10px; width:120px; height:40px; font-size:20px">材料包</button>
			<button onclick="self.location.href='bread.php'" style="position:absolute; bottom:10px; left:140px;width:120px; height:40px; font-size:20px;">麵包圖鑑</button>
			<button onclick="self.location.href='kitchen.php'" style="position:absolute; bottom:10px; right:10px;width:120px; height:40px; font-size:20px;">返回</button>
            </div>
        </div>
		<div id="picture">
		<p><img src="img/m4.gif"width="130" height="240"/ ></p>
	    </div>
	    <div id="picture2">
		<p><img src="img/m2.gif"width="150"/ ></p>
	     </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

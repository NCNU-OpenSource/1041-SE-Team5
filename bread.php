<?php
    include"config.php";
    $pname=$_SESSION['pname'];
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
#table{
td {text-align: left;}
td+td {text-align:left; padding-left:10px}
}
#picture {
position:absolute;
left:3%;
top:33%;
opacity:0.6;
}
#picture2 {
position:absolute;
left:3%;
top:61%;
opacity:0.6;
}
button {
background-image:url(img/13.jpg);
background-repeat:no-repeat;
background-position:center;
padding-left:1pc;
color:#8B0000;
}
button:hover {
background-image:url(img/13.jpg);
color:orange;
font-weight:bold;
}
</style>
</style>
<title>快樂廚房</title>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-md-12" id="section1">
            <div class="row no-gutter" id="section1-1">
                <div class="col-md-3" id="leftbar">
                    <?php
                        $sql1 = "select  * from player  where pname='$pname'";
                        $results1=mysqli_query($conn,$sql1);
                        if($rows=mysqli_fetch_array($results1)){
                            echo"<div id=\"column\">",
                                "玩家名稱：".$rows["pname"]."</br>",
                                "等級:".$rows["level"]."</br>",
                                "金幣:".$rows["coin"]."</br>",
                                "經驗值：".$rows["exp"]."</br>",
                                "材料包:".$rows["material"]."個</br></br></div>";
                        }
                    ?>
                </div>
                <div class="col-md-9" id="table">
                   <table align="center"  cellspacing="10" cellpadding="8">
				   <thead><tr>
				   <th>薑餅人<br/><img src="img/8.png"width="200"height="150"/><br/>價錢:15元&nbsp;&nbsp;&nbsp;時間:1min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=1 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
						   
					   }
				   else echo "庫存:0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=1 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",1 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   <th>甜甜圈<br/><img src="img/6.png"width="200"height="150"/><br/>價錢:20元&nbsp;&nbsp;&nbsp;時間:2min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=2 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存:0個 ";
	              
				   ?>
				   &nbsp;&nbsp;&nbsp; <img src="img/15.jpg"width="25"height="20"/>
 				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=2 ";
				   $results=mysqli_query($conn,$sqlb);
				  
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",2 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   
				   <th>紅豆麵包<br/><img src="img/1.png"width="200"height="150"/><br/>價錢:25元&nbsp;&nbsp;&nbsp;時間:3min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=3 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存:0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=3 ";
				   $results=mysqli_query($conn,$sqlb);
				  
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",3 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   <th>杯子蛋糕<br/><img src="img/4.png"width="200"height="150"/><br/>價錢:30元&nbsp;&nbsp;&nbsp;時間:3min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=4 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存:0個 ";
					 
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=4 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",4 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   </tr></thead>
				   <thead><tr>
				   <th>法國麵包<br/><img src="img/5.png"width="200"height="150"/><br/>價錢:40元&nbsp;&nbsp;&nbsp;時間:4min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=5 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存 0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=5 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",5 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   <th>牛角麵包<br/><img src="img/3.png"width="200"height="150"/><br/>價錢:45元&nbsp;&nbsp;&nbsp;時間:5min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=6 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存 0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=6 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",6 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   <th>牛奶吐司<br/><img src="img/2.png"width="200"height="150"/><br/>價錢:50元&nbsp;&nbsp;&nbsp;時間:6min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=7 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存 0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=7 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",7 ,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   <th>燕麥吐司<br/><img src="img/7.png"width="200"height="150"/><br/>價錢:55元&nbsp;&nbsp;&nbsp;時間:7min<br/>
				   <?php
				   $sqlb = "select * from playerbread where pname='$pname' and bid=8 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rows=mysqli_fetch_array($results)){
						   echo "庫存: ".$rows["bnum"]."個 ";
					   }
				   else echo "庫存 0個 ";
				   ?>
				   &nbsp;&nbsp;&nbsp;<img src="img/15.jpg"width="25"height="20"/>
				   <?php
				   $sqlb = "select * from playerbread  where pname='$pname' and bid=8 ";
				   $results=mysqli_query($conn,$sqlb);
				   if($rs=mysqli_fetch_array($results)){
					   if($rs["bnum"]==0){
						   echo "<button>buy</button><br/></th>";
					   }
					   else echo "<button><a href='breadbuy.php?id=",8,"'>buy</a></button><br/></th>";
				   }
				   else echo "<button>buy</button><br/></th>";
				   ?>
				   </tr></thead>

				   
                   <br/><br/>
				   </table>
         
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
    </div>
	<div id="picture">
		<p><img src="img/m1.gif"width="200"/ ></p>
	</div>
	<div id="picture2">
		<p><img src="img/m5.gif"width="200"/ ></p>
	</div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<audio src="music/happy.mp3" controls autoplay loop hidden="true" >
</body>
</html>

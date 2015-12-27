<?php
require("config.php");
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
<link rel="stylesheet" href="css/kitchen.css">
<title>快樂廚房</title>
</head>
<style type="text/css">
body {
background-color:#DAA520;
background-image:url(img/back.jpg);
background-opacity:0.1;
background-position: 150px 300px;
}
#leftbar {
background: linear-gradient(to right,#DEB887 40%,#FFDAB9);
background-image:url(img/12.jpg);
background-repeat: no-repeat;
padding:8px 0px 3px 10px;
opacity:0.7;
letter-spacing: 4pt;
}
#table{
td {text-align: left;}
td+td {text-align:left; padding-left:10px}
}
#picture {
position:absolute;
left:5%;
top:25%;
opacity:0.35;
}
#picture2 {
position:absolute;
left:5%;
top:60%;
opacity:0.35;
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
<body>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-md-12" id="section1">
            <div class="row no-gutter" id="section1-1">
                <div class="col-md-3" id="leftbar">
				    <p></p>
                    <p>玩家名稱：<br/>
                    經驗值：<br/>
                    等級：<br/>
                    金幣：</p><br/><br/><br/>
                </div>
                <div class="col-md-9" id="main">
                    <div class="link1">
                        <a href="bake.php"><img id="koven"src="img/kioven.png" width="300" height="200" hspace="200" class="img-rounded" alt="Bake"></a>
                    </div>
                </div>        
            </div>
            <div class="row no-gutter">
                <div class="col-md-12" id="space"> </div>
            </div>
            <div class="row no-gutter" id="button">
			<button onclick="self.location.href='material.php'" style="position:absolute; bottom:10px; left:10px; width:120px; height:40px; font-size:20px">材料包</button>
			<button onclick="self.location.href='bread.php'" style="position:absolute; bottom:10px; left:140px;width:120px; height:40px; font-size:20px;">麵包圖鑑</button>
			<button onclick="self.location.href='login.php'" style="position:absolute; bottom:10px; right:10px;width:120px; height:40px; font-size:20px;">登出</button>
            </div>
        </div>
    </div>
	<div id="picture">
		<p><img src="img/chef.jpg"width="200"/ ></p>
	</div>
	<div id="picture2">
		<p><img src="img/chef2.jpg"width="250"/ ></p>
	</div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

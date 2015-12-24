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
<style type="text/css">
body {
background-color:#DAA520;
background-image:url(bread/back.jpg);
background-opacity:0.1;
background-position: 150px 300px;
}
#leftbar {
background: linear-gradient(to right,#DEB887 40%,#FFDAB9);
background-image:url(bread/12.jpg);
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
left:30px;
top:120px;
opacity:0.35;
}
#picture2 {
position:absolute;
left:30px;
top:350px;
opacity:0.35;
}
button {
background-image:url(bread/13.jpg);
background-repeat:no-repeat;
background-position:center;
padding-left:1pc;
color:#8B0000;
}
button:hover {
background-image:url(bread/13.jpg);
color:orange;
font-weight:bold;
}
</style>
<title>快樂廚房</title>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-md-12" id="section1">
            <div class="row no-gutter" id="section1-1">
                <div class="col-md-3" id="leftbar">
                    <p>玩家名稱：<br/>
                    經驗值：<br/>
                    等級：<br/>
                    金幣：</p><br/>
                </div>
                <div class="col-md-9" id="main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6" id="oven1">
                                <button type="button" class="oven btn btn-link" onclick=""></button>
                            </div>
                            <div class="col-md-6" id="oven2">
                                <button type="button" class="oven btn btn-link" onclick=""></button>
                            </div>
                            <div class="col-md-6" id="oven3">
                                <button type="button" class="oven btn btn-link" onclick=""></button>
                            </div>
                            <div class="col-md-6" id="oven4">
                                <button type="button" class="oven btn btn-link" onclick=""></button>
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
                    <button onclick="self.location.href='material.php'">材料包</button>
                </div>
                <div class="col-md-1 col-xs-4">
                    <button onclick="self.location.href='bread.php'">麵包圖鑑</button>
                </div>
                <div class="col-md-1 col-xs-4 col-md-offset-9">
                    <button onclick="self.location.href='kitchen.php'">返回</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

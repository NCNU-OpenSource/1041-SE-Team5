<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 最新編譯和最佳化的 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- 選擇性佈景主題 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<title>快樂廚房</title>
<style type="text/css">
#main{
font-size:14pt;
}
</style>
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
                    <table align="center"  cellspacing="10" cellpadding="5" >
                    <thead><tr>
                    <th width="210"height="165"align="Center">紅豆麵包<br/><img src="img/1.jpg"width="200"height="150"/><br/>材料包：1<br/></th>
                    <th width="210"height="165"align="Center">乳酪麵包<br/><img src="img/2.jpg"width="200"height="150"/><br/>材料包：1<br/></th>
                    <th width="210"height="165"align="Center">蔥花麵包<br/><img src="img/3.jpg"width="200"height="150"/><br/>材料包：2<br/></th>
                    <th width="210"height="165"align="Center">炸彈麵包<br/><img src="img/4.jpg"width="200"height="150"/><br/>材料包：2<br/></th>
                    </tr></thead><br/><br/><br/>
                    <thead><tr>
                    <th width="210"height="165"align="Center">法國麵包<br/><img src="img/5.jpg"width="200"height="150"/><br/>材料包：2<br/></th>
                    <th width="210"height="165"align="Center">牛奶土司<br/><img src="img/6.jpg"width="200"height="150"/><br/>材料包：3<br/></th>
                    <th width="210"height="165"align="Center">葡萄吐司<br/><img src="img/7.jpg"width="200"height="150"/><br/>材料包：3<br/></th>
                    <th width="210"height="165"align="Center">燕麥吐司<br/><img src="img/8.jpg"width="200"height="150"/><br/>材料包：3<br/></th>
                    </tr></thead>
                    <thead><tr><th>庫存:</th><th></th><th>交易金額:</th><th></th></tr></thead>
                    </table>
                    <br/><br/><br/><br/><br/><br/>
                </div>        
            </div>
            <div class="row no-gutter">
                <div class="col-md-12" id="space"> </div>
            </div>
            <div class="row no-gutter" id="button">
<button onclick="self.location.href='材料包.php'" style="position:absolute; bottom:10px; left:10px; width:120px; height:40px; font-size:20px">材料包</button>
<button onclick="self.location.href='bread.php'" style="position:absolute; bottom:10px; left:140px;width:120px; height:40px; font-size:20px;">麵包圖鑑</button>
<button onclick="self.location.href='kitchen.php'" style="position:absolute; bottom:10px; right:10px;width:120px; height:40px; font-size:20px;">返回</button>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

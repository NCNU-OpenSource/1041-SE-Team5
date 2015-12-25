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
font-size:14pt;
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
</style>
<title>快樂廚房</title>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="wrapper">
        <div class="col-md-12" id="section1">
            <div class="row no-gutter" id="section1-1">
                <div class="col-md-3" id="leftbar">
				    <p>
                    <p>玩家名稱：<br/>
                    經驗值：<br/>
                    等級：<br/>
					金幣：</p><br/><br/><br/>
                </div>
                <div class="col-md-9" id="table">
                   <table align="center"  cellspacing="10" cellpadding="8">
				   <thead><tr>
				   <th>紅豆麵包<br/><img src="bread/1.jpg"width="150"height="100"/><br/>價錢:25元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>乳酪麵包<br/><img src="bread/2.jpg"width="150"height="100"/><br/>價錢:35元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>蔥花麵包<br/><img src="bread/3.jpg"width="150"height="100"/><br/>價錢:20元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>炸彈麵包<br/><img src="bread/4.jpg"width="150"height="100"/><br/>價錢:35元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   </tr></thead>
				   <thead><tr>
				   <th>法國麵包<br/><img src="bread/5.jpg"width="150"height="100"/><br/>價錢:40元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>牛奶土司<br/><img src="bread/6.jpg"width="150"height="100"/><br/>價錢:60元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>葡萄吐司<br/><img src="bread/7.jpg"width="150"height="100"/><br/>價錢:65元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>燕麥吐司<br/><img src="bread/8.jpg"width="150"height="100"/><br/>價錢:80元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   </tr></thead>

				   <thead><tr><th>交易金額:</th><th></th><th><button>交易</button></th></tr></thead>
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
		<p><img src="bread/chef.jpg"width="200"/ ></p>
	</div>
	<div id="picture2">
		<p><img src="bread/chef2.jpg"width="250"/ ></p>
	</div>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
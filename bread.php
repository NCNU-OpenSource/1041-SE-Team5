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
background-image:url(back2.jpg);
background-opacity:0.1;
background-position: 150px 300px;
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
                    <p>玩家名稱：<br/>
                    經驗值：<br/>
                    等級：<br/>
                    金幣：</p><br/>
                </div>
                <div class="col-md-9" id="table">
                   <table align="center"  cellspacing="10" cellpadding="8">
				   <thead><tr>
				   <th>紅豆麵包<br/><img src="1.jpg"width="200"height="150"/><br/>價錢:25元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>乳酪麵包<br/><img src="2.jpg"width="200"height="150"/><br/>價錢:35元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>蔥花麵包<br/><img src="3.jpg"width="200"height="150"/><br/>價錢:20元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>炸彈麵包<br/><img src="4.jpg"width="200"height="150"/><br/>價錢:35元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   </tr></thead>
				   <thead><tr>
				   <th>法國麵包<br/><img src="5.jpg"width="200"height="150"/><br/>價錢:40元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>牛奶土司<br/><img src="6.jpg"width="200"height="150"/><br/>價錢:60元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>葡萄吐司<br/><img src="7.jpg"width="200"height="150"/><br/>價錢:65元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   <th>燕麥吐司<br/><img src="8.jpg"width="200"height="150"/><br/>價錢:80元<br/>時間:5min<br/>庫存:10個<br/><button>+</button><button>-</button><br/>數量:</th>
				   </tr></thead>

				   <thead><tr><th>交易金額:</th><th></th><th><button>交易</button></th></tr></thead>

				   </table>
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

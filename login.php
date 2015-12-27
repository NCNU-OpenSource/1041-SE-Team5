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
</head>
<style type="text/css">
body {
background-color:#DAA520;
background-image:url(login/login1.png);
background-size:100% 100%;
background-opacity:0.1;
background-repeat: no-repeat;
background-size:cover;
}


</style>
<?php
session_start();
$host = 'localhost';
$user = 'Gina';
$pass = '48477984';
$db = 'kitchen';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

$_SESSION['uID'] = "";//只要在跑這個php之前login的到這行會有logout的效果，才能重新login
if(isset( $_POST['id'])){
	$userName = $_POST['id'];
	$passWord = $_POST['pwd'];
}else
{
	$userName ="";
	$passWord ="";
}

		$sql = "SELECT * FROM player WHERE pid='" . $userName . "' AND pwd= '" . $passWord . "'";
		if($userName !="" && $passWord !=""){
			if ($result = mysqli_query($conn,$sql)) {
				if ($row=mysqli_fetch_array($result)) {
					$_SESSION['uID'] = $row['id'];
                    $_SESSION['pname'] = $row['pname'];
					header("Location:kitchen.php");
					//echo "<a href='02.list.php'>go</a>";
					echo "Yes";
					exit(0);
				} 
				else
				{
					echo"<script>alert('Invalid Username or Password - Please try again')</script>";
					//echo "Invalid Username or Password - Please try again <br />";
				}
			}	
		}
		


		
?>
<body>

<div style="position: absolute;bottom: 0;left:100px">
<form method="post" action="regist.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="image" value="Log in" src="regist.jpg" >
</form>
<form method="post" action="login.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="image" value="Log in" src="login.png" >
</form>
</div>


<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
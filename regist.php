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

<?php
$host = 'localhost';
$user = 'Gina';
$pass = '48477984';
$db = 'kitchen';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫
$id=mysqli_real_escape_string($conn, $_POST['id']   ); //取得名子為title的值post送給string字串存起來
$pname=mysqli_real_escape_string($conn,    $_POST['pname']   ); 
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);

$sql5="SELECT pid FROM player where pid = '$id'";
$result=mysqli_query($conn,$sql5);
$row = mysqli_fetch_row($result);
if($row){
	echo '<script type="text/javascript">alert("Repeated Account!");</script>';
	echo '<script>history.back()</script>';
}
else { //留言一定要有標題
	$sql = "insert into player (pid,pname, pwd) values ('$id','$pname','$pwd');"; 
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
    $sql1 = "insert into ovenplayer (oid, pid, status) values (1, '$id', 0)";
	mysqli_query($conn,$sql1) or die("MySQL insert message error1"); //執行SQL
    $sql2 = "insert into ovenplayer (oid, pid) values (2, '$id')";
	mysqli_query($conn,$sql2) or die("MySQL insert message error2"); //執行SQL
    $sql3 = "insert into ovenplayer (oid, pid) values (3, '$id')";
	mysqli_query($conn,$sql3) or die("MySQL insert message error3"); //執行SQL
    $sql4 = "insert into ovenplayer (oid, pid) values (4, '$id')";
	mysqli_query($conn,$sql4) or die("MySQL insert message error4"); //執行SQL
	echo "message added.";
	header("Location:login.php");
} 

?>
<body>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<!-- 最新編譯和最佳化的 JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
//�N�Ҧ������|�Ψ쪺����b�o�̡A�ݭn�ϥΦA��require("congig.php")�I�s,but login.php�i��|�����D
session_start();
$host = 'localhost'; 
$user = 'Gina';
$pass = '48477984';
$db = 'kitchen';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //��MyMSQL�s�u�õn�J
mysqli_query($conn,"SET NAMES utf8"); //��ܽs�X
//mysql_select_db($db, $conn); //��ܸ�Ʈw

if(!isset( $_SESSION["uID"]))
	header("Location:login.php");
	
if($_SESSION["uID"]=="")
	header("Location:login.php");

?>
<html>
<body>
<embed src="music/happy.mp3" autostart=true hidden="true" loop="-1">
</body>
</html>
<?php
include"config.php";
$id=$_SESSION['uID'];
/* GET¶Ç¨Óªº­È*/
$a=$_GET['oid'];

$sqlyy = "update ovenplayer set status=2, btime=0 where oid='$a' and pid='$id'";
mysqli_query($conn,$sqlyy);

header("Location:bake.php");
?>
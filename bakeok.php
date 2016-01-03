<?php
include"config.php";
$id=$_SESSION['pname'];
/* GET¶Ç¨Óªº­È*/
$a=$_GET['oid'];

$sqlyy = "update ovenplayer set status=2, btime=0 where oid='$a' and pname='$id'";
mysqli_query($conn,$sqlyy);

header("Location:bake.php");
?>
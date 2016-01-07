<?php
include"config.php";
$id=$_SESSION['uID'];
/* GET¶Ç¨Óªº­È*/
$a=$_GET['oid'];

$unlock = "select * from player where pid='$id'";
$result=mysqli_query($conn,$unlock);
if($rowul=mysqli_fetch_array($result)){
    if($rowul['coin']>=1000){
        $sqlco = "update player set coin=coin-1000 where pid='$id'";
        mysqli_query($conn,$sqlco);
        $sqlunloc = "update ovenplayer set status=0 where pid='$id' and oid='$a'";
        mysqli_query($conn,$sqlunloc);
   }
}
header("Location:bake.php");
?>
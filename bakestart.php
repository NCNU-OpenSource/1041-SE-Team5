<?php
include"config.php";
$id=$_SESSION['uID'];
   /*GET¶Ç¨Óªº­È*/
$material = $_POST["m_num"];
$oven = $_POST["oven_s"];

$sql1 = "select * from player where pid='$id'";
$result1=mysqli_query($conn,$sql1);
$rs1=mysqli_fetch_array($result1);

$sql = "select * from bread where m_num='$material' and avallevel<='".$rs1['level']."'";
if($results=mysqli_query($conn,$sql)){
    if($rs=mysqli_fetch_array($results)){
        $time=date('U')+25200;
        $sqlb = "update ovenplayer set bid=".$rs[bid]." , btime='".$time."'+'".$rs['baketime']."', status=1 where pid='".$id."' and oid='".$oven."'";
        mysqli_query($conn,$sqlb)or die("MySQL query error");
        $sqlc = "update player set material=material-'".$material."' where pid='".$id."'";
        mysqli_query($conn,$sqlc)or die("MySQL query error");
        echo 'success';
        header("Location:bake.php");
    }
} else {
    echo 'Error!!';
}

?>
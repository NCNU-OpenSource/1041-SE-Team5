<?php
include"config.php";
$pid=$_SESSION['uID'];
   /*GET傳來的值*/
$sql = "select * from playerbread where pid=$pid;";

$results=mysqli_query($conn,$sql);
$sqlcoin = "select * from player where pid=$pid;";

$results=mysqli_query($conn,$sqlcoin);
$id=(int)$_GET["id"];


    if($id==1){
        $sql1 = "update playerbread set bnum=bnum-1  where pid='$pid' and bid=1";
        mysqli_query($conn,$sql1) or die("MySQL query error"); 
        $sqlc = "update player set coin=coin+20  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
						   
    if($id==2){
        $sql2 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=2 ";
        mysqli_query($conn,$sql2) or die("MySQL query error");
        $sqlc = "update player set coin=coin+35  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==3){
        $sql3 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=3 ";
        mysqli_query($conn,$sql3) or die("MySQL query error");
        $sqlc = "update player set coin=coin+55  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==4){
        $sql4 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=4 ";
        mysqli_query($conn,$sql4) or die("MySQL query error");
        $sqlc = "update player set coin=coin+70  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==5){
        $sql5 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=5 ";
        mysqli_query($conn,$sql5) or die("MySQL query error");
        $sqlc = "update player set coin=coin+90  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==6){
        $sql6 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=6 ";
        mysqli_query($conn,$sql6) or die("MySQL query error");
        $sqlc = "update player set coin=coin+105  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==7){
        $sql7 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=7 ";
        mysqli_query($conn,$sql7) or die("MySQL query error");
        $sqlc = "update player set coin=coin+125  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==8){
        $sql8 = "update playerbread set bnum=bnum-1 where pid='$pid' and bid=8 ";
        mysqli_query($conn,$sql8) or die("MySQL query error");
        $sqlc = "update player set coin=coin+140  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }

	

header("Location:bread.php");
?>


<?php
include"config.php";
$pid=$_SESSION['uID'];
   /*GET傳來的值*/
$sql = "select * from player where pid='$pid';";

$results=mysqli_query($conn,$sql);
$sqlcoin = "select * from player where pid='$pid';";

$results=mysqli_query($conn,$sqlcoin);
$id=(int)$_GET["id"];


    if($id==1){
        $sql1 = "update player set material=material+1  where pid='$pid' ";
        mysqli_query($conn,$sql1) or die("MySQL query error"); 
        $sqlc = "update player set coin=coin-15  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
						   
    if($id==2){
        $sql2 = "update player set material=material+1 where pid='$pid'  ";
        mysqli_query($conn,$sql2) or die("MySQL query error");
        $sqlc = "update player set coin=coin-15  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==3){
        $sql3 = "update player set material=material+2 where pid='$pid'  ";
        mysqli_query($conn,$sql3) or die("MySQL query error");
        $sqlc = "update player set coin=coin-30  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==4){
        $sql4 = "update player set material=material+2 where pid='$pid' ";
        mysqli_query($conn,$sql4) or die("MySQL query error");
        $sqlc = "update player set coin=coin-30  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==5){
        $sql5 = "update player set material=material+2 where pid='$pid' ";
        mysqli_query($conn,$sql5) or die("MySQL query error");
        $sqlc = "update player set coin=coin-30  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==6){
        $sql6 = "update player set material=material+3 where pid='$pid'  ";
        mysqli_query($conn,$sql6) or die("MySQL query error");
        $sqlc = "update player set coin=coin-45  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==7){
        $sql7 = "update player set material=material+3 where pid='$pid'  ";
        mysqli_query($conn,$sql7) or die("MySQL query error");
        $sqlc = "update player set coin=coin-45  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }
    if($id==8){
        $sql8 = "update player set material=material+3 where pid='$pid'  ";
        mysqli_query($conn,$sql8) or die("MySQL query error");
        $sqlc = "update player set coin=coin-45  where pid='$pid' ";
        mysqli_query($conn,$sqlc) or die("MySQL query error"); 		
    }

	

header("Location:material.php");
?>


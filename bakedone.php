<?php
include"config.php";
$id=$_SESSION['pname'];
/* GET¶Ç¨Óªº­È*/
$a=$_GET['oid'];
$b=$_GET['bid'];
$pbid=$id.'_'.$b;

$sql = "update ovenplayer set status=0 , bid=0 where oid='$a' and pname='$id'";
mysqli_query($conn,$sql);

$sql2 = "INSERT INTO playerbread (pbid, bid, pname, bnum) VALUES ('$pbid', '$b', '$id', '1') ON DUPLICATE KEY UPDATE bnum = bnum + 1";
mysqli_query($conn,$sql2);

$sqlh = "select * from bread where bid='$b'";
$results=mysqli_query($conn,$sqlh);
$rs=mysqli_fetch_array($results);
$sql = "update player set exp=exp+".$rs['bakeexp']." where pname='$id'";
mysqli_query($conn,$sql);

    /*level up*/
$levelup = "select  level , exp from player where pname='$id'";
$result=mysqli_query($conn,$levelup);
if($rowlv=mysqli_fetch_array($result)){
    if($rowlv['exp']>=100*$rowlv['level']){
        $sqllvup = "update player set level=level+1 , exp=exp".-100*$rowlv['level']." where pname='$id'";
        mysqli_query($conn,$sqllvup);
        if($rowlv['level']=='10'){
            $sqlunlock1 = "update ovenplayer set status=3 where pname='$id' and oid='2'";
            mysqli_query($conn,$sqlunlock1);
        }
        if($rowlv['level']=='20'){
            $sqlunlock2 = "update ovenplayer set status=3 where pname='$id' and oid='3'";
            mysqli_query($conn,$sqlunlock2);
        }
        if($rowlv['level']=='30'){
            $sqlunlock3 = "update ovenplayer set status=3 where pname='$id' and oid='4'";
            mysqli_query($conn,$sqlunlock3);
        }
   }
}

header("Location:bake.php");
?>
<?php
session_start();   
include 'config.php';
$med=$_POST['mname'];
$u1=$_POST['use1'];
$u2=$_POST['use2'];
$s="insert into medtable(medname,use1,use2) values('$med','$u1','$u2')";
if(mysqli_query($conn,$s))
{
    echo "<p align=center><font face=castellar size=8>submitted successfully</font></p>";
    echo"<br><br>REDIRECTING TO HOME PAGE.......................";
    echo "<img src=loading.gif>";
    header("Refresh:3; url='admin.php'");
}
?>

<?php
session_start();
include 'config.php';

$admin_id=$_POST['ad_email'];
$admin_pass=$_POST['admin_pass'];
$q="select ad_id,pass from admin where (ad_id='$admin_id' and pass='$admin_pass')";
$run=mysqli_query($conn,$q);
$c=mysqli_num_rows($run);
if($run)
{
    $row=mysqli_fetch_array($run);
    echo "<div class=container><p align=center><font face=castellar size=8>LLOGIN successfull<br>redirecting to admin home!!!!!!</font></p</div>";
    echo "<img src=loading.gif>";
    header('Refresh: 3 URL= "admin.php"');
    $_SESSION['aid']=$row['ad_id'];
}
else{
        echo "<h2><b>INCORRECT EMAIL OR PASSWORD</b></h2>";
        header('Refresh:3 url="admin_index.php"');
    }
?>
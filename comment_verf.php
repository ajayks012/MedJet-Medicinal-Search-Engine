<?php
include ('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$comm=$_POST['comment'];
$sq="insert into contact(name,email,comments) values('$name','$email','$comm')";
if(mysqli_query($conn,$sq)){
    echo "<p align=center><font face=castellar size=8>comment submitted successfully</font></p>";
    echo"<br><br>REDIRECTING TO HOME PAGE.......................";
    echo "<img src=loading.gif>";
    header("Refresh:3; url='index.php'");
}
?>
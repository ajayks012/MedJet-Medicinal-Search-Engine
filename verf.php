
<html>
<head>
<title>MEDSEARCH RESULT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table, th, td {
	border: 2px solid black;
}
th, td{
	border: 1px solid #ddd;
	padding: 8px;
}
table{
width : 100%;
}
th{
background-color: #4CAF50;
color: white;
font-size: 25px;
}
td{
font-size: 17px;
}
tr:nth-child(even){
background-color: #f2f2f2;
}
</style>
<body bgcolor="#05EC8E">
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">MedJet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="#"><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </div>
</nav>
</body>
</head>
</html>
<?php
session_start();
include('config.php');
if(isset($_POST['medname'])){
	$med=$_POST['medname'];
	$sql="SELECT medname,use1,use2 FROM medtable WHERE (medname LIKE '%$med%' or use1 LIKE '%$med%' or use2 LIKE '%$med%')";
	$run_query=mysqli_query($conn,$sql);
	echo "<table>
	<tr>
	<th>MEDICINE NAME</th>
   	<th>USES</th>
	</tr>"; 
	while($row=mysqli_fetch_array($run_query)){
		$name=$row['medname'];
		$u1=$row['use1'];
		$u2=$row['use2'];
		echo "<tr>";
		echo "<td>$name</td>";
		echo "<td>$u1,&nbsp;$u2</td>";
		echo "</tr>";
	}
	echo "</table>";
}		
?>
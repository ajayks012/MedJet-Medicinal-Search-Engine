<?php
include 'config.php';
/*if(isset($_SESSION['aid'])){
		header('location:admin.php');
	}
else
{
    header('location:index.php');
}*/
?>
<html>
    <head>
        <title>MedSite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .foot{
        background-color: #f3e5f5;
        padding: 20px;
        }
form {
    border: 3px solid #f1f1f1;
}

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.sub_button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
.sub_button:hover {
    opacity: 0.8;
}

.sub_button {
    width: auto;
    padding: 10px 18px;
    background-color: #009900;
}



/* Add padding to containers */
.container {
    padding: 16px;
}
        .foot{
        background-color: #f3e5f5;
        padding: 20px;
        }

    </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
                <a href="index.php" class="navbar-brand"><b><i><font size=5>MedJet</font></i></b></a>
			</div>
            <ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LogOut</a>
                </li>
            </ul>
		</div>
	</div>
        <form action="insert.php" method="POST">
<div class="container"><br><br><br>
    <h1>ADMIN Home</h1>
    <label for="med_name"><b>Medicine Name</b></label>
    <input type="text" placeholder="Medicine Name" name="mname" required><br>

    <label for="use1"><b>Use 1</b></label>
    <input type="text" placeholder="Use 1" name="use1" required><br>
    <label for="use2"><b>Use 2</b></label>
    <input type="text" placeholder="Use 2" name="use2" required><br>

    <input type="submit" value="Submit" class="sub_button">
  </div>
</form>
    </body>
</html>
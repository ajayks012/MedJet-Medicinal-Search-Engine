
<html>

<head>
    <title>MedJet</title>
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
    </style>
</head>

<body bgcolor="#05EC8E">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">MedJet</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="#"><a href="#">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin_index.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin LOGIN</a>
                </li></ul>
        </div>
    </nav>
    <div class="panel panel-primary" style="background-image:url('pills.jpg');background-repeat:no-repeat;width:1365px;height:500px">
        <b>
            <div class="panel panel-heading">
                <P align="center">
                    <font face="castellar" size="7">MED-JET</font>
                </P>
            </div>
            <div class="panel panel-heading">
                <form method="POST" action="verf.php">
                    <p align="center">
                        <font size="5">
                            <input type="text" name="medname" id="medname" placeholder="search..." required>
                            <button type="SUBMIT"><span class="glyphicon glyphicon-search"></span></button></font>
                    </p>
                </form>
            </div>
        </b>
    </div>
    <footer id="foot" class="foot"><div class="footer-content">
    &copy;SSET, S5 CS1(2018-19)
    </div></footer>
</body>

</html>

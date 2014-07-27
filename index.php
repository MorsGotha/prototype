<?php

$main = "home";
if (isset($_GET["main"])) {
    $main = $_GET["main"];
}

$sub = "news";
if (isset($_GET["sub"])) {
    $sub = $_GET["sub"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Davidsons Application Prototype</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style.css">
</head> 

<body>
    
<div id="container-fluid">

    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

        <div class="collapse navbar-collapse" id="navbarCollapse">

           <ul class="nav navbar-nav">
                <li<?php if ($main=="home") echo ' class="active"'; ?>>
                    <a href="index.php" class="glyphicon glyphicon-home"> Home</a>
                </li>
                <li<?php if ($main=="technical") echo ' class="active"'; ?>>
                    <a href="?main=technical&sub=dashboard" class="glyphicon glyphicon-list-alt"> Technical</a>
                </li>
                <li<?php if ($main=="commercial") echo ' class="active"'; ?>>
                    <a href="?main=commercial&sub=dashboard" class="glyphicon glyphicon-shopping-cart"> Commercial</a>
                </li>
                <li<?php if ($main=="construction") echo ' class="active"'; ?>>
                    <a href="?main=construction&sub=dashboard" class="glyphicon glyphicon-wrench"> Construction</a>
                </li>
                <li<?php if ($main=="sales") echo ' class="active"'; ?>>
                    <a href="?main=sales&sub=dashboard" class="glyphicon glyphicon-gbp"> Sales</a>
                </li>
                <li<?php if ($main=="customersupport") echo ' class="active"'; ?>>
                    <a href="?main=customersupport&sub=dashboard" class="glyphicon glyphicon-phone-alt"> Customer Support</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Gary Jarvis Logged In <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
    
<div class="container-fluid">
    <div class="row" style="padding-top: 60px;">
        <div class="col-xs-3 pull-left">

            <?php include "views/$main/sidebar.php"; ?>

        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <?php include "views/$main/$sub.php"; ?>
    </div>
</div>
    
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>                                		
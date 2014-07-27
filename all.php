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
<title>Davidsons Application Prototype - All</title>
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
                    <a href="all.php" class="glyphicon glyphicon-home"> Home</a>
                </li>
                <li<?php if ($main=="technical") echo ' class="active"'; ?>>
                    <a href=""  id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Technical <span class="glyphicon glyphicon-chevron-down"></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Sites</a></li>
                        <li><a href="#">Plots</a></li>
                        <li><a href="#">Schedules</a></li>
                    </ul>
                </li>
                <li<?php if ($main=="commercial") echo ' class="active"'; ?>>
                    <a href=""  id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Tender It <span class="glyphicon glyphicon-chevron-down"></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Calloffs</a></li>
                    </ul>
                </li>
                <li<?php if ($main=="construction") echo ' class="active"'; ?>>
                    <a href=""  id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> Build Programme <span class="glyphicon glyphicon-chevron-down"></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Build Release</a></li>
                        <li><a href='#'>Programme</a></li>
                    </ul>
                </li>
                <li<?php if ($main=="sales") echo ' class="active"'; ?>>
                    <a href="" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-gbp"></span> Sell It <span class="glyphicon glyphicon-chevron-down"></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Sales release</a></li>
                        <li><a href='#'>Purchasers</a></li>
                        <li><a href='#'>Standard Selection</a></li>
                        <li><a href='#'>Extras</a></li>
                    </ul>
                </li>
                <li<?php if ($main=="customersupport") echo ' class="active"'; ?>>
                    <a href="" id="nbAcctDD" class="dropdown-toggle"><span class="glyphicon glyphicon-ok"></span> Bulk Call Offs</a>
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

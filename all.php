<?php

$main = "home";
if (isset($_GET["main"])) {
    $main = $_GET["main"];
}

$sub = "news";
if (isset($_GET["sub"])) {
    $sub = $_GET["sub"];
}

require 'connect.php';

//include './notes/get_notes.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Davidsons Application Prototype</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="./notes/styles.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>


<link rel="stylesheet" href="style.css">

</head> 

<body>
<div id="main">
            
<div class="container-fluid">

    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">

        <div class="collapse navbar-collapse" id="navbarCollapse">

           <ul class="nav navbar-nav">
                <li<?php if ($main=="home") echo ' class="active"'; ?>>
                    <a href="all.php" class="glyphicon glyphicon-home"> Home</a>
                </li>
                <li<?php if ($main=="stdhousetypes") echo ' class="active"'; ?>>
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Std House Types <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="all.php?main=stdhousetypes&sub=dashboard">Dashboard</a></li>
                        <li><a href="all.php?main=stdhousetypes&sub=types">3 Bed</a></li>
                        <li><a href="all.php?main=stdhousetypes&sub=types">4 Bed</a></li>
                        <li><a href="all.php?main=stdhousetypes&sub=types">5 Bed</a></li>
                        <li><a href="all.php?main=stdhousetypes&sub=types">Social</a></li> 
                    </ul>
                </li>
                <li<?php if ($main=="stdgaragetypes") echo ' class="active"'; ?>>
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Std Garage Types </span></a>
                </li>
                <li<?php if ($main=="developments") echo ' class="active"'; ?>>
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Developments <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="all.php?main=developments&sub=dashboard">Dashboard</a></li>
                        <li><a href="all.php?main=developments&sub=sites">Maintenance</a></li>
                        <li><a href="all.php?main=developments&sub=plots_on_sites">Sites</a></li>
                    </ul>
                </li>
                <li<?php if ($main=="admin") echo ' class="active"'; ?>>
                <li class="dropdown">
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> Admin <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Access Control</a></li>
                        <li><a href="#">Users</a></li>
                        <li><a href="#">Coins</a></li>
                        <li><a href="#">News Editor</a></li>
                        <li><a href="#">Email Alerts</a></li>
                        <li><a href="#">Miscellaneous</a></li>
                        <li><a href="all.php?main=admin&sub=buildstages">Master Library - Build Stages</a></li>
                        <li><a href="all.php?main=admin&sub=drawings">Master Library - Drawings</a></li>
                        <li><a href="all.php?main=admin&sub=schedules">Master Library - Schedules</a></li>
                        <li><a href="all.php?main=admin&sub=products">Master Library - Products</a></li>
                        <li><a href="all.php?main=admin&sub=stdhousetypes">Master Library - Std House Type Menu</a></li>
                        <li><a href="all.php?main=admin&sub=sales">Master Library - Sales Extras</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="#" id="nbAcctDD" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Gary Jarvis Logged In <span class="glyphicon glyphicon-chevron-down"></span></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Your Details</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
    
<div class="container-fluid">
    <div class="row" style="padding-top: 60px;">
        <!--a id="addButton" class="green-button" href="./notes/add_note.html" style="margin-top: 130px; margin-left: 500px; z-index:1000">Add a note</a-->

        <?php include "viewsall/$main/$sub.php"; ?>

        <?php //echo $notes; ?>
        
    </div>
</div>
</div>
    
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>                                		
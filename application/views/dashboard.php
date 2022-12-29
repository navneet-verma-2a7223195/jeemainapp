<html xmlns="http://www.w3.org/1999/xhtml"><head><title>
	Instructions
</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/Images/favicon.ico"><link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet"><link href="../App_Themes/ClassicNew/css/style.css" rel="stylesheet"><link href="<?php echo base_url();?>assets/css/chosen_New.css" rel="stylesheet"><link href="<?php echo base_url();?>assets/Font/font-awesome.min.css" rel="stylesheet">
    
    <script src="<?php echo base_url();?>assets/Bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/Bootstrap/js/bootstrap3.3.7.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
        window.onload = window.history.forward(0);  //calling function on window onload
        window.history.forward(); function noBack() { window.history.forward(); }
        function burstCache() {
            if (!navigator.onLine) {
                window.location = "../SessionExpirePage.htm";
            }
        }
        history.go(1); /* undo user navigation (ex: IE Back Button) */
    </script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/script/Application.js"></script>
    
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/script/validation.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">

           function DisableButton() {
            var chkadharaggreement = document.getElementById('ctl00_ContentPlaceHolder1_chkagreement');
            var Buttvalidate = document.getElementById('ctl00_ContentPlaceHolder1_btnsubmit');
            Buttvalidate.disabled = true;
            chkadharaggreement.checked = false;
        }
        function EnableButton() {
           
            var chkadharaggreement = document.getElementById('ctl00_ContentPlaceHolder1_chkagreement');
            var Buttvalidate = document.getElementById('ctl00_ContentPlaceHolder1_btnsubmit');
            if (chkadharaggreement.checked == true) {
                Buttvalidate.disabled = false;
                return;
            }
            if (chkadharaggreement.checked == false) {
                Buttvalidate.disabled = true;
                return;
            }

        }



    </script>



</head>
<body onload="burstCache();">
    <form name="aspnetForm" method="post" action="<?php echo base_url().'index.php/Auth/registered'?>" id="aspnetForm" autocomplete="off">
<div>
<input type="hidden" name="ctl00_ToolkitScriptManager1_HiddenField" id="ctl00_ToolkitScriptManager1_HiddenField" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="0BEFC1F1">
	<input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
	<input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
	<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="kr/KNspIwib9ujmET1flFjpAiySiHozNeQfZ+S4TshtaGCdH08w8ue9saHDdk8YGVEp5fBwXyi0CmetD39EW5jLdBeyieghza78aTRCB82CI12JKuva9UnHgcUGefpXQzs/5RhMAENVX4ZNO4fpDHNGkgr4=">
</div>
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ToolkitScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>


        <section class="headerfirst">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img id="ctl00_imgLogoRight" class="img-responsive pull-left" src="https://examinationservices.nic.in/JEEMain23/Handler/Handler1.ashx?value=R&amp;appFormId=101032311" style="border-width:0px;">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <h1 class="text-center">
                            <span id="ctl00_lblHeader">JEE(Main) 2023</span>
                        </h1>
                        <h3 class="text-center">
                            <span id="ctl00_lblSubHeader">Session 1</span>
                        </h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img id="ctl00_imgLogoLeft" class="img-responsive pull-right" src="https://examinationservices.nic.in/JEEMain23/Handler/Handler1.ashx?value=L&amp;appFormId=101032311" style="border-width:0px;">
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url('index.php/Auth/dashboard');?>" id="ctl00_aHome" class="nav-link"><i class="fa fa-home">&nbsp;</i>Home</a>
                            </li>
							
							<li>
								<a href="<?php echo base_url().'index.php/auth/logout'?>" class="nav-item text-white">
									Log out

								</a>
							</li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <!---------------End Script to Use active class in Each menu --------------->
        
    
    <style>
        .contentmid ul li {
            font-size: 14px;
        }
    </style>
    


        <section class="footersec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <p class="text-left">
                            <b>Welcome <?php echo $user['candidate_name'];?>,</b><br>
                            <span id="ctl00_lblDisclaimer">
							<div id="name" class="nav-link">
							<i class="fa fa-home">&nbsp;</i> <?php echo 'Your application number is '.$user['id'];?></div>
								
							
							
							
                        </p>
                    </div>

                </div>
            </div>
        </section>
    

<script type="text/javascript">
//<![CDATA[
(function() {var fn = function() {$get("ctl00_ToolkitScriptManager1_HiddenField").value = '';Sys.Application.remove_init(fn);};Sys.Application.add_init(fn);})();
theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>
</form>




</body></html>

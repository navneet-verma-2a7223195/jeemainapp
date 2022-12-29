<html xmlns="http://www.w3.org/1999/xhtml" class=" dk_fouc">
	<head>
		<title>
			Jee Main 2023
		</title>
		<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/Images/favicon.ico">
		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/chosen_New.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/Font/font-awesome.min.css" rel="stylesheet">
			
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
		<script src="<?php echo base_url();?>assets/script/sha256.js" type="text/javascript"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/script/validation.js"></script>
	</head>
	<body onload="burstCache();">
		<form name="aspnetForm" action="<?php echo base_url(). 'index.php/reset/password?hash='.$hash;?>"method="post"  id="aspnetForm" autocomplete="off">
	

		
	


	

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
									<a href="<?= base_url();?>" id="ctl00_aHome" class="nav-link"><i class="fa fa-home">&nbsp;</i>Home</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		

		<div class="container loginmid">
			<div class="row">
				<div id="ctl00_ContentPlaceHolder1_tdApplyfor" class="col-sm-5 login-instruction">
					
					<div id="ctl00_ContentPlaceHolder1_pnlRegInst" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_ContentPlaceHolder1_btnApplyForm')">
		
						<div id="ctl00_ContentPlaceHolder1_ApplyInst">
							<div id="ctl00_ContentPlaceHolder1_divSteps" class="listStep3">
								<h4 style="border-bottom: 1px solid #fff; text-align: center; font-family: 'Open Sans' !important; margin-top: 0px; color: #fff; padding: 6px 4px 10px 4px;">Steps to apply online
								</h4>
								
								<ul id="ctl00_ContentPlaceHolder1_ulStep4" class="list-unstyled inst" style="list-style-image: url(../Images/tick.png); padding: 10px 20px 2px 20px;">
									<li>Apply for Online Registration </li>
									<li>Fill Online Application Form</li>
									<li>Pay Examination Fee</li>
								</ul>
								
								<hr style="border-top: 1px solid #b5b5b5;">
							</div>
							<br>
							<div id="ctl00_ContentPlaceHolder1_divnewreg" class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-4" style="color: #fff;">
										Application Form
									</label>
									<div class="col-sm-8">
										<select name="ctl00$ContentPlaceHolder1$rdbAppFormId" id="ctl00_ContentPlaceHolder1_rdbAppFormId" disabled="disabled" class="chosen-select" style="display: none;">
			<option value="0">--Select--</option>
			<option selected="selected" value="101032311">JEE(Main) 2023 - Session 1</option>

		</select><div class="chosen-container chosen-container-single chosen-disabled" style="width: 192px;" title="" id="ctl00_ContentPlaceHolder1_rdbAppFormId_chosen"><a class="chosen-single" tabindex="-1"><span>JEE(Main) 2023 - Session 1</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" disabled=""></div><ul class="chosen-results"></ul></div></div>
										<span id="ctl00_ContentPlaceHolder1_rfv" style="color:Red;display:none;">Select Valid Form</span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-2 text-center">
									<a href="<?php echo base_url('index.php/auth/pre_register');?>">
									<button type="button" href="<?php echo base_url('index.php/auth/pre_register');?>" class="btn btn-info">New registration</button>
									</a>
																		<!-- <input type="submit" onclick="<?php //echo base_url('index.php/auth/pre_register');?>"  value="New Registration"  class="btn-classic btn-block"> -->
									</div>
								</div>

								
							</div>
						</div>
					
	</div>
					
				</div>

				<div class="col-sm-7">
					<div id="ctl00_ContentPlaceHolder1_Panel1" onkeypress="javascript:return WebForm_FireDefaultButton(event, 'ctl00_ContentPlaceHolder1_btnsignin')">
		
						<div class="form-horizontal formLabel">
							<h4 style="text-align: center; font-family: 'Open Sans' !important; background: url(../Images/headingbg.png) no-repeat center center; margin-top: -10px; margin-bottom: 10px; color: #fff; padding: 6px 4px 10px 4px;">
								<span id="ctl00_ContentPlaceHolder1_lblSignInHeader">Only Registered Candidates Sign In</span>
							</h4>
							<div class="loginborder">
								<div class="form-group">
									<label class="control-label col-sm-4">
										Application Form
									</label>
									<div class="col-sm-8">
										<select name="ctl00$ContentPlaceHolder1$ddlAppForm" id="ctl00_ContentPlaceHolder1_ddlAppForm" disabled="disabled" class="chosen-select" style="display: none;">
			<option value="0">--Select--</option>
			<option selected="selected" value="101032311">JEE(Main) 2023 - Session 1</option>

		</select><div class="chosen-container chosen-container-single chosen-disabled" style="width: 192px;" title="" id="ctl00_ContentPlaceHolder1_ddlAppForm_chosen">
		<a class="chosen-single" tabindex="-1">
			
		<span>JEE(Main) 2023 - Session 1</span>
		<div><b></b></div></a><div class="chosen-drop">
			<div class="chosen-search"><input type="text" autocomplete="off" disabled=""></div>
			<ul class="chosen-results"></ul></div></div>
										<span id="ctl00_ContentPlaceHolder1_CV_FormId" style="color:Red;display:none;">Select Valid Form</span>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">
										Current Password
									</label>
									<div class="col-sm-8">
										<input name="current_password" type="text"  maxlength="100" id="current_password" class="form-control" >
										<?php //echo (form_error('email') != "") ? 'is-invalid' : ''; ?>
										<!-- <span class="invalid-feedback" ><?php //echo strip_tags(form_error('email'))?>Enter Valid Application No</span> -->
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">
										Set New Password
									</label>
									<div class="col-sm-8">
										<input name="new_password" type="text"  maxlength="100" id="new_password" class="form-control" >
										</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">
										Confirm New Password
									</label>
									<div class="col-sm-8">
										<input name="confirm_new_password" type="text"  maxlength="100" id="confirm_new_password" class="form-control" >
										<?php //echo (form_error('email') != "") ? 'is-invalid' : ''; ?>
										<!-- <span class="invalid-feedback" ><?php //echo strip_tags(form_error('email'))?>Enter Valid Application No</span> -->
									</div>
								</div>
								
								

						
								
								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-4">
										<input type="submit" name="send_link" value="Send Reset Link" id="send_link" class="btn-classic">
									</div>
								</div>
								<hr style="border-top: 1px solid #df6900;">
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<a  id="forgot_password" href="<?php echo base_url('index.php/auth/forgot_password')?>" style="color:Black;font-weight:bold;">Forgot Password ?</a>
									</div>
									
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<span id="ctl00_ContentPlaceHolder1_lblerror1" class="text-danger"></span>
										<input type="hidden" name="ctl00$ContentPlaceHolder1$hdnpwd" id="ctl00_ContentPlaceHolder1_hdnpwd">
									</div>
								</div>
							</div>
						</div>
					
	</div>
				</div>

			</div>
		</div>

		

			<section class="footersec">
				<div class="container">
					<div class="row">
						<div class="col-sm-8">
							<p class="text-left">
								<b>Disclaimer:</b><br>
								<span id="ctl00_lblDisclaimer">This site is designed, developed and hosted by Navneet Verma.</span>
								<span id="ctl00_lblVersion"> (Ver 1.0.70.2.0)</span>
							</p>
						</div>

						
					</div>
				</div>
			</section>
		


	
	</form>




	</body>
</html>

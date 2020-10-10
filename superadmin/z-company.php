<?php
	session_start();
	ob_start();
	include_once '../connection/dbconnect.php'; //Nat's code
	include_once('../model/logoutpro.php');
	include_once('../model/users_module.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Create New Company</title>
	</head>
	
	<body>
		<div id="allSection" class="allSection">
			
			<?php include_once('../navbar/top.php');
				include_once('../navbar/mBar.php');
			?>
			
			<div id="allContent" class="allContent" style="margin:auto;padding:40px 80px">
				<h4 style="color:#fff;">Company<h4>
					<h1 class='dashboard'>Create New Company</h1>
					<h1 class='dashboard'></h1>
					<div id="view-content" class="tabcontent">
						<form method="POST"  style="width: 850px">
							<div class="flex-container">
								<div class="form-register">
									<fieldset id="BnameLbl" class="lbl">
										<legend id="BnameLgd">Name of Business</legend>
										<input id="BnameInput" value="" onfocus="" autocomplete="" type="text" name="Bname" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
								<div class="form-register">
									<fieldset id="CnameLbl" class="lbl">
										<legend id="CnameLgd">Company Name</legend>
										<input id="CnameInput" value="" onfocus="" autocomplete="" type="text" name="Cname" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
							</div>
							
							<div class="flex-container">
								<div class="form-register">
									<fieldset id="CnumberLbl" class="lbl">
										<legend id="CnumberLgd">Company No</legend>
										<input id="CnumberInput" value="" onfocus="" autocomplete="" type="text" name="Cnumber" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
								<div class="form-register">
									<fieldset id="PnameLbl" class="lbl">
										<legend id="PnameLgd">Principle Name</legend>
										<input id="PnameInput" value="" onfocus="" autocomplete="" type="text" name="Pname" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
							</div>
							
							<div class="flex-container">
								<div class="form-register">
									<fieldset id="RnumberLbl" class="lbl">
										<legend id="RnumberLgd">Registered Person No</legend>
										<input id="RnumberInput" value="" onfocus="" autocomplete="" type="text" name="Rnumber" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
								<div class="form-register">
									<fieldset id="addLbl" class="lbl">
										<legend id="addLgd">Address</legend>
										<input id="addInput" value="" onfocus="" autocomplete="" type="text" name="address" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
							</div>
							
							<div class="flex-container">
								<div class="form-register">
									<fieldset id="phoneLbl" class="lbl">
										<legend id="phoneLgd">Phone</legend>
										<input id="phoneInput" value="" onfocus="" autocomplete="" type="text" name="phone" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
								<div class="form-register">
									<fieldset id="faxLbl" class="lbl">
										<legend id="faxLgd">Fax</legend>
										<input id="faxInput" value="" onfocus="" autocomplete="" type="text" name="fax" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
							</div>
							
							<div class="flex-container">	
								<div class="form-register">
									<fieldset id="emailLbl" class="lbl">
										<legend id="emailLgd">Email</legend>
										<input id="emailInput" value="" onfocus="" autocomplete="" type="email" name="email"  class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
							</div>
							
							<div class="flex-container">	
								<div class="form-register">
									<fieldset id="bankerLbl" class="lbl">
										<legend id="bankerLgd">Banker</legend>
										<input id="bankerInput" value="" onfocus="" autocomplete="" type="text" name="banker" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
								
								<div class="form-register">
									<fieldset id="BnumberLbl" class="lbl">
										<legend id="BnumberLgd">Bank A/C No</legend>
										<input id="BnumberInput" value="" onfocus="" autocomplete="" type="text" name="Bnumber" class="allInput" style="width:400px" required>
									</fieldset>
								</div>
							</div>
							<br />
							<div class="" style="display:block; float:right">
								<button type="submit" class="allButton" name="update">Submit</button>
								<button type="button" class="allButton" onclick="" style="color:white; border-color:white">Cancel</button>
							</div>
						</form>
					</div>
				</div>
				</div>
			</body>
			<?php// include_once("../script/scripts.js")?>
		</html>
		<?php 
			
		?>		
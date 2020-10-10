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
		<title>Create New Contacts</title>
	</head>
	
	<body>
		<div id="allSection" class="allSection">
			
			<?php include_once('../navbar/top.php');
				include_once('../navbar/mBar.php');
			?>
			
			<div id="allContent" class="allContent" style="margin:auto;padding:40px 80px">
				<h4 style="color:#fff;">Contacts<h4>
					<h1 class='dashboard'>Create New Contacts</h1>
					<h1 class='dashboard'></h1>
					<div id="view-content" class="tabcontent">
							<form method="POST"  style="width: 850px">
										<div class="flex-container">
											<div class="form-register">
												<fieldset id="nameLbl" class="lbl">
													<legend id="nameLgd">Name</legend>
													<input id="nameInput" value="" onfocus="" autocomplete="" type="text" name="name" class="allInput" style="width:400px" required>
												</fieldset>
											</div>
											
											<div class="form-register">
												<fieldset id="nricLbl" class="lbl">
													<legend id="nricLgd">NRIC</legend>
													<input id="nricInput" value="" onfocus="" autocomplete="" type="text" name="nric" class="allInput" style="width:400px" required>
												</fieldset>
											</div>
										</div>
						
										<div class="flex-container">	
											<div class="form-register">
												<fieldset id="raceLbl" class="lbl">
													<legend id="raceLgd">Race</legend>
													<input id="raceInput" value="" onfocus="" autocomplete="" type="text" name="race"  class="allInput" style="width:400px">
												</fieldset>
											</div>
											
											<div class="form-register">
												<fieldset id="phoneLbl" class="lbl">
													<legend id="phoneLgd">Phone</legend>
													<input id="phoneInput" value="" onfocus="" autocomplete="" type="number" name="phone" class="allInput" style="width:400px">
												</fieldset>
											</div>
										</div>
						
										<div class="flex-container">	
											<div class="form-register">
												<fieldset id="addLbl" class="lbl">
													<legend id="addLgd">Address</legend>
													<input id="addInput" value="" onfocus="" autocomplete="" type="text" name="address" class="allInput" style="width:400px">
												</fieldset>
											</div>
											
											<div class="form-register">
												<fieldset id="remarkLbl" class="lbl">
													<legend id="remarkLgd">Remark</legend>
													<input id="remarkInput" value="" onfocus="" autocomplete="" type="text" name="remark" class="allInput" style="width:400px"s>
												</fieldset>
											</div>
										</div>
							
										<br />
										<div class="" style="display:block; float:right">
											<button type="submit" class="allButton" name="update">Submit</button>
											<button type="button" class="allButton" onclick="" style="color:white; border-color:white">Cancel</button>
										</div>
						</table>
					</div>
				</div>
				</div>
			</body>
			<?php// include_once("../script/scripts.js")?>
		</html>
		<?php 
			
		?>				
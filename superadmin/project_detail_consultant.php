<?php
	session_start();
	ob_start();
	
	if (isset($_SESSION["user_id"]) && isset($_SESSION["role"])) {
		$userId = $_SESSION["user_id"];
		$role = $_SESSION["role"];
	}
	
	if ($role == "superadmin" || $role == "staff" || $role == "manager") {
		include_once '../connection/dbconnect.php'; //Nat's code
		include_once('../model/logoutpro.php');
		include_once('../model/users_module.php');
		include_once('../email/email.php');
		
		/* if (isset($_POST['create'])) {
			date_default_timezone_set("Asia/Kuala_Lumpur");
			
			$email = strip_tags($_POST['email']);
			$name = strip_tags($_POST['name']);
			$ic = strip_tags($_POST['ic']);
			
			$phone = strip_tags($_POST['phone']);
			$address = strip_tags($_POST['address']);
			
			$EMCemail = strip_tags($_POST['EMCemail']);
			$EMCname = strip_tags($_POST['EMCname']);
			
			$EMCphone = strip_tags($_POST['EMCphone']);
			$EMCaddress = strip_tags($_POST['EMCaddress']);
			
			$role = "owner";
			$datetime = date('d-m-Y H:i:s');
			
			$status = "inactive";
			$accessR = 1;
			$actLog = "Add";
			$classLog = "Owner";
			$idType = "user_id";
			
			$email = mysqli_real_escape_string($dbconnection, $email);
			$name = mysqli_real_escape_string($dbconnection, $name);
			
			$ic = mysqli_real_escape_string($dbconnection, $ic);
			$phone = mysqli_real_escape_string($dbconnection, $phone);
			$address = mysqli_real_escape_string($dbconnection, $address);
			
			$EMCemail = mysqli_real_escape_string($dbconnection, $EMCemail);
			$EMCname = mysqli_real_escape_string($dbconnection, $EMCname);
			
			$EMCphone = mysqli_real_escape_string($dbconnection, $EMCphone);
			$EMCaddress = mysqli_real_escape_string($dbconnection, $EMCaddress);
			
			$password = strtoupper(md5('123456'));
			
			$length = 6;
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for($i=0; $i < $length; $i++){
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			
			$ver_code = $randomString;
			
			$checkAvailEmail = get_userID($email);
			$rowcount = mysqli_num_rows($checkAvailEmail);
			
			if ($rowcount == 0) {
			$checkAvailIC = checkAvailIC($ic);
			$rowcount1 = mysqli_num_rows($checkAvailIC);
			
			if ($rowcount1 == 0) {
			if ($phone != $EMCphone) {
			if (isset($_POST['selectDev']) == '' && isset($_POST['selectBlk']) == '' && isset($_POST['selectUnit']) == '') {
			register_user($email, $password, $accessR, $role, $status);
			
			$getUserID = get_userID($email);
			while ($row = mysqli_fetch_array($getUserID)) {
			$user_id = $row['user_id'];
			}
			
			register_user_verification($user_id, $ver_code);
			
			$msg = '<html> <head> <style>span, p{color: #555555;}</style> </head> <img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png"> <br/> <br/> <span style="font-size: 22px;">Welcome!</span> <br/> <br/> <span>Your E-mail has been registered into the system as an Owner. The following are details that you need to access the system:</span> <br/> <br/> <div style="display: flex;"> <p style="min-width: 100px;"><strong>URL</strong></p><p>https://karunasystems.a2hosted.com/pjx/main/login.php</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>E-Mail</strong></p><p>'.$email.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Password</strong></p><p>123456</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Verification Code</strong></p><p>'.$ver_code.'</p></div> <br/> <span>Please enter your one-time verification code and change your password when logging in to activate your account. Thank you!</span></html>';
			
			$subject = "New Owner";
			
			html_email($email, $subject, $msg);
			
			register_emc($user_id, $EMCname, $EMCemail, $EMCaddress, $EMCphone);
			register_userPersonalD($user_id, $name, $ic, $phone, $address, $emergencyC, $datetime);
			update_log_add($user_id, $idType, $name, $classLog, $actLog, $datetime);
			
			header('location: owners.php');
			} else if (isset($_POST['selectDev']) && isset($_POST['selectBlk']) && isset($_POST['selectUnit'])) {
			
			register_user($email, $password, $accessR, $role, $status);
			
			$getUserID = get_userID($email);
			while ($row = mysqli_fetch_array($getUserID)) {
			$user_id = $row['user_id'];
			}
			
			register_user_verification($user_id, $ver_code);
			
			$msg = '<html> <head> <style>span, p{color: #555555;}</style> </head> <img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png"> <br/> <br/> <span style="font-size: 22px;">Welcome!</span> <br/> <br/> <span>Your E-mail has been registered into the system as an Owner. The following are details that you need to access the system:</span> <br/> <br/> <div style="display: flex;"> <p style="min-width: 100px;"><strong>URL</strong></p><p>https://karunasystems.a2hosted.com/pjx/main/login.php</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>E-Mail</strong></p><p>'.$email.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Password</strong></p><p>123456</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Verification Code</strong></p><p>'.$ver_code.'</p></div> <br/> <span>Please enter your one-time verification code and change your password when logging in to activate your account. Thank you!</span></html>';
			
			$subject = "New Owner";
			
			html_email($email, $subject, $msg);
			
			register_emc($user_id, $EMCname, $EMCemail, $EMCaddress, $EMCphone);
			register_userPersonalD($user_id, $name, $ic, $phone, $address, $emergencyC, $datetime);
			update_log_add($user_id, $idType, $name, $classLog, $actLog, $datetime);
			if (isset($_POST['selectUnit'])) {
			$unitid = $_POST['selectUnit'];
			updateUnitUsers($user_id, $unitid, $role);
			}
			
			header('location: owners.php');
			} else if (isset($_POST['selectDev']) != '' && isset($_POST['selectBlk']) == '') {
			?>
			<script type="text/javascript">
			alert("Please select a Block");
			</script>
			<?php
			} else if (isset($_POST['selectDev']) != '' && isset($_POST['selectBlk']) != '' && isset($_POST['selectUnit']) == '') {
			?>
			<script type="text/javascript">
			alert("Please select a Unit");
			</script>
			<?php
			}
			} else {
			?>
			<script type="text/javascript">
			alert("Personal Contact and Emergency Contact must not be the same");
			</script>
			<?php
			}
			} else {
			?>
			<script type="text/javascript">
			alert("This IC already exists");
			</script>
			<?php
			}
			} else {
			?>
			<script type="text/javascript">
			alert("This email already exists");
			</script>
			<?php
			}
		} */
	?>
	
	<!DOCTYPE html>
	<html lang="en">
		<style>
		</style>
		<head>
			<?php include_once('../head/head.php'); ?>
			<title>Land</title>
		</head>
		
		<body onload="populateDevDropdown()">
			<div id="allSection" class="allSection">
				
				<?php include_once('../navbar/top.php');
					include_once('../navbar/mBar.php');
				?>
				
				<div id="allContent" class="allContent" style="padding:50px 70px 100px 70px;">
					<div  class="row">
						<h1 class='dashboard'>
							<p class="history"></p>Project Details
						</h1>
						<div id="project" class="tabcontent">
							<div class="w3-bar w3-black">
								<button class="allButton tablink " onclick="location.href='../superadmin/project_detail_overall.php';">Overall</button>
								<button class="allButton tablink tabs_blue" onclick="location.href='../superadmin/project_detail_consultant.php';">Consultant</button>
								<button class="allButton tablink" onclick="location.href='../superadmin/project_detail_log.php';">Log</button>
								<button class="allButton tablink" onclick="location.href='../superadmin/project_detail_library.php';">Library</button>
							</div>
							
							<div id="Consultant" class="tabs">
								<table id="" class="dataTable" style="">
									<thead >
										<tr class="header">
											<td width="">File Name</td>
											<td width="">Display Name</td>
											<td width="">Type</td>
											<td width="">Approve Date</td>
											<td width="">Expiry Date</td>
											<td width="">Reminder Period</td>
											<td width="">Reminder Date</td>
											<td width="">Action</td>
										</tr>
									</thead>
									<tbody id="">
										<tr>	
											<td width="">File Name</td>
											<td width="">Display Name</td>
											<td width="">Type</td>
											<td width="">Approve Date</td>
											<td width="">Expiry Date</td>
											<td width="">Reminder Period</td>
											<td width="">Reminder Date</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
										<tr>	
											<td width="">File Name</td>
											<td width="">Display Name</td>
											<td width="">Type</td>
											<td width="">Approve Date</td>
											<td width="">Expiry Date</td>
											<td width="">Reminder Period</td>
											<td width="">Reminder Date</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div id="Log" class="tabs" style="display:none">
							<div class="btn-right"><button onclick="" class="allButton">Create New Log</button></div>
								<table id="" class="dataTable" style="">
									<thead >
										<tr class="header">
											<td width="">Nature</td> 
											<td width="">Date</td>
											<td width="">Level 1</td>
											<td width="">Level 2</td>
											<td width="">Level 3</td>
											<td width="">Action</td>
										</tr>
									</thead>
									<tbody id="">
										<tr>	
											<td width="">Nature</td> 
											<td width="">Date</td>
											<td width="">Level 1</td>
											<td width="">Level 2</td>
											<td width="">Level 3</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
										<tr>	
											<td width="">Nature</td> 
											<td width="">Date</td>
											<td width="">Level 1</td>
											<td width="">Level 2</td>
											<td width="">Level 3</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div id="Library" class="tabs" style="display:none">
								<table id="" class="dataTable" style="">
									<thead >
										<tr class="header">
											<td width="">Display Name</td> 
											<td width="">Upload</td>
											<td width="">Type</td>
											<td width="">Action</td>
										</tr>
									</thead>
									<tbody id="">
										<tr>	
											<td width="">Display Name</td> 
											<td width="">Upload</td>
											<td width="">Type</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
										<tr>	
											<td width="">Display Name</td> 
											<td width="">Upload</td>
											<td width="">Type</td>
											<td><a href="" onclick=""><img src="../images/msg.png" class="smicon"></a><a href="" onclick=""><img src="../images/edit.png" class="smicon"></a><a href="" onclick=""><img src="../images/trash.png" class="smicon"></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<script>
								function goTabs(evt ,on_tabs) {
									var i, x, tablinks;
									var x = document.getElementsByClassName("tabs");
									for (i = 0; i < x.length; i++) {
										x[i].style.display = "none";  
									}
									tablinks = document.getElementsByClassName("tablink");
									for (i = 0; i < x.length; i++) {
										tablinks[i].className = tablinks[i].className.replace(" tabs_blue", "");
									}
									document.getElementById(on_tabs).style.display = "block";  
									evt.currentTarget.className += " tabs_blue";
									
								}	
							</script>
						</div>
					</div>
				</div>
			</div>
		</body>
		<?php include_once("../script/scripts.js") ?>
		
	</html>
	<?php
		} else {
		header("location: ../index.php");
	}
?>											
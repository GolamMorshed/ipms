<?php
session_start();
ob_start();

include_once '../connection/dbconnect.php';
include_once('../model/loginpro.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Login</title>
	</head>

	<body>
		<div class="allSection">

			<div class="login">

				<div class="lgall">

					<div class="lgleft">

						<div class="padding">

							<div class="display-head">
								<p class="display-head-all"><span id="hi" class="hi">HI!</span><br><span id="signin" class="signin">Sign in to start!</span></p>
							</div>

							<div class="lginput-all">

								<form method="POST">

									<div class="lginput-left">
										<img id="user" src="../images/user_gray.png">
									</div>

									<div class="lginput-right">
										<div class="form-group">
                                            <fieldset id="emailLbl" class="lbl">
                                                <legend id="emailLgd">Email</legend>
										 	    <input id="emailInput" class="lginput" type="email" name="email" onfocus="onTypingEmail()" required autocomplete="new-password">
                                            </fieldset>
										</div>
									</div><br/>

									<div class="lginput-left">
										<img id="lock" src="../images/lock_gray.png">
									</div>

									<div class="lginput-right">
										<div class="form-group">
                                            <fieldset id="pwordLbl" class="lbl">
                                                <legend id="pwordLgd">Password</legend>
				                                <input id="pwordInput" class="lginput" type="password" name="password" onfocus="onTypingPwd()" required autocomplete="new-password">
                                            </fieldset>
										</div>
									</div>

									<div class="lginput-sub">
										<input class="lgsub" type="submit" name="login" value="Login &#10147;">
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="lgright"></div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
include_once("../script/scripts.js");
?>

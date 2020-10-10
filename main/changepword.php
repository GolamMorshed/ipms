<?php
session_start();
ob_start();

if(isset($_SESSION["user_id"]) && isset($_SESSION["role"])) 
{
	$userId = $_SESSION["user_id"];
	$role = $_SESSION["role"];
}

if($role != "" && $userId != "") 
{
	include_once '../connection/dbconnect.php'; //Nat's code
	include_once('../model/logoutpro.php');
	include_once('../model/users_module.php');

	if(isset($_POST['chg_pword'])) 
	{
		$pword =  $_POST['oldpword'];
		$newpword = $_POST['newpword'];
		$retype = $_POST['retype'];
		$oldpword = strtoupper(md5($pword));
		
        $user = get_user_info($userId);
        $uRow = mysqli_fetch_array($user);
        if($oldpword == $uRow['password']){
            if($newpword == $retype){
		        $newpwordenc = strtoupper(md5($newpword));
                change_pword($userId, $newpwordenc, 'active');
                header('location: profile.php');
            } else {
                ?>
                <script type="text/javascript">
                    alert("Your new password inputs do not match.");
                </script>
                <?php
            }
        } else {
            ?>
            <script type="text/javascript">
                alert("Your current password input is incorrect.");
            </script>
            <?php
        }
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Change Password</title>
	</head>

	<body>
		<div id="allSection" class="allSection">

			<?php include_once('../navbar/top.php');

				if($role == "superadmin") 
				{
					include_once('../navbar/mBar.php'); 
				}
				else if($role == "owner") 
				{
					include_once('../navbar/oBar.php');
				}
				else if($role == "tenant") 
				{
					include_once('../navbar/tBar.php');
				}
			?>

			<div id="allContent" class="allContent">
				<h1 class='dashboard'>Change Password</h1>			

				<div class="t-columns">
					<div class="long-table">
						<form method="POST">
							
						<?php if (isset($_GET['status'])){ ?>
							<p class="alert_text">Please change your password.</p>
						<?php } ?>

							<table class="pdetails" CELLSPACING=0 BORDER=0>
								<?php $result = select_user($userId);
									while($row = mysqli_fetch_array($result))
										{?>
									<tr class="pword_row">
										<td class="chg_pword_btn">
											<p id="nameLbl" class="pleft">Current Password :</p>
										</td>
										<td class="chg_pword_btn">
                						<div class="flex-container">
                						    <div class="form-register">
    										    <fieldset class="lbl">
    											    <input id="nameInput" type="password" class="allInput" name="oldpword" required/>
    											</fieldset>
											</div>
										</div>
										</td>
									</tr>

									<tr class="pword_row">
										<td class="chg_pword_btn">
											<p id="icLbl" class="pleft">New Password :</p>
										</td>
										<td class="chg_pword_btn">
                						<div class="flex-container">
                						    <div class="form-register">
    										    <fieldset class="lbl">
											        <input id="icInput" type="password" class="allInput" name="newpword" required/>
    											</fieldset>
											</div>
										</div>
										</td>
									</tr>

									<tr class="pword_row">
										<td class="chg_pword_btn">
											<p id="phoneLbl" class="pleft">Re-type New Password :</p>
										</td>
										<td class="chg_pword_btn">
                						<div class="flex-container">
                						    <div class="form-register">
    										    <fieldset class="lbl">
											        <input id="icInput" type="password" class="allInput" name="retype" required/>
    											</fieldset>
											</div>
										</div>
										</td>
									</tr>

									<tr class="pword_row">
										<td class="chg_pword_btn">
											<a href="profile.php" class="allButton">Cancel</a>
										</td>
										<td class="chg_pword_btn">
											<input type="submit" class="allButton" name="chg_pword" value="Submit" />
										</td>
									</tr>

								<?php }?>
							</table>
						</form>
					</div>
				</div>	
			</div>
		</div>
	</body>
	<?php include_once("../script/scripts.js")?>
</html>
<?php 
}
else 
{
	header("location: ../index.php");
}
?>
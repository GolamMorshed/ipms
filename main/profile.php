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

	if(isset($_POST['edit'])) 
	{
		$name =  strip_tags($_POST['name']);
		$ic = strip_tags($_POST['ic']);
		$phone = strip_tags($_POST['phone']);
		$address = strip_tags($_POST['address']);
		$emergencyC = strip_tags($_POST['emergencyC']);

		$name = mysqli_real_escape_string($dbconnection, $name);
		$ic = mysqli_real_escape_string($dbconnection, $ic);
		$phone = mysqli_real_escape_string($dbconnection, $phone);
		$address = mysqli_real_escape_string($dbconnection, $address);
		$emergencyC = mysqli_real_escape_string($dbconnection, $emergencyC);

		update_user($userId, $name, $ic, $phone, $address, $emergencyC);

		echo "<meta http-equiv='refresh' content='0'>";
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Profile</title>
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
				<h1 class='dashboard'>Profile</h1>			

				<div class="t-columns">
					<div class="long-table">
						<form method="POST">
							<table class="pdetails" CELLSPACING=0 BORDER=0>
								<?php $result = select_user($userId);
									while($row = mysqli_fetch_array($result))
										{?>
									<tr>
										<td>
											<p class="pleft">User Id :</p>
										</td> 
										<td>
											<input type="text" class="allInput" name="userId" value="<?php echo $row['user_id'];?>" readonly/>
										</td>
									</tr>

									<tr>
										<td>
											<p id="nameLbl" class="pleft">Name :</p>
										</td>
										<td>
											<input id="nameInput" onfocus="onTypingP('name')" type="text" class="allInput" name="name" value="<?php echo $row['name'];?>" required/>
										</td>
									</tr>

									<tr>
										<td>
											<p id="icLbl" class="pleft">IC :</p>
										</td>
										<td>
											<input id="icInput" onfocus="onTypingP('ic')" type="text" class="allInput" name="ic" value="<?php echo $row['ic'];?>" required/>
										</td>
									</tr>

									<tr>
										<td>
											<p id="phoneLbl" class="pleft">Phone :</p>
										</td>
										<td>
											<input id="phoneInput" onfocus="onTypingP('phone')" type="text" class="allInput" name="phone" value="<?php echo $row['phone'];?>" required/>
										</td>
									</tr>

									<tr>
										<td>
											<p id="addLbl" class="pleft">Address :</p>
										</td>
										<td>
											<input id="addInput" onfocus="onTypingP('add')" type="text" class="allInput" name="address" value="<?php echo $row['address'];?>" required/>
										</td>
									</tr>

									<tr>
										<td>
											<p id="emcLbl" class="pleft">Emergency Contact :</p>
										</td>
										<td>
											<input id="emcInput" onfocus="onTypingP('emc')" type="text" class="allInput" name="emergencyC" value="<?php echo $row['emergency_contact'];?>" required/>
										</td>
									</tr>

									<tr>
										<td>
											<p class="pleft">Date Created :</p>
										</td>
										<td>
											<input type="text" class="allInput" name="dateC" readonly value="<?php echo $row['date_created'];?>"/>
										</td>
									</tr>

									<tr>
										<td>
											<input type="submit" class="allButton" name="edit" value="Edit" />
										</td>
										<td>
											<a href="changepword.php" class="allButton">Change Password</a>
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
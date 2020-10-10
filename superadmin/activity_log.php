<?php
session_start();
ob_start();

if(isset($_SESSION["user_id"]) && isset($_SESSION["role"])) 
{
	$userId = $_SESSION["user_id"];
	$role = $_SESSION["role"];
}

if($role == "superadmin" || $role == "staff" || $role == "manager") 
{
	include_once '../connection/dbconnect.php'; //Nat's code
	include_once('../model/logoutpro.php');
	include_once('../model/users_module.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Activity Log</title>
	</head>

	<body>
		<div id="allSection" class="allSection">

			<?php include_once('../navbar/top.php');
			include_once('../navbar/mBar.php');
			?>

			<div id="allContent" class="allContent">
				<h1 class='dashboard'>Settings > Activity Log</h1>
				<div class="t-columns">
					<div class='title-table'>
						
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
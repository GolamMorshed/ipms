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
		<title>Managers</title>
	</head>

	<body>
		<div id="allSection" class="allSection">

			<?php include_once('../navbar/top.php');
			include_once('../navbar/mBar.php');
			?>

			<div id="allContent" class="allContent">
			<div class="searchBox">
				<h1 class='dashboard'>Users</h1>
				<input type="text" id="search" class="searchInput" placeholder="Search..." title="Type in a name">
			</div>

			<?php if($perm['registration'] == "rw" || $perm['registration'] == "w") { ?>

			<div class="buttons-row">
				<form class="move" action="reg_manager.php">
					<input autocomplete="new-password" type="submit" class="allButton" value="Add User" required>
				</form>
			</div>

			<?php } ?>
				<div id="managers" class="tabcontent">

					<table id="dataTable" class="dataTable">
						<thead>
			            <tr class="header">
			                <th><a href='#' onclick="sortTable('dataTable', 0, 'T')" class="arrow">Name 			<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th><a href='#' onclick="sortTable('dataTable', 1, 'T')" class="arrow">Email 			<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th><a href='#' onclick="sortTable('dataTable', 2, 'N')" class="arrow">IC/Passport 		<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th><a href='#' onclick="sortTable('dataTable', 3, 'N')" class="arrow">Phone 			<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th><a href='#' onclick="sortTable('dataTable', 4, 'T')" class="arrow">Address 			<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th><a href='#' onclick="sortTable('dataTable', 5, 'N')" class="arrow">Emergency Contact <div class="sortTriangle">&#x25BC;&#x25B2;</div></a></th>
			                <th class="last-col"></th>
			            </tr>
						</thead>

			            <tbody id="tbody">
			            <?php 
			            $displayAll_manager = displayAll_manager();
						
						while($row = mysqli_fetch_array($displayAll_manager))
						{
							$getEMC = display_emc($row['user_id']);
							while($emc = mysqli_fetch_array($getEMC))
							{
								$confirmation = "Hello are you sure you want to delete  ".ucfirst($row['role'])."&nbsp; > &nbsp;".$row['name']."&nbsp; > User Id : &nbsp;".$row['user_id']."?";
								
								echo "
								<tr>
									<td>".$row['name']."</td>
									<td>".$row['email']."</td>
									<td>".$row['ic']."</td>
									<td>".$row['phone']."</td>
									<td>".$row['address']."</td>
									<td>".$emc['phone']."</td>
									<td class='last-col'><div class='iconBox'><a href='view.php?uid=".$row['user_id']."&role=".$row['role']."&name=".$row['name']."'><img src='../images/msg.png' class='smicon'></img></a>";
									
								?>
								<?php if($perm['registration'] == "rw" || $perm['registration'] == "w") { ?>
									<a href='edit.php?uid=<?php echo $row['user_id']."&role=".$row['role']."&name=".$row['name']; ?>'><img src='../images/edit.png' class='smicon'></img></a>
									<a href='delete.php?uid=<?php echo $row['user_id'];?>&class=Manager' onclick='return confirm("<?php echo $confirmation;?>")';><img src='../images/trash.png' class='smicon'/></a></div></td>
								<?php } ?>
								<?php
								echo "</tr>";
							}
			        	}
			            ?>
			            </tbody>
					</table>
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
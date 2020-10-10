<?php
	session_start();
	ob_start();
	
	//if(isset($_SESSION["user_id"]) && isset($_SESSION["role"])) 
	//{
	//	$userId = $_SESSION["user_id"];
	//	$role = $_SESSION["role"];
	//}
	
	// if($role == "superadmin" || $role == "staff" || $role == "manager") 
	// {
	include_once '../connection/dbconnect.php'; //Nat's code
	include_once('../model/logoutpro.php');
	include_once('../model/users_module.php');
	include_once('../email/email.php');
    unset($_SESSION["name"]);
    unset($_SESSION["address"]);
	unset($_SESSION["nob"]);
	
	// if(isset($_POST['sendmail']))
	// {
	// 	// $content = '<img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png">';
	// 	$email = "bertlai98@absyer.site";
	// 	// $subject = "TEST MAIL PJX";
	
	// 	$type = "test";
	// 	$title = "test title";
	// 	$description = "test desc";
	// 	$expiry = "2020-06-30";
	
	// 	include_once "../email/msg.php";
	
	// 	html_email($email, $subject, $msg);
	// }
	
	// $today = date("Y-m-d");
	// $get_allservice = get_allContract();
	// while($row = mysqli_fetch_assoc($get_allservice))
	// {
	//     $getdue = get_due_set('Service Contract');
	//     $due = mysqli_fetch_assoc($getdue);
	
	//     $datetoday = new DateTime($today);
	//     $datedue = new DateTime($row['end_date']);
	//     $datethres = new DateTime($row['end_date']);
	//     $datethres = $datethres->modify('-'. $due['days'] .'day');
	
	//     $getdue = get_due($row['service_id'], "Service Contract");
	
	//     if(!mysqli_num_rows($getdue))
	//     {
	//         if($datetoday >= $datethres)
	//         {
	//             add_due($row['service_id'], $row['name'], $row['description'], $row['end_date'], 'Service Contract');
	
	//             $alluser = get_allUser();
	
	//             $mailarray = array();
	
	//             while($user = mysqli_fetch_assoc($alluser))
	//             {
	//                 if($user['role'] != "owner" && $user['role'] != "tenant" && $user['role'] != "contractor")
	//                 {
	//                     array_push($mailarray, $user['email']);
	//                 }
	//             }
	
	//             $type = "Service Contract";
	//             $title = $row['name'];
	//             $description = $row['description'];
	//             $expiry = $row['end_date'];
	
	// 			$msg = '<html> <head> <style>span, p{color: #555555;}</style> </head> <img height="200" width="300" src="https://res.cloudinary.com/domfsneqv/image/upload/v1593002664/pjx_hxfy5f.png"> <br/> <br/> <span style="font-size: 22px;">Soon to Due ('.$type.')</span> <br/> <br/> <span>An item in your '.$type.' section is expiring soon:</span> <br/> <br/> <div style="display: flex;"> <p style="min-width: 100px;"><strong>Title</strong></p><p>'.$title.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Description</strong></p><p>'.$description.'</p></div><div style="display: flex;"> <p style="min-width: 100px;"><strong>Expiry Date</strong></p><p>'.$expiry.'</p></div></html>';
    
	// 			$subject = "Soon-to-Due (".$type.")";
	
	//             html_email('bertlai98@absyer.site', $subject, $msg);
	//         }
	//     }
	
	//     if($datetoday > $datedue)
	//     {
	//         remove_due($row['service_id'], 'Service Contract');
	//     }
	// }
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('../head/head.php');?>
		<title>Contacts</title>
	</head>
	
	<body>
		<div id="allSection" class="allSection">
			
			<?php include_once('../navbar/top.php');
				include_once('../navbar/mBar.php');
			?>
			
			<div id="allContent" class="allContent">
				<div class="searchBox">
					<h1 class='dashboard'><p class="history"></p>Contacts</h1>
					
					<!--<input type="text" id="search" class="searchInput" placeholder="Search..." title="Type in a name">!-->
				</div>
				
				<?php if($perm['registration'] == "rw" || $perm['registration'] == "w") { ?>
					<div class="buttons-row">
						<form class="move" action="reg_development_one.php">
							<input autocomplete="new-password" type="submit" class="allButton" value="Create New Contacts" required>
						</form>
						<!-- <form method="POST">
							<input type="text" name="email_content">
							<button name="sendmail" class="allButton">Send Email</button>
						</form> -->
					</div>
					
				<?php } ?>
				<div id="developments" class="tabcontent">
					
					<table id="dataTable" class="dataTable">
						<thead>
							<tr class="header">
								<td><a href="#" onclick="sortTable('dataTable', 0, 'T')" class="arrow">Contacts No<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 1, 'T')" class="arrow">Name<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 2, 'T')" class="arrow">NRIC<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 3, 'T')" class="arrow">Race<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 4, 'N')" class="arrow">Phone<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 5, 'T')" class="arrow">Address<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<td><a href='#' onclick="sortTable('dataTable', 6, 'T')" class="arrow">Remark<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td>
								<!-- <td><a href='#' onclick="sortTable('dataTable', 4, 'N')" class="arrow">Sales<div class="sortTriangle">&#x25BC;&#x25B2;</div></a></td> -->
								<td></td>
								
							</tr>
						</thead>
						<tr>
							<td>1</td>
			                <td>Jona</td>
			                <td>0123456789</td>
			                <td>CN</td>
			                <td>0123456789</td>
			                <td>Home Kuching</td>
			                <td>None</td>
			                <td><div class='iconBox'><a href='development_detail.php?devid=".$row['development_id']."'><img src='../images/msg.png' class='smicon'></img></a><a href="delete.php?devid=<?php echo $row['development_id']; ?>" onclick="return confirm('<?php echo $confirmation; ?>')"><img src='../images/trash.png' class='smicon'></img></a></div></td>						
						</tr>
						<tr>
							<td>2</td>
			                <td>Jona</td>
			                <td>0123456789</td>
			                <td>CN</td>
			                <td>0123456789</td>
			                <td>Home Kuching</td>
			                <td>None</td>
			                <td><div class='iconBox'><a href='development_detail.php?devid=".$row['development_id']."'><img src='../images/msg.png' class='smicon'></img></a><a href="delete.php?devid=<?php echo $row['development_id']; ?>" onclick="return confirm('<?php echo $confirmation; ?>')"><img src='../images/trash.png' class='smicon'></img></a></div></td>						
						</tr>
						<tr>
							<td>3</td>
			                <td>Jona</td>
			                <td>0123456789</td>
			                <td>CN</td>
			                <td>0123456789</td>
			                <td>Home Kuching</td>
			                <td>None</td>
			                <td><div class='iconBox'><a href='development_detail.php?devid=".$row['development_id']."'><img src='../images/msg.png' class='smicon'></img></a><a href="delete.php?devid=<?php echo $row['development_id']; ?>" onclick="return confirm('<?php echo $confirmation; ?>')"><img src='../images/trash.png' class='smicon'></img></a></div></td>						
						</tr>
			            <tbody id="tbody">
							<?php 
								// $get_AllDevelopment = get_AllDevelopment();
								
								// while($row = mysqli_fetch_array($get_AllDevelopment))
								// {
								// $confirmation = "Are you sure you want to delete " . $row['name'];
								
								// $dispUnitCount = getUnitCount($row['development_id']);
								// $data = mysqli_fetch_assoc($dispUnitCount);
								// echo "
								// <tr>
								// <td>".$row['nob']."</td>
								// <td>".$row['name']."</td>
								// <td>".$data['total']."</td>
								// <td>".$data['total']."</td>
								// <td>".$data['total']."</td>
								// <td>".$row['address']."</td>
								// <td>".$data['total']."</td>
								// <td><div class='iconBox'><a href='development_detail.php?devid=".$row['development_id']."'><img src='../images/msg.png' class='smicon'></img></a>
								
								// ";
							?>
							
							<?php  if($perm['registration'] == "rw" || $perm['registration'] == "w") { ?>
							<!--<a href="delete.php?devid=<?php echo $row['development_id']; ?>" onclick="return confirm('<?php echo $confirmation; ?>')"><img src='../images/trash.png' class='smicon'></img></a></div></td>  !-->
					<?php //} ?>
				</tr>
				<?php
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
	// }
	// else 
	// {
	// header("location: ../index.php");
	// }?>	
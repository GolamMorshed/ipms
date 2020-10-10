<?php
function opLog(){
	$log = get_allLog();
	while($row = mysqli_fetch_array($log))
	{			
		echo "<tr>";
		switch($row['action']){
			case 'Delete':
			{
				switch($row['class']){
					case 'Manager':
					case 'Staff':
					case 'Contractor':
					case 'Owner':
					case 'Tenant':
					{
						echo "
						<td>User <b>".$row['name']."</b> in group <b>".$row['class']."</b> has been removed</td>
						";
						break;
					}
					case 'Notification':
					case 'Management Charge':
					case 'Visitor':
					case 'Handbook':
					case 'Insurance':
					case 'Agreement':
					case 'Service Contract':
					{
						echo "
						<td>A <b>".$row['class']."</b> entry named <b>".$row['name']."</b> has been removed</td>
						";
						break;
					}
					case 'Incident':
					{
						echo "
						<td>An <b>".$row['class']."</b> entry named <b>".$row['name']."</b> has been removed</td>
						";
						break;
					}
				}
				break;
			}
			case 'Add':
			{
				switch($row['class']){
					case 'Manager':
					case 'Staff':
					case 'Contractor':
					case 'Owner':
					case 'Tenant':
					case 'Visitor':
					{
						echo "
						<td>A new <b>".$row['class']."</b> named <b>".$row['name']."</b> has been added
						";
					break;
					}
					case 'Notification':
					case 'Management Charge':
					case 'Handbook':
					case 'Incident':
					case 'Insurance':
					case 'Agreement':
					case 'Service Contract':
					{
						echo "
						<td>A new entry named <b>".$row['name']."</b> has been added into <b>".$row['class']."</b></td>
						";
						break;
					}
				}
				break;
			}
			case 'Update':
			{
				switch($row['class'])
				{
					case 'Manager':
					case 'Staff':
					case 'Contractor':
					case 'Owner':
					case 'Tenant':
					case 'Visitor':
					{
						echo "
							<td>Profile of user <b>".$row['name']."</b> in group <b>".$row['class']."</b> has been updated.</td>
							";
							break;
					}
					case 'Service Contract':
					case 'Insurance':
					case 'Handbook':
					case 'Agreement':
					{
						echo "
							<td>An entry in <b>".$row['class']."</b> named <b>".$row['name']."</b> has been updated.</td>
						";
						break;
					}
				}
				break;
			}
			case 'Approved':
			{
				echo "
				<td>A <b>".$row['class']."</b> for entry named <b>".$row['name']."</b> has been approved</td>
				";
				break;
			}
			case 'Rejected':
			{
				echo "
				<td>A <b>".$row['class']."</b> for entry named <b>".$row['name']."</b> has been rejected</td>
				";
			}
		}
		echo "<td>".$row['date_modified']."</td>";
			if(($row['action'] == "Add"||$row['action'] == "Update") && ($row['class'] == "Visitor"||$row['class'] == "Manager"||$row['class'] == "Staff"||$row['class'] == "Contractor"||$row['class'] == "Owner"||$row['class'] == "Tenant"||$row['class'] == "Service Contract"||$row['class'] == "Insurance"||$row['class'] == "Handbook"||$row['class'] == "Agreement")){
				
				switch($row['class'])
				{
					case 'Manager':
					case 'Staff':
					case 'Contractor':
					case 'Owner':
					case 'Tenant':
					{
						$getid = get_allUser();
						
						while($us = mysqli_fetch_array($getid))
						{
							if($row['user_id'] == $us['user_id'])
							{
								$class = strtolower($row['class']);
								echo "
									<td class='alignText'><a href='view.php?uid=".$row['user_id']."&role=".$class."&name=".$row['name']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
					case 'Visitor':
					{
						$getid = get_allvisitor();
						
						while($us = mysqli_fetch_array($getid))
						{
							if($row['user_id'] == $us['visitor_id'])
							{
								$class = strtolower($row['class']);
								echo "
									<td><a href='view_visitor.php?uid=".$row['user_id']."&role=".$class."&name=".$row['name']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
					case 'Service Contract':
					{
						$getid = get_allContract();
						
						while($us = mysqli_fetch_array($getid))
						{	
							if($row['user_id'] == $us['service_id'])
							{
								echo "
									<td><a href='view_service_c.php?scid=".$row['user_id']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
					case 'Insurance':
					{
						$getid = get_allInsurance();
						
						while($us = mysqli_fetch_array($getid))
						{
							if($row['user_id'] == $us['insurance_id'])
							{
								echo "
									<td><a href='view_insurance.php?insid=".$row['user_id']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
					case 'Handbook':
					{
						$getid = get_allHandbook();
						
						while($us = mysqli_fetch_array($getid))
						{
							if($row['user_id'] == $us['hb_id'])
							{
								echo "
									<td><a href='view_handbook.php?hbid=".$row['user_id']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
					case 'Agreement':
					{
						$getid = get_allAgreement();
						
						while($us = mysqli_fetch_array($getid))
						{
							if($row['user_id'] == $us['agreement_id'])
							{
								echo "
									<td><a href='view_agreement.php?agrid=".$row['user_id']."'><img src='../images/msg.png' class='smicon'></img></a></td>
								";
							}
						}
						break;
					}
				}		
			}
		echo "</tr>";
		}
	}
?>								
							
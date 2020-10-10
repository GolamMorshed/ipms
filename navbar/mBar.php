<nav id="allNav" class="allNav">
    <?php
		$url = $_SERVER['REQUEST_URI'];
		$positionperiod = strpos($url, ".");
		$extensionremoved = substr($url, 0, $positionperiod);
		$positionslash = strrpos($extensionremoved, "/");
		$file = substr($extensionremoved, $positionslash + 1);
		if (isset($_GET['role'])) {
			$role = $_GET['role'];
		}
		$userpermissions = getPermissions($_SESSION['user_id']);
		$perm = mysqli_fetch_assoc($userpermissions);
	?>
    <ul>
        <li><a href="../superadmin/dashboard.php"><img src="../images/ipms.png" class="ipms" /></a>
            <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>-->
		</li>
		
        <li>
            <?php
				// if ($file == "dashboard")
                // echo '<a href="../superadmin/dashboard.php" id="active-page"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-30.png" class="navicon"/> Dashboard</a>';
				// else
                echo '<a id="dshPicLink" href="../superadmin/landprofile.php"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-31.png" class="navicon"/> Land Profile</a>';
			?>
		</li>
		
        <?php if($perm['registration'] == "rw" || $perm['registration'] == "r") { ?>
			<li><a class="mBarLink" id="r" href="./project.php" onclick="dropdown('r')"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-35.png" class="navicon" /> Project <div class="mBarTriangle" id="mBarTriangler">&#x25BC;</div></a>
				<?php
					/*  if ($file == "developments" || $file == "managers" || $file == "staffs" || $file == "contractors" || $file == "owners" || $file == "tenants" || $file == "reg_development_one" || $file == "reg_development_two" || $file == "reg_development_three" || $file == "reg_development_four" || $file == "reg_development_five" || $file == "reg_development_six" || $file == "reg_development_seven" || $file == "view" || $file == "reg_manager" || $file == "reg_staff" || $file == "reg_contractor" || $file == "reg_owner" || $file == "reg_tenant" || $file == "development_detail" || $file == "edit" || $file == "facilitieslist" || $file == "reg_facilities" || $file == "assets" || $file == "reg_assets" || $file == "assets_specific" || $file == "edit_facility" || $file == "edit_assets")
						echo '<div class="dropdown-nav2-show"><input type="hidden" id="mBarSess" value="r"/>';
						else {
						echo '<div class="dropdown-nav2">';
					} */
				?>
				<ul>
					<li>
						<?php
							// if ($file == "developments" || $file == "reg_development_one" || $file == "reg_development_two" || $file == "reg_development_three" || $file == "reg_development_four" || $file == "reg_development_five" || $file == "reg_development_six" || $file == "reg_development_seven" || $file == "development_detail")
							//      echo '<a href="../superadmin/developments.php" id="active-page">Developments</a>';
							//else
							echo '<a href="../superadmin/create_project.php">Create New Project</a>';
						?>
					</li>
					<li>
						<?php
							// if ($file == "managers" || $file == "reg_manager" || $role == "manager")
							// echo '<a href="../superadmin/managers.php" id="active-page">Managers</a>';
							// else
							echo '<a href="../superadmin/project.php">Project Listing</a>';
						?>
					</li>
					<li>
						<?php
							// if ($file == "staffs" || $file == "reg_staff" || $role == "staff")
							// echo '<a href="../superadmin/staffs.php" id="active-page">Staffs</a>';
							// else
							echo '<a href="../superadmin/project_log.php">Project Logs Report</a>';
						?>
					</li>
				</ul>
				<?php
					// echo '</div>';
				?>
			</li>
			<?php 
				/*  } 
					if($perm['operation'] == "rw" || $perm['operation'] == "r")
				{ */
			?>
			
			<li><a class="mBarLink" id="om" href="" onclick="dropdown('om')"><img id="omPic" src="../images/IPMS UI Output 3 (10-01-20)-37.png" class="navicon" /> Contact <div class="mBarTriangle" id="mBarTriangleom">&#x25BC;</div></a>
				<?php
					/*  if ($file == "maintenance_record" || $file == "ppm" || $file == "adhoc" || $file == "visitors" || $file == "reg_visitor" || $file == "view_visitor" || $file == "due_soon_op" || $file == "mtppm_archive" || $file == "adhoc_archive" || $file == "maintenance_records_specific" || $file == "new_maintenance_record" || $file == "perform_log" || $file == "edit_ppm" || $file == "edit_maintenance_record")
						echo '<div class="dropdown-nav3-show"><input type="hidden" id="mBarSess" value="om"/>';
						else {
						echo '<div class="dropdown-nav3">';
					} */
				?>
				<ul>
					<li>
						<?php
							/* if ($file == "maintenance_record" || $file == "maintenance_records_specific" || $file == "new_maintenance_record" || $file == "edit_maintenance_record")
							echo '<a href="../superadmin/maintenance_record.php" id="active-page">Maintenance Records</a>';
							else */
							echo '<a href="../superadmin/create_contact.php">Create New Contact<a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "ppm" || $file == "reg_ppm" || $file == "mtppm_archive" || $file == "perform_log" || $file == "edit_ppm")
							echo '<a href="../superadmin/ppm.php" id="active-page">Monthly Term Services & PPM</a>';
							else */
							echo '<a href="../superadmin/contact_list.php">Contact Listing</a>';
						?>
					</li>
				</ul>
				<?php
					// echo '</div>';
				?>
			</li>
			<?php
			}
			if($perm['monitoring'] == "rw" || $perm['monitoring'] == "r")
			{
			?>
			<li><a class="mBarLink" id="mnt" href="#" onclick="dropdown('mnt')"><img id="mntPic" src="../images/IPMS UI Output 3 (10-01-20)-39.png" class="navicon" />Company<div class="mBarTriangle" id="mBarTrianglemnt">&#x25BC;</div></a>
				<?php
					/* if ($file == "service_c" || $file == "insurance" || $file == "agreement" || $file == "view_service_c" || $file == "edit_service_c" || $file == "view_insurance" || $file == "edit_insurance" || $file == "view_agreement" || $file == "edit_agreement" || $file == "new_service_c" || $file == "new_insurance" || $file == "new_agreement" || $file == "license" || $file == "view_license" || $file == "edit_license" || $file == "new_license" || $file == "scheduled_periodic_maintenance" || $file == "view_sp_maintenance" || $file == "edit_sp_maintenance" || $file == "new_sp_maintenance" || $file == "due_soon")
					echo '<div class="dropdown-nav4-show"><input type="hidden" id="mBarSess" value="mnt"/>';
					else {
						echo '<div class="dropdown-nav4">';
					} */
				?>
				<ul>
					<li>
						<?php
							/* if ($file == "service_c" || $file == "view_service_c" || $file == "edit_service_c" || $file == "new_service_c")
							echo '<a href="../superadmin/service_c.php" id="active-page">Service Contract</a>';
							else */
							echo '<a href="../superadmin/create_company.php">Create New Company</a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "insurance" || $file == "view_insurance" || $file == "edit_insurance" || $file == "new_insurance")
							echo '<a href="../superadmin/insurance.php" id="active-page">Insurance</a>';
							else */
							echo '<a href="../superadmin/company_list.php">Company Listing</a>';
						?>
					</li>
					
				</ul>
				<?php
					// echo '</div>';
				?>
				
			</li>
			
			<li><a class="mBarLink" id="mnt" href="../superadmin/library.php" onclick="dropdown('mnt')"><img id="mntPic" src="../images/IPMS UI Output 3 (10-01-20)-39.png" class="navicon" />Library</a>
				
			</li>
			
			<li><a class="mBarLink" id="mnt" href="#" onclick="dropdown('mnt')"><img id="mntPic" src="../images/IPMS UI Output 3 (10-01-20)-39.png" class="navicon" />Report<div class="mBarTriangle" id="mBarTrianglemnt">&#x25BC;</div></a>
				<?php
					/* if ($file == "service_c" || $file == "insurance" || $file == "agreement" || $file == "view_service_c" || $file == "edit_service_c" || $file == "view_insurance" || $file == "edit_insurance" || $file == "view_agreement" || $file == "edit_agreement" || $file == "new_service_c" || $file == "new_insurance" || $file == "new_agreement" || $file == "license" || $file == "view_license" || $file == "edit_license" || $file == "new_license" || $file == "scheduled_periodic_maintenance" || $file == "view_sp_maintenance" || $file == "edit_sp_maintenance" || $file == "new_sp_maintenance" || $file == "due_soon")
					echo '<div class="dropdown-nav4-show"><input type="hidden" id="mBarSess" value="mnt"/>';
					else {
						echo '<div class="dropdown-nav4">';
					} */
				?>
				<ul>
					<li>
						<?php
							/* if ($file == "service_c" || $file == "view_service_c" || $file == "edit_service_c" || $file == "new_service_c")
							echo '<a href="../superadmin/service_c.php" id="active-page">Service Contract</a>';
							else */
							echo '<a href="../superadmin/report_log.php">Latest Log</a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "insurance" || $file == "view_insurance" || $file == "edit_insurance" || $file == "new_insurance")
							echo '<a href="../superadmin/insurance.php" id="active-page">Insurance</a>';
							else */
							echo '<a href="../superadmin/report_land_profile.php">Shareholder & Trustee</a>';
						?>
					</li>
					
				</ul>
				<?php
					// echo '</div>';
				?>
				
			</li>

			<?php
			}
			if($perm['communication'] == "rw" || $perm['communication'] == "r")
			{
			?>
			<li><a class="mBarLink" id="c" href="../superadmin/development_component.php" onclick="dropdown('c')"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-41.png" class="navicon" />Setting <div class="mBarTriangle" id="mBarTrianglec">&#x25BC;</div></a>
				<?php
					/* if ($file == "facilities" || $file == "feedbacks" || $file == "work_order_request" || $file == "handbook" || $file == "notifications" || $file == "visitor_permission" || $file == "view_handbook" || $file == "edit_handbook" || $file == "reg_notifications")
					echo '<div class="dropdown-nav5-show"><input type="hidden" id="mBarSess" value="c"/>';
					else {
						echo '<div class="dropdown-nav5">';
					} */
				?>
				<ul>
					<li>
						<?php
							/* if ($file == "notifications" || $file == "reg_notifications")
							echo '<a href="../superadmin/notifications.php" id="active-page">Notice/Circular</a>';
							else */
							echo '<a href="../superadmin/users.php">User</a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "notifications" || $file == "reg_notifications")
							echo '<a href="../superadmin/notifications.php" id="active-page">Notice/Circular</a>';
							else */
							echo '<a href="#">File Type</a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "facilities")
							echo '<a href="../superadmin/facilities.php" id="active-page">Facility Bookings</a>';
							else */
							echo '<a href="#">Project</a>';
						?>
					</li>
					<li>
						<?php
							/* if ($file == "feedbacks")
							echo '<a href="../superadmin/feedbacks.php" id="active-page">Feedbacks</a>';
							else */
							echo '<a href="#">Logs</a>';
						?>
					</li>
				</ul>
				<?php
					// echo '</div>';
				?>
			</li>
			
			
    <?php
		}
	?>
</ul>
</nav>
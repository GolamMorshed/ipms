<nav id="allNav" class="allNav">
    <?php
        $url= $_SERVER['REQUEST_URI']; 
        $positionperiod= strpos($url, ".");
        $extensionremoved= substr($url, 0, $positionperiod);
        $positionslash= strrpos($extensionremoved, "/");
        $file= substr($extensionremoved, $positionslash + 1);
        if(isset($_GET['role'])){
            $role= $_GET['role'];
        }
    ?>
<ul>
	<li><a href="../staff/dashboard.php"><img src="../images/pjx.png" class="ipms"/></a>
    <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>--></li>		
	<li>
    <?php
        if ($file=="dashboard")
            echo '<a href="../staff/dashboard.php" id="active-page"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-30.png" class="navicon"/> Dashboard</a>';
        else
            echo '<a id="dshPicLink" href="../staff/dashboard.php"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-31.png" class="navicon"/> Dashboard</a>';
    ?>
    </li>
	<li><a class="mBarLink" id="r" href="#" onclick="dropdown('r')"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-35.png" class="navicon"/> Registrations <div class="mBarTriangle" id="mBarTriangler">&#x25BC;</div></a>
    <?php
        if ($file=="developments" || $file=="managers" || $file=="staffs" || $file=="contractors" || $file=="owners" || $file=="tenants" || $file=="reg_development_one" || $file=="reg_development_two" || $file=="reg_development_three" || $file=="reg_development_four" || $file=="reg_development_five" || $file=="reg_development_six" || $file=="reg_development_seven" || $file=="view" || $file=="reg_manager" || $file=="reg_staff" || $file=="reg_contractor" || $file=="reg_owner" || $file=="reg_tenant" || $file=="development_detail" || $file=="edit" || $file=="facilitieslist" || $file=="reg_facilities" || $file=="assets" || $file=="reg_assets")
		  echo '<div class="dropdown-nav2-show"><input type="hidden" id="mBarSess" value="r"/>';
        else {
		  echo '<div class="dropdown-nav2">';
        } 
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="developments" || $file=="reg_development_one" || $file=="reg_development_two" || $file=="reg_development_three" || $file=="reg_development_four" || $file=="reg_development_five" || $file=="reg_development_six" || $file=="reg_development_seven" || $file=="development_detail")
                        echo '<a href="../staff/developments.php" id="active-page">Developments</a>';
                    else
                        echo '<a href="../staff/developments.php">Developments</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="contractors" || $file=="reg_contractor" || $role=="contractor")
                        echo '<a href="../staff/contractors.php" id="active-page">Contractors</a>';
                    else
                        echo '<a href="../staff/contractors.php">Contractors</a>';
                ?>
                </li>	
				<li>
                <?php
                    if ($file=="owners" || $file=="reg_owner" || $role=="owner")
                        echo '<a href="../staff/owners.php" id="active-page">Owners</a>';
                    else
                        echo '<a href="../staff/owners.php">Owners</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="tenants" || $file=="reg_tenant" || $role=="tenant")
                        echo '<a href="../staff/tenants.php" id="active-page">Tenants</a>';
                    else
                        echo '<a href="../staff/tenants.php">Tenants</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>
	</li>
	<li><a class="mBarLink" id="om" href="#" onclick="dropdown('om')"><img id="omPic" src="../images/IPMS UI Output 3 (10-01-20)-37.png" class="navicon"/> Operations <div class="mBarTriangle" id="mBarTriangleom">&#x25BC;</div></a>
    <?php
        if ($file=="maintenance_record" || $file=="ppm" || $file=="adhoc" || $file=="visitors" || $file=="reg_visitor" || $file=="view_visitor")
		  echo '<div class="dropdown-nav3-show"><input type="hidden" id="mBarSess" value="om"/>';
        else {
		  echo '<div class="dropdown-nav3">';
        }    
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="maintenance_record")
                        echo '<a href="../staff/maintenance_record.php" id="active-page">Maintenance Records</a>';
                    else
                        echo '<a href="../staff/maintenance_record.php">Maintenance Records</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="ppm" || $file == "reg_ppm" )
                        echo '<a href="../staff/ppm.php" id="active-page">Monthly Term Services & PPM</a>';
                    else
                        echo '<a href="../staff/ppm.php">Monthly Term Services & PPM</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="adhoc" || $file == "reg_adhoc")
                        echo '<a href="../staff/adhoc.php" id="active-page">Ad Hoc Work Monitoring</a>';
                    else
                        echo '<a href="../staff/adhoc.php">Ad Hoc Work Monitoring</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>
	</li>
	<li><a class="mBarLink" id="mnt" href="#" onclick="dropdown('mnt')"><img id="mntPic" src="../images/IPMS UI Output 3 (10-01-20)-39.png" class="navicon"/> Monitoring and Tracking <div class="mBarTriangle" id="mBarTrianglemnt">&#x25BC;</div></a>
    <?php
        if ($file=="service_c" || $file=="insurance" || $file=="agreement" || $file=="view_service_c" || $file=="edit_service_c" || $file=="view_insurance" || $file=="edit_insurance" || $file=="view_agreement" || $file=="edit_agreement" || $file=="new_service_c" || $file=="new_insurance" || $file=="new_agreement" || $file=="license" || $file=="view_license" || $file=="edit_license" || $file=="new_license" || $file=="scheduled_periodic_maintenance" || $file=="view_sp_maintenance" || $file=="edit_sp_maintenance" || $file=="new_sp_maintenance" || $file == "due_soon")
		  echo '<div class="dropdown-nav4-show"><input type="hidden" id="mBarSess" value="mnt"/>';
        else {
		  echo '<div class="dropdown-nav4">';
        }    
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="service_c" || $file=="view_service_c" || $file=="edit_service_c" || $file=="new_service_c")
                        echo '<a href="../staff/service_c.php" id="active-page">Service Contract</a>';
                    else
                        echo '<a href="../staff/service_c.php">Service Contract</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="insurance" || $file=="view_insurance" || $file=="edit_insurance" || $file=="new_insurance")
                        echo '<a href="../staff/insurance.php" id="active-page">Insurance</a>';
                    else
                        echo '<a href="../staff/insurance.php">Insurance</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="agreement" || $file=="view_agreement" || $file=="edit_agreement" || $file=="new_agreement")
                        echo '<a href="../staff/agreement.php" id="active-page">Agreement</a>';
                    else
                        echo '<a href="../staff/agreement.php">Agreement</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="license" || $file=="view_license" || $file=="edit_license" || $file=="new_license")
                        echo '<a href="../staff/license.php" id="active-page">License</a>';
                    else
                        echo '<a href="../staff/license.php">License</a>';
                ?>
                </li>
                <li>
                <?php
                    if ($file=="scheduled_periodic_maintenance" || $file=="view_sp_maintenance" || $file=="edit_sp_maintenance" || $file=="new_sp_maintenance")
                        echo '<a href="../staff/scheduled_periodic_maintenance.php" id="active-page">Scheduled & Periodic Maintenance</a>';
                    else
                        echo '<a href="../staff/scheduled_periodic_maintenance.php">Scheduled & Periodic Maintenance</a>';
                ?>
                </li>
                <li>
                <?php
                    if ($file == "due_soon")
                        echo '<a href="../staff/due_soon.php" id="active-page">Soon-to-Due</a>';
                    else
                        echo '<a href="../staff/due_soon.php">Soon-to-Due</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>

	</li>
	<li><a class="mBarLink" id="c" href="#" onclick="dropdown('c')"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-41.png" class="navicon"/> Communications <div class="mBarTriangle" id="mBarTrianglec">&#x25BC;</div></a>
    <?php
        if ($file=="facilities" || $file=="feedbacks" || $file=="work_order_request" || $file=="handbook" || $file=="notifications" || $file=="visitor_permission" || $file=="view_handbook" || $file=="edit_handbook" || $file=="reg_notifications")
		  echo '<div class="dropdown-nav5-show"><input type="hidden" id="mBarSess" value="c"/>';
        else {
		  echo '<div class="dropdown-nav5">';
        }    
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="facilities")
                        echo '<a href="../staff/facilities.php" id="active-page">Facility Bookings</a>';
                    else
                        echo '<a href="../staff/facilities.php">Facility Bookings</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="feedbacks")
                        echo '<a href="../staff/feedbacks.php" id="active-page">Feedbacks</a>';
                    else
                        echo '<a href="../staff/feedbacks.php">Feedbacks</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="work_order_request")
                        echo '<a href="../staff/work_order_request.php" id="active-page">Work Orders Request</a>';
                    else
                        echo '<a href="../staff/work_order_request.php">Work Orders Request</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="handbook" || $file=="view_handbook" || $file=="edit_handbook")
                        echo '<a href="../staff/handbook.php" id="active-page">Handbook</a>';
                    else
                        echo '<a href="../staff/handbook.php">Handbook</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="notifications" || $file=="reg_notifications")
                        echo '<a href="../staff/notifications.php" id="active-page">Notice/Circular</a>';
                    else
                        echo '<a href="../staff/notifications.php">Notice/Circular</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="visitor_permission")
                        echo '<a href="../staff/visitor_permission.php" id="active-page">Group Visitor & Contractor</a>';
                    else
                        echo '<a href="../staff/visitor_permission.php">Group Visitor & Contractor</a>';
                ?>
                </li>

			</ul>
    <?php
        echo '</div>';
    ?>
	</li>	
	<li><a class="mBarLink" id="soa" href="#" onclick="dropdown('soa')"><img id="soaPic" src="../images/IPMS UI Output 3 (10-01-20)-33.png" class="navicon"/> Statements of Accounts <div class="mBarTriangle" id="mBarTrianglesoa">&#x25BC;</div></a>
    <?php
        if ($file=="management_charges" || $file=="electric_n_water_bills" || $file=="sinking_funds" || $file=="account" || $file=="reg_managementc" || $file=="reg_bill")
		  echo '<div class="dropdown-nav1-show"><input type="hidden" id="mBarSess" value="soa"/>';
        else {
		  echo '<div class="dropdown-nav1">';
        }     
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="management_charges" || $file=="reg_managementc")
                        echo '<a href="../staff/management_charges.php" id="active-page">Management Charges</a>';
                    else
                        echo '<a href="../staff/management_charges.php">Management Charges</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="electric_n_water_bills" || $file=="reg_bill")
                        echo '<a href="../staff/electric_n_water_bills.php" id="active-page">Electric and Water Bills</a>';
                    else
                        echo '<a href="../staff/electric_n_water_bills.php">Electric and Water Bills</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="sinking_funds")
                        echo '<a href="../staff/sinking_funds.php" id="active-page">Sinking Fund</a>';
                    else
                        echo '<a href="../staff/sinking_funds.php">Sinking Fund</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>
	</li>
	<li><a class="mBarLink" id="gs" href="#" onclick="dropdown('gs')"><img id="gsPic" src="../images/IPMS UI Output 3 (10-01-20)-43.png" class="navicon"/> Settings <div class="mBarTriangle" id="mBarTrianglegs">&#x25BC;</div></a>
    <?php
        if ($file=="settings" || $file=="activity_log")
		  echo '<div class="dropdown-nav6-show"><input type="hidden" id="mBarSess" value="gs"/>';
        else {
		  echo '<div class="dropdown-nav6">';
        }     
    ?>
			<ul>
				<li>
                <?php
                    if ($file=="settings")
                        echo '<a href="../staff/settings.php" id="active-page">General Settings</a>';
                    else
                        echo '<a href="../staff/settings.php">General Settings</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="activity_log")
                        echo '<a href="../staff/activity_log.php" id="active-page">Activity Log</a>';
                    else
                        echo '<a href="../staff/activity_log.php">Activity Log</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>
	</li>
</ul>
</nav>

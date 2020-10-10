<nav id="allNav" class="allNav">
	<?php
        $url= $_SERVER['REQUEST_URI']; 
        $positionperiod= strpos($url, ".");
        $extensionremoved= substr($url, 0, $positionperiod);
        $positionslash= strrpos($extensionremoved, "/");
        $file= substr($extensionremoved, $positionslash + 1);
        $userpermissions = getComPermissions($_SESSION['user_id']);
        $perm = mysqli_fetch_assoc($userpermissions);
        
        $get_allannoucement = get_allannoucement();
        $announcementCount = 0;
        while($announcement = mysqli_fetch_array($get_allannoucement)){
            if(strpos($announcement['audiences'], 'Owners') !== false){
                $announcementCount++;
            }
        }
        
    ?>
<ul>
	<li><a href="../owner/properties.php"><img src="../images/pjx.png" class="ipms"/></a>
    <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>--></li>		
	<li>
    <?php
        if ($file=="dashboard")
            echo '<a href="../owner/dashboard.php" id="active-page"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-30.png" class="smicon"/> Dashboard</a>';
        else
            echo '<a id="dshPicLink" href="../owner/dashboard.php"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-31.png" class="smicon"/> Dashboard</a>';
    ?>
    </li>
	<li>
	<?php
        if ($file=="properties")
            echo '<a class="mBarLink" href="../owner/properties.php" id="active-page"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-34.png" class="smicon"/> Properties</a>';
        else
            echo '<a id="r" href="../owner/properties.php"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-35.png" class="smicon"/> Properties</a>';
    ?>
    </li>
    <li disabled><a class="mBarLink" id="soa" href="#" <!--onclick="dropdown('soa')"--><img id="soaPic" src="../images/IPMS UI Output 3 (10-01-20)-33.png" class="smicon"/>Account Statements (BETA|WIP)<div class="mBarTriangle" id="mBarTrianglesoa">&#x25BC;</div></a>
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
                        echo '<a href="../owner/management_charges.php" id="active-page">Management Charges</a>';
                    else
                        echo '<a href="../owner/management_charges.php">Management Charges</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="electric_n_water_bills" || $file=="reg_bill")
                        echo '<a href="../owner/electric_n_water_bills.php" id="active-page">Electric and Water Bills</a>';
                    else
                        echo '<a href="../owner/electric_n_water_bills.php">Electric and Water Bills</a>';
                ?>
                </li>
				<li>
                <?php
                    if ($file=="sinking_funds")
                        echo '<a href="../owner/sinking_funds.php" id="active-page">Sinking Fund</a>';
                    else
                        echo '<a href="../owner/sinking_funds.php">Sinking Fund</a>';
                ?>
                </li>
			</ul>
    <?php
        echo '</div>';
    ?>
	</li>
    <li><a class="mBarLink" id="c" href="#" onclick="dropdown('c')"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-41.png" class="smicon"/> Communications <div class="mBarTriangle" id="mBarTrianglec">&#x25BC;</div></a>
    <?php
        if ($file=="facilities" || $file=="feedbacks" || $file=="work_order_request" || $file=="visitors" || $file=="book_facility" || $file=="reg_feedback" || $file=="reg_work_order_request" || $file=="reg_visitor" || $file=="view_visitor" || $file=="edit_visitor" || $file=="notifications" || $file=="handbook")
		  echo '<div class="dropdown-nav5-show"><input type="hidden" id="mBarSess" value="c"/>';
        else {
		  echo '<div class="dropdown-nav5">';
        }    
    ?>
			<ul>
            <?php if($perm['notice'] == "rw" || $perm['notice'] == "r") { ?>
                <li>
                <?php
                    if ($file=="notifications"){
                ?>
                    <a href="../owner/notifications.php" id="active-page" class="navbar-item-text">Notice & Circular&nbsp;<div class="communication-count"><?php echo $announcementCount; ?></div></a>
                <?php
                    }
                    else{
                ?>
                    <a href="../owner/notifications.php" class="navbar-item-text">Notice & Circular&nbsp;<div class="communication-count"><?php echo $announcementCount; ?></div></a>
                <?php      
                    }
                ?>
                </li>
            <?php 
            } 
            if($perm['facility_bookings'] == "rw" || $perm['facility_bookings'] == "r")
            {
            ?>
				<li>
                <?php
                    if ($file=="facilities" || $file=="book_facility")
                        echo '<a href="../owner/facilities.php" id="active-page">Facility Bookings</a>';
                    else
                        echo '<a href="../owner/facilities.php">Facility Bookings</a>';
                ?>
                </li>
            <?php 
            } 
            if($perm['feedbacks'] == "rw" || $perm['feedbacks'] == "r")
            {
            ?>
				<li>
                <?php
                    if ($file=="feedbacks" || $file=="reg_feedback")
                        echo '<a href="../owner/feedbacks.php" id="active-page">Feedbacks</a>';
                    else
                        echo '<a href="../owner/feedbacks.php">Feedbacks</a>';
                ?>
                </li>
            <?php 
            } 
            if($perm['work_order_requests'] == "rw" || $perm['work_order_requests'] == "r")
            {
            ?>
				<li>
                <?php
                    if ($file=="work_order_request" || $file=="reg_work_order_request")
                        echo '<a href="../owner/work_order_request.php" id="active-page">Work Orders Request</a>';
                    else
                        echo '<a href="../owner/work_order_request.php">Work Orders Request</a>';
                ?>
                </li>
            <?php 
            } 
            if($perm['visitor'] == "rw" || $perm['visitor'] == "r")
            {
            ?>
				<li>
                <?php
                    if ($file=="visitors" || $file=="reg_visitor" || $file=="view_visitor" || $file=="edit_visitor")
                        echo '<a href="../owner/visitors.php" id="active-page">Group Visitor & Contractor</a>';
                    else
                        echo '<a href="../owner/visitors.php">Group Visitor & Contractor</a>';
                ?>
                </li>
            <?php
            }
            if($perm['handbook'] == "rw" || $perm['handbook'] == "r")
            {
            ?>
				<li>
                <?php
                    if ($file=="handbook" )
                        echo '<a href="../owner/handbook.php" id="active-page">Handbook</a>';
                    else
                        echo '<a href="../owner/handbook.php">Handbook</a>';
                ?>
                </li>
            <?php
            }
            ?>

			</ul>
    <?php
        echo '</div>';
    ?>
	</li> 
</ul>
</nav>
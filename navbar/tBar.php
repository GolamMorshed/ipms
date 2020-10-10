    <nav id="allNav" class="allNav">
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $positionperiod = strpos($url, ".");
    $extensionremoved = substr($url, 0, $positionperiod);
    $positionslash = strrpos($extensionremoved, "/");
    $file = substr($extensionremoved, $positionslash + 1);
    $userpermissions = getComPermissions($_SESSION['user_id']);
    $perm = mysqli_fetch_assoc($userpermissions);
    ?>
    <ul>
        <li><a href="../tenant/dashboard.php"><img src="../images/pjx.png" class="ipms" /></a>
            <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>-->
        </li>
        <li>
            <?php
            if ($file == "dashboard")
                echo '<a href="../tenant/dashboard.php" id="active-page"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-30.png" class="smicon"/> Dashboard</a>';
            else
                echo '<a id="dshPicLink" href="../tenant/dashboard.php"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-31.png" class="smicon"/> Dashboard</a>';
            ?>
        </li>
        <li>
            <?php
            if ($file == "properties" || $file == "book_facility")
                echo '<a class="mBarLink" href="../tenant/properties.php" id="active-page"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-34.png" class="smicon"/> Properties</a>';
            else
                echo '<a id="r" href="../tenant/properties.php"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-35.png" class="smicon"/> Properties</a>';
            ?>
        </li>
        <li disabled><a class="mBarLink" id="soa" href="#" <!--onclick="dropdown('soa')"--><img id="soaPic" src="../images/IPMS UI Output 3 (10-01-20)-33.png" class="smicon" />Account Statements (BETA|WIP)<div class="mBarTriangle" id="mBarTrianglesoa">&#x25BC;</div></a>
            <?php
            if ($file == "management_charges" || $file == "electric_n_water_bills" || $file == "sinking_funds" || $file == "account" || $file == "reg_managementc" || $file == "reg_bill")
                echo '<div class="dropdown-nav1-show"><input type="hidden" id="mBarSess" value="soa"/>';
            else {
                echo '<div class="dropdown-nav1">';
            }
            ?>
            <ul>
                <li>
                    <?php
                    if ($file == "electric_n_water_bills" || $file == "reg_bill")
                        echo '<a href="../tenant/electric_n_water_bills.php" id="active-page">Electric and Water Bills</a>';
                    else
                        echo '<a href="../tenant/electric_n_water_bills.php">Electric and Water Bills</a>';
                    ?>
                </li>
            </ul>
            <?php
            echo '</div>';
            ?>
        </li>

        <li><a class="mBarLink" id="c" href="#" onclick="dropdown('c')"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-41.png" class="smicon" /> Communications <div class="mBarTriangle" id="mBarTrianglec">&#x25BC;</div></a>
            <?php
            if ($file == "facilities" || $file == "feedbacks" || $file == "work_order_request" || $file == "visitors" || $file == "book_facility" || $file == "reg_feedback" || $file == "reg_work_order_request" || $file == "reg_visitor" || $file == "view_visitor" || $file == "edit_visitor" || $file=="notifications" || $file=="handbook")
                echo '<div class="dropdown-nav5-show"><input type="hidden" id="mBarSess" value="c"/>';
            else {
                echo '<div class="dropdown-nav5">';
            }
            ?>
            <ul>
            <?php if($perm['notice'] == "rw" || $perm['notice'] == "r") { ?>
                <li>
                <?php
                    if ($file=="notifications")
                        echo '<a href="../tenant/notifications.php" id="active-page">Notice & Circular</a>';
                    else
                        echo '<a href="../tenant/notifications.php">Notice & Circular</a>';
                ?>
                </li>
            <?php 
            } 
            if($perm['facility_bookings'] == "rw" || $perm['facility_bookings'] == "r")
            {
            ?>
                <li>
                    <?php
                    if ($file == "facilities" || $file == "book_facility")
                        echo '<a href="../tenant/facilities.php" id="active-page">Facility Bookings</a>';
                    else
                        echo '<a href="../tenant/facilities.php">Facility Bookings</a>';
                    ?>
                </li>
            <?php 
            } 
            if($perm['feedbacks'] == "rw" || $perm['feedbacks'] == "r")
            {
            ?>
                <li>
                    <?php
                    if ($file == "feedbacks" || $file == "reg_feedback")
                        echo '<a href="../tenant/feedbacks.php" id="active-page">Feedbacks</a>';
                    else
                        echo '<a href="../tenant/feedbacks.php">Feedbacks</a>';
                    ?>
                </li>
            <?php 
            } 
            if($perm['work_order_requests'] == "rw" || $perm['work_order_requests'] == "r")
            {
            ?>
                <li>
                    <?php
                    if ($file == "work_order_request" || $file == "reg_work_order_request")
                        echo '<a href="../tenant/work_order_request.php" id="active-page">Work Orders Request</a>';
                    else
                        echo '<a href="../tenant/work_order_request.php">Work Orders Request</a>';
                    ?>
                </li>
            <?php 
            } 
            if($perm['visitor'] == "rw" || $perm['visitor'] == "r")
            {
            ?>
                <li>
                    <?php
                    if ($file == "visitors" || $file == "reg_visitor" || $file == "view_visitor" || $file == "edit_visitor")
                        echo '<a href="../tenant/visitors.php" id="active-page">Group Visitor & Contractor</a>';
                    else
                        echo '<a href="../tenant/visitors.php">Group Visitor & Contractor</a>';
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
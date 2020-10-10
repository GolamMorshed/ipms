<nav id="allNav" class="allNav">
	<?php
        $url= $_SERVER['REQUEST_URI']; 
        $positionperiod= strpos($url, ".");
        $extensionremoved= substr($url, 0, $positionperiod);
        $positionslash= strrpos($extensionremoved, "/");
        $file= substr($extensionremoved, $positionslash + 1);
    ?>
<ul>
	<li><a href="../owner/defects_list.php"><img src="../images/pjx.png" class="ipms"/></a>
    <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>--></li>		
	<li>
    <?php
        // if ($file=="dashboard")
        //     echo '<a href="../owner/dashboard.php" id="active-page"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-30.png" class="smicon"/> Dashboard</a>';
        // else
        //     echo '<a id="dshPicLink" href="../owner/dashboard.php"><img id="dshPic" src="../images/IPMS UI Output 3 (10-01-20)-31.png" class="smicon"/> Dashboard</a>';
    ?>
    </li>
	<li>
	<?php
        if ($file=="defects_list")
            echo '<a class="mBarLink" href="../owner/defects_list.php" id="active-page"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-34.png" class="smicon"/> Defects List</a>';
        else
            echo '<a id="r" href="../owner/defects_list.php"><img id="rPic" src="../images/IPMS UI Output 3 (10-01-20)-35.png" class="smicon"/> Defects List</a>';
    ?>
    </li>
</ul>
</nav>
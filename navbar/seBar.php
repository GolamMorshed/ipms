<nav id="allNav" class="allNav">
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $positionperiod = strpos($url, ".");
    $extensionremoved = substr($url, 0, $positionperiod);
    $positionslash = strrpos($extensionremoved, "/");
    $file = substr($extensionremoved, $positionslash + 1);
    ?>
    <ul>
        <li><a href="../security/visitors.php"><img src="../images/pjx.png" class="ipms" /></a>
            <!--<button id="slidebtn" class="slidebtn" onclick="slideNav()">&#9776;</button>-->
        </li>
        <li>
            <?php
            if ($file == "visitors" || $file=="view_visitor")
                echo '<a class="mBarLink" href="../security/visitors.php" id="active-page"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-40.png" class="navicon"/>Group Visitors & Contractors</a>';
            else
                echo '<a id="c" href="../security/visitors.php"><img id="cPic" src="../images/IPMS UI Output 3 (10-01-20)-41.png" class="navicon"/>Group Visitors & Contractors</a>';
            ?>
        </li>
    </ul>
</nav>
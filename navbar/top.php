			<div class="top">
				<div class="username">
				    <?php date_default_timezone_set("Asia/Kuala_Lumpur");
				    echo "<span class='top_datetime'>".date('d-m-Y')."</span>";?>
					<a id="username" href="#" onclick="dropdown('username')"><img id="usrPic" src="../images/IPMS UI Output 3 (10-01-20)-50.png" class="pmicon"></img> 
						<?php
							$result = select_user($userId);

							while($row = mysqli_fetch_array($result))
							{
							 echo $row['name']; 
							}
						?>
					</a>

					<div class="dropdown-username">
						<ul>
							<li><a class="profile" name="profile" href="../main/profile.php">Profile</a></li>
							<li><a class="lgout" name="lgout" href="../model/logoutpro.php?ok=ok">Log Out</a></li>
						</ul>
					</div>

				</div>
			</div>
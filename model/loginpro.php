<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	if (isset($_POST['login'])) 
	{
		if(isset($_POST['email']) && isset($_POST['password'])) 
		{
			$email =  strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);
			$email = mysqli_real_escape_string($dbconnection, $email);
			$password = mysqli_real_escape_string($dbconnection, $password);

			$password = strtoupper(md5($password));

			$checkEmail = mysqli_query($dbconnection, "SELECT `email` FROM `users` WHERE `email` = '".$email."'") or exit(mysqli_error($dbconnection));

			if(mysqli_num_rows($checkEmail) >= 1) 
			{
				$checkRole = mysqli_query($dbconnection, "SELECT * FROM `users` WHERE `password` = '".$password."' AND `email` = '".$email."' ") or exit(mysqli_error($dbconnection));

				if(mysqli_num_rows($checkRole) >= 1) 
				{
					while($row = mysqli_fetch_array($checkRole)) 
						{ 
							$role = $row['role'];
							$userId = $row['user_id'];
							$status = $row['status'];
						}

						if($role == "superadmin" || $role == "staff" || $role == "manager") 
						{
							$_SESSION["user_id"] = $userId;
							$_SESSION["role"] = $role;
							header("Location: ../superadmin/dashboard.php");
						}
						else if($role == "owner") 
						{
							$_SESSION["user_id"] = $userId;
							$_SESSION["role"] = $role;
							if($status == "active"){
								header("Location: ../owner/dashboard.php");
							} else if($status == "inactive"){
								header("Location: ../main/changepword.php?status=inactive");
							}
						} 
						else if($role == "tenant") 
						{
							$_SESSION["user_id"] = $userId;
							$_SESSION["role"] = $role;
							if($status == "active"){
								header("Location: ../tenant/dashboard.php");
							} else if($status == "inactive"){
								header("Location: ../main/changepword.php?status=inactive");
							}
						}
				}
				else 
				{
					?><script> alert('Wrong Password. Please Try Again.'); </script><?php
				}

			}else 
			{
				?><script> alert('Account Does Not Exist. Please Try Again.'); </script><?php
			}
		}
	}
}
?>
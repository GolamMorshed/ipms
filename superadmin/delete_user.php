<?php
session_start();
ob_start();

if(isset($_SESSION["user_id"]) && isset($_SESSION["role"])) 
{
	$userId = $_SESSION["user_id"];
	$role = $_SESSION["role"];
}

if($role == "superadmin" || $role == "staff" || $role == "manager") 
{
	include_once '../connection/dbconnect.php'; //Nat's code
	include_once('../model/logoutpro.php');
	include_once('../model/users_module.php');

	if(isset($_GET['uid']))
		{
			$deleteUid = $_GET['uid'];
			delete_User($deleteUid);
			delete_PersonalD($deleteUid);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
}
else 
{
	header("location: ../index.php");
}
?>
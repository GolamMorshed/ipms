<?php 

//USERS
function select_user($userId)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `personal_details` WHERE `user_id` = '".$userId."'");

	return $result;	
}

function get_UserEmail($userId)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users` WHERE `user_id` = '".$userId."'");

	return $result;	
}

function get_userID($email)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users` WHERE `email` = '".$email."'");

	return $result;		
}

function register_user($email, $password, $accessR, $role, $status)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `users`(`email`, `password`, `access_rights`, `role`, `status`) VALUES ('".$email."','".$password."','".$accessR."','".$role."','".$status."')");

	return $result;	
}

function register_userPersonalD($user_id, $name, $ic, $phone, $address, $emergencyC, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `personal_details`(`user_id`, `name`, `ic`, `phone`, `address`, `emergency_contact`, `date_created`) VALUES ('".$user_id."','".$name."','".$ic."','".$phone."','".$address."','".$emergencyC."','".$datetime."')");

	return $result;	
}

function displayAll_role($role)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `personal_details` JOIN `users` ON `personal_details`.user_id = `users`.user_id WHERE role = '".$role."' ORDER BY `personal_details`.user_id DESC");

	return $result;
}

function displayAll_manager()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `personal_details` JOIN `users` ON `personal_details`.user_id = `users`.user_id WHERE (role = 'manager' OR role = 'managersa') ORDER BY `personal_details`.user_id DESC");

	return $result;
}

function checkAvailIC($ic)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `personal_details` WHERE `ic` = '".$ic."'");

	return $result;	
}

function delete_User($userId)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `users` WHERE `user_id` = '".$userId."'");

	return $result;	
}

function delete_PersonalD($userId)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `personal_details` WHERE `user_id` = '".$userId."'");

	return $result;	
}

function register_user_verification($user_id, $ver_code)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `users_verification`(`user_id`, `ver_code`, `status`) VALUES ('".$user_id."','".$ver_code."','0')");
	
	echo $result;

	return $result;	
}

function check_user_verification($user_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users_verification` WHERE `user_id` = '".$user_id."'");

	return $result;	
}

function update_user_verification($user_id, $status)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `users_verification` SET `status` = '".$status."' WHERE `user_id` = '".$user_id."'");
	
	return $result;
}

//CHANGE PASSWORD
function change_password($userId, $cfmpwd)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `users` SET `password` = '".$cfmpwd."' WHERE `user_id` = '".$userId."'");
	
	return $result;
}

// DEVELOPMENT
function get_AllDevelopment()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `developments` ORDER BY `development_id` DESC");

	return $result;	
}

function checkDevName($name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `developments` WHERE `name` = '".$name."'");

	return $result;	
}

function register_Development($name, $address, $nob)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `developments`(`name`, `address`, `nob`) VALUES ('$name','$address','$nob')");

	return $result;	
}

function get_DevelopmentID($name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `developments` WHERE `name` = '".$name."'");

	return $result;		
}

function display_dev($devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `developments` WHERE `development_id` = '".$devid."'") or die(mysqli_error($dbconnection));
	
	return $result;
}

function updateDev($name, $address, $devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `developments` SET `name` = '".$name."', `address` = '".$address."' WHERE `development_id` = '".$devid."'");

	return $result;
}

// BLOCK
function checkBlockName($name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `blocks` WHERE `name` = '".$name."'");

	return $result;	
}

function register_Block($development, $name, $noOfFloors)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `blocks`(`development_id`, `name`, `no_of_floors`) VALUES ('$development', '$name', '$noOfFloors')");

	return $result;	
}

function get_AllBlock()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT d.development_id, d.co_venturer_id, d.name as dname, d.address, b.block_id, b.name as bname, b.no_of_floors, b.no_of_units FROM `developments` as d INNER JOIN `blocks` as b ON d.development_id = b.development_id ORDER BY `block_id` DESC");

	return $result;	
}

function get_BlockID($development_id, $name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `blocks` WHERE `name` = '".$name."' AND `development_id` = '".$development_id."'");

	return $result;		
}

function displayAll_blk($devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `blocks` WHERE development_id = '".$devid."' ORDER BY block_id ASC");

	return $result;
}

function updateBlockInCharge($userId, $blockid, $role)
{
    global $dbconnection;
	
	if($role == "manager" || $role == "managersa")
	{
    $result = mysqli_query($dbconnection, "UPDATE `blocks` SET `manager_id` = '".$userId."' WHERE `block_id` = '".$blockid."'");
    }
    else if ($role == "staff")
    {
    $result = mysqli_query($dbconnection, "UPDATE `blocks` SET `staff_id` = '".$userId."' WHERE `block_id` = '".$blockid."'");
    }

	return $result;
}

// FLOOR
function register_Floor($development, $block, $name, $units, $noOfUnits)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `floors`(`development_id`, `block_id`, `name`, `units`, `no_of_units`) VALUES ('$development', '$block', '$name', '$units', '$noOfUnits')");

	return $result;	
}

function get_FloorID($development_id, $block_id, $name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `floors` WHERE `name` = '".$name."' AND `block_id` = '".$block_id."' AND `development_id` = '".$development_id."'");

	return $result;		
}

// UNIT
function register_Unit($development, $block, $floor, $name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `units`(`development_id`, `block_id`, `floor_id`, `name`) VALUES ('$development', '$block', '$floor', '$name')");

	return $result;	
}

function getUnitCount($development)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT count(*) as total from `units` WHERE `development_id` = '".$development."'");

	return $result;	
}

// CO-VENTURER
function get_allCoVenturer()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users` WHERE `role` = 'co-venturer'");

	return $result;	
}

//GENERAL FEEDBACK
function get_feedback($userId)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM developments INNER JOIN feedback ON developments.development_id = feedback.development_id AND developments.co_venturer_id = ".$userId." ORDER BY feedback.fb_id DESC");

	return $result;	
}

function get_allfeedback()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `feedback` ORDER BY `date` ASC");

	return $result;		
}

function insert_feedback($user_id, $report_id, $unit, $title, $des, $type, $date)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `feedback`(`user_id`, `report_id`, `unit_id`, `title`, `description`, `date`, `type`) VALUES ('$user_id', '$report_id', '$unit', '$title', '$des', '$date', '$type')");

	return $result;	
}

function feedback_reply($fbid, $reply, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `feedback` SET `reply` = '".$reply."', `reply_datetime` = '".$datetime."' WHERE `fb_id` = '".$fbid."'");

	return $result;
}

function delete_feed($feed_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `feedback` WHERE `fb_id` = '".$feed_id."'");

	return $result;
}

// VISITOR

function get_allvisitor()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `visitors` where 1 order by `visitor_id` DESC");

	return $result;		
}

function delete_visitor($deleteUid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `visitors` WHERE `visitor_id` = '".$deleteUid."'");

	return $result;		
}

function check_visitorphoto($f_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `visitors` WHERE `image` = '".$f_name."'");

	return $result;		
}

// CHARGES (MODIFIED)

function insert_managementdetails($charge_id, $date, $manage_fee, $late_pay, $amount, $paid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `management_charges`(`charges_id`, `date`, `manage_fee`, `late_pay`, `amount`, `paid`) VALUES  ('$charge_id', '$date', '$manage_fee', '$late_pay', '$amount', '$paid')");

	return $result;
}

function insert_managementc($unit_id, $type, $recurring_type, $start_date, $due, $late_charges, $file_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `charges`(`unit_id`, `type`, `recurring_type`, `start_date`, `due`, `late_charges`, `file_name`) VALUES  ('$unit_id', '$type', '$recurring_type', '$start_date', '$due', '$late_charges', '$file_name')");

	return $result;
}

function check_mcharges($f_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `charges` WHERE `file_name` = '".$f_name."'");

	return $result;	
}

function delete_managementc($deleteMCid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `management_charges` WHERE `mc_id` = '".$deleteMCid."'");

	return $result;		
}

function get_chargeID($unit, $type, $file)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT `charges_id` FROM `charges` WHERE `unit_id` = '".$unit."' AND `type` = '".$type."' AND `file_name` = '".$file."'");
	
	return $result;
}	

// ELECTRIC AND WATER BILLS
function get_allbills()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `bills` WHERE 1 ORDER BY `bills_id` DESC");

	return $result;
}

function insert_bill($unit_id, $type, $start_date, $due, $late_charges, $file_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `bills`(`unit_id`, `type`, `start_date`, `due`, `late_charges`, `file_name`) VALUES  ('$unit_id', '$type', '$start_date', '$due', '$late_charges', '$file_name')");

	return $result;
}

function check_bill($f_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `bills` WHERE `file_name` = '".$f_name."'");

	return $result;	
}

function delete_bill($deletebillid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `bills` WHERE `bills_id` = '".$deletebillid."'");

	return $result;		
}

function get_allbilldetails()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `billdetails` WHERE 1 ORDER BY `billdetails_id` ASC");

	return $result;
}

function insert_billdetails($date, $sum, $lp, $amount, $paid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `billdetails`(`date`, `sum`, `lp`, `amount`, `paid`) VALUES  ('$date', '$sum', '$lp', '$amount', '$paid')");

	return $result;
}

// WORK ORDER REQUEST
function insert_wor($report_id, $userId, $alltype, $datetime, $status)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `work_order`(`creator_id`, `report_id`, `datetime_created`, `category`, `status`) VALUES ('$userId', '$report_id', '$datetime', '$alltype', '$status')") or die(mysqli_error($dbconnection));

	return $result;
}

function get_allwor()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `work_order` WHERE 1");

	return $result;
}

function confirm_wor($worid, $status)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `work_order` SET `status` = '".$status."' WHERE `wo_id` = '".$worid."'");

	return $result;
}

function update_wor($worid, $chargeable)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE work_order SET chargeable = '$chargeable' WHERE wo_id = '$worid'");

	return $result;
}

function delete_wor($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `work_order` WHERE `wo_id` = '".$worid."'");

	return $result;
}

function get_wor($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `work_order` WHERE `wo_id` = '".$worid."'");

	return $result;
}

// ANNOUNCEMENT
function get_allannoucement()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `announcements` where 1 order by `ann_id` DESC");

	return $result;		
}

function insert_annoucement($title, $description, $audiences, $name, $date_created, $exp)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `announcements`(`title`, `description`, `audiences`, `photo`, `date_created`, `expiry_date`) VALUES ('$title', '$description', '$audiences', '$name', '$date_created', '$exp')");

	return $result;	
}

function delete_annoucement($deleteANNid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `announcements` WHERE `ann_id` = '".$deleteANNid."'");

	return $result;		
}

// INCIDENT
function get_allincident()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `incidents` where 1 order by `inci_id` DESC");

	return $result;		
}

function insert_incident($incident, $details, $action_tkn, $date_created)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `incidents`(`incident`, `details`, `action_tkn`, `date_created`) VALUES ('$incident', '$details', '$action_tkn', '$date_created')");

	return $result;	
}

function delete_incident($deleteINCIid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `incidents` WHERE `inci_id` = '".$deleteINCIid."'");

	return $result;		
}

// VISITOR PERMISSION //BERT
function confirm_visitor($statusUid,$statusState,$reason)
{
	global $dbconnection;
	mysqli_query($dbconnection, "UPDATE `visitors` 
								SET `status` = '".$statusState."',
								`reason` = '".$reason."'
								WHERE `visitor_id` = '".$statusUid."'");
	return;
}

//ACTIVITY LOG
function update_log_del($name, $classLog, $actLog, $datetime) {
	global $dbconnection;
	mysqli_query($dbconnection,	"INSERT INTO `activity_log`(`name`, `class`, `action`, `date_modified`) VALUES ('$name', '$classLog', '$actLog', '$datetime')");
	
	return;
}

function update_log_add($id, $idType, $name, $classLog, $actLog, $datetime) {
	global $dbconnection;
	mysqli_query($dbconnection,	"INSERT INTO `activity_log`(`$idType`, `id_type`, `name`, `class`, `action`, `date_modified`) VALUES ('$id', '$idType', '$name', '$classLog', '$actLog', '$datetime')");
	
	return;
}

function get_log()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `activity_log` WHERE 1 order by `date_modified` DESC");
	
	return $result;
}

function retrieve_name($id, $name_group, $id_group, $title)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `".$name_group."` WHERE `".$id_group."` = '".$id."'");
	
	while($row = mysqli_fetch_array($result)){
		$name = $row[$title];
	}
	
	return $name;
}

function get_allLog()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `activity_log` ORDER BY date_modified DESC");
	
	return $result;
}

function get_visitor($vid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `visitors` WHERE `visitor_id` = '".$vid."'");
	
	while($row = mysqli_fetch_array($result)){
		$name = $row['name'];
	}
	
	return $name;
}

function get_visitID($ic)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `visitors` WHERE `ic` = '".$ic."'");
	
	return $result;
}

function get_allUser()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users`");
	
	return $result;
}

//VIEW

function display_user($viewUid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `personal_details` JOIN `users` ON `personal_details`.user_id = `users`.user_id WHERE `users`.user_id = '".$viewUid."'") or die(mysqli_error($dbconnection));
	
	return $result;
}

function get_visitV($viewUid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `visitors` WHERE `visitor_id` = '".$viewUid."'");
	
	return $result;
}


//EDIT VISITOR
function edit_visitor($editUid, $unit, $name, $ic, $date_of_visit, $purpose_of_visit, $f_name, $entry, $cPlate, $remarks, $f_switch)
{
	global $dbconnection;
	
	if($f_switch == true)
	{
	$result = mysqli_query($dbconnection, "UPDATE `visitors` SET `unit_id` = '".$unit."', `name` = '".$name."', `ic` = '".$ic."', `datetime_of_visit` = '".$date_of_visit."', `visit_purpose` = '".$purpose_of_visit."', `image` = '".$f_name."', `car_plate` = '".$cPlate."',  `entry_point` = '".$entry."', `remarks` = '".$remarks."' WHERE `visitor_id` = '".$editUid."'");		
	}
	else
	{
	$result = mysqli_query($dbconnection, "UPDATE `visitors` SET `unit_id` = '".$unit."', `name` = '".$name."', `ic` = '".$ic."', `datetime_of_visit` = '".$date_of_visit."', `visit_purpose` = '".$purpose_of_visit."', `car_plate` = '".$cPlate."', `entry_point` = '".$entry."', `remarks` = '".$remarks."' WHERE `visitor_id` = '".$editUid."'");		
	}
}

//EDIT: UPDATE EMAIL
function update_userEmail($editUid, $email)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `users` SET `email` = '".$email."' WHERE `user_id` = '".$editUid."'");
	
	return $result;
}

//EMC
function register_emc($user_id, $EMCname, $EMCemail, $EMCaddress, $EMCphone)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `emergency_contact`(`user_id`, `name`, `email`, `address`, `phone`) VALUES ('".$user_id."', '".$EMCname."', '".$EMCemail."', '".$EMCaddress."', '".$EMCphone."')");
	
	return $result;
}

function display_emc($user_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `emergency_contact` WHERE `user_id` = '".$user_id."'");
	
	return $result;
}


function update_emc($editUid, $EMCemail, $EMCname, $EMCphone, $EMCaddress)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `emergency_contact` SET `name` = '".$EMCname."', `email` = '".$EMCemail."', `phone` = '".$EMCphone."', `address` = '".$EMCaddress."' WHERE `user_id` = '".$editUid."'");
	
	return $result;
}

//UPDATE USER FUNCTION UPDATED
function update_user($userId, $name, $ic, $phone, $address, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `personal_details` SET `name`= '".$name."',`ic`= '".$ic."',`phone`= '".$phone."',`address`= '".$address."', `date_created` = '".$datetime."' WHERE `user_id` = ".$userId."");

	return $result;	
}

//SERVICE CONTRACT
function get_allContract()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `service_contract` order by `end_date` ASC");

	return $result;		
}

function insert_contract($start_date, $end_date, $frequency, $name, $fileName, $description, $remarks, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `service_contract`(`start_date`, `end_date`, `frequency`, `name`, `document`, `description`, `remarks`, `date_updated`) VALUES ('$start_date', '$end_date', '$frequency', '$name', '$fileName', '$description', '$remarks', '$datetime')");

	return $result;	
}

/*function check_servicecontract($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `service_contract` WHERE `document` = '".$fileName."'");

	return $result;		
}*/

function delete_servicecontract($deleteSCid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `service_contract` WHERE `service_id` = '".$deleteSCid."'");

	return $result;		
}

//EDIT SERVICE CONTRACT
function edit_contract($editSCid, $start_date, $end_date, $name, $fileName, $description, $remarks, $datetime, $file_switch, $renewal, $new_start, $new_end)
{
	global $dbconnection;
	
	if($file_switch == true)
	{
	$result = mysqli_query($dbconnection, "UPDATE `service_contract` SET `start_date` = '".$start_date."', `end_date` = '".$end_date."', `name` = '".$name."', `document` = '".$fileName."', `description` = '".$description."', `remarks` = '".$remarks."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `service_id` = '".$editSCid."'");		
	}
	else
	{
	$result = mysqli_query($dbconnection, "UPDATE `service_contract` SET `start_date` = '".$start_date."', `end_date` = '".$end_date."', `name` = '".$name."', `description` = '".$description."', `remarks` = '".$remarks."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `service_id` = '".$editSCid."'");		
	}
}

//VIEW SERVICE CONTRACT

function get_SC($viewSCid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `service_contract` WHERE `service_id` = '".$viewSCid."'");
	
	return $result;
}

//INSURANCE
function get_allInsurance()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `insurance` order by `expiry_date` ASC");

	return $result;		
}

function insert_insurance($service_date, $expiry_date, $name, $vendor, $fileName, $remarks, $fee, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `insurance`(`service_date`, `expiry_date`, `name`, `vendor`, `document`, `remarks`, `fee`, `date_updated`) VALUES ('$service_date', '$expiry_date', '$name', '$vendor', '$fileName', '$remarks', '$fee', '$datetime')");

	return $result;	
}

/*function check_insurance($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `insurance` WHERE `document` = '".$fileName."'");

	return $result;		
}*/

function delete_insurance($deleteINSid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `insurance` WHERE `insurance_id` = '".$deleteINSid."'");

	return $result;		
}

//EDIT INSURANCE
function edit_insurance($editINSid, $service_date, $expiry_date, $name, $vendor, $fileName, $remarks, $fee, $datetime, $file_switch, $renewal, $new_start, $new_end)
{
	global $dbconnection;
	
	if($file_switch == true)
	{
	$result = mysqli_query($dbconnection, "UPDATE `insurance` SET `service_date` = '".$service_date."', `expiry_date` = '".$expiry_date."', `name` = '".$name."', `vendor` = '".$vendor."', `document` = '".$fileName."', `remarks` = '".$remarks."', `remarks` = '".$remarks."', `fee` = '".$fee."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `insurance_id` = '".$editINSid."'");		
	}
	else
	{
	$result = mysqli_query($dbconnection, "UPDATE `insurance` SET `service_date` = '".$service_date."', `expiry_date` = '".$expiry_date."', `name` = '".$name."', `vendor` = '".$vendor."', `remarks` = '".$remarks."', `fee` = '".$fee."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `insurance_id` = '".$editINSid."'");		
	}
}

//VIEW INSURANCE
function get_INS($viewINSid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `insurance` WHERE `insurance_id` = '".$viewINSid."'");
	
	return $result;
}

//AGREEMENT
function get_allAgreement()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `agreement` order by `expiry_date` ASC");

	return $result;		
}

function insert_agreement($start_date, $expiry_date, $name, $fileName, $description, $remarks, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `agreement`(`start_date`, `expiry_date`, `name`, `document`, `description`, `remarks`, `date_updated`) VALUES ('$start_date', '$expiry_date', '$name', '$fileName', '$description', '$remarks', '$datetime')");

	return $result;	
}

/*function check_agreement($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `agreement` WHERE `document` = '".$fileName."'");

	return $result;		
}*/

function delete_agreement($deleteAGRid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `agreement` WHERE `agreement_id` = '".$deleteAGRid."'");

	return $result;		
}

//EDIT AGREEMENT
function edit_agreement($editAGRid, $start_date, $expiry_date, $name, $fileName, $description, $remarks, $datetime, $file_switch, $renewal, $new_start, $new_end)
{
	global $dbconnection;
	
	if($file_switch == true)
	{
	$result = mysqli_query($dbconnection, "UPDATE `agreement` SET `start_date` = '".$start_date."', `expiry_date` = '".$expiry_date."', `name` = '".$name."', `document` = '".$fileName."', `description` = '".$description."', `remarks` = '".$remarks."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `agreement_id` = '".$editAGRid."'");		
	}
	else
	{
	$result = mysqli_query($dbconnection, "UPDATE `agreement` SET `start_date` = '".$start_date."', `expiry_date` = '".$expiry_date."', `name` = '".$name."', `description` = '".$description."', `remarks` = '".$remarks."', `date_updated` = '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `agreement_id` = '".$editAGRid."'");		
	}
}

//VIEW AGREEMENT
function get_AGR($viewAGRid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `agreement` WHERE `agreement_id` = '".$viewAGRid."'");
	
	return $result;
}

//HANDBOOK
function get_allHandbook()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `handbook` order by `hb_id` DESC");

	return $result;		
}

function insert_handbook($name, $fileName, $description, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `handbook`(`name`, `document`, `description`, `date_updated`) VALUES ('$name', '$fileName', '$description', '$datetime')");

	return $result;	
}

function check_handbook($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `handbook` WHERE `document` = '".$fileName."'");

	return $result;		
}

function delete_handbook($deleteHBid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `handbook` WHERE `hb_id` = '".$deleteHBid."'");

	return $result;		
}

//EDIT HANDBOOK
function edit_handbook($editHBid, $name, $fileName, $description, $datetime, $file_switch)
{
	global $dbconnection;
	
	if($file_switch == true)
	{
	$result = mysqli_query($dbconnection, "UPDATE `handbook` SET `name` = '".$name."', `document` = '".$fileName."', `description` = '".$description."', `date_updated` = '".$datetime."' WHERE `hb_id` = '".$editHBid."'");		
	}
	else
	{
	$result = mysqli_query($dbconnection, "UPDATE `handbook` SET `name` = '".$name."', `description` = '".$description."', `date_updated` = '".$datetime."' WHERE `hb_id` = '".$editHBid."'");		
	}
}

//VIEW HANDBOOK
function get_HB($viewHBid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `handbook` WHERE `hb_id` = '".$viewHBid."'");
	
	return $result;
}
//BOOK FACILITY

function book_facility($userId, $booker_name, $fac_id, $start, $end, $purpose)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `bookings`(`facility_id`, `booker_id`, `booker_name`, `start_datetime`, `end_datetime`, `purpose`) VALUES ('$fac_id', '$userId', '$booker_name', '$start', '$end', '$purpose')");
	
	return $result;
}

function get_allbooking()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `bookings` JOIN `facilities` ON `bookings`.facility_id = `facilities`.facility_id WHERE 1 ORDER BY `bookings`.booking_id");
	
	return $result;
}

function confirm_booking($statusUid,$statusState,$reason)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `bookings` SET `status` = '$statusState', `reason` = '$reason' WHERE `booking_id` = '$statusUid'");
	
	return $result;
}

function delete_booking($book_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `bookings` WHERE `booking_id` = '".$book_id."'");

	return $result;
}

//FACILITY
function get_allfac()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `facilities` ORDER BY `name`");
	
	return $result;
}

//TERM SERVICE / PPM


function get_ppm()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `mt_ppm` ORDER BY (CASE `intervals`
                                         WHEN 'Daily'
                                         THEN 1
                                         WHEN 'Weekly'
                                         THEN 2
                                         WHEN 'Monthly'
                                         THEN 3
                                         WHEN 'Quarterly'
                                         THEN 4
                                         WHEN 'Yearly'
                                         THEN 5
                                         END) ASC");

	return $result;
}

function get_one_ppm($ppmid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM mt_ppm WHERE mtpm_id = '$ppmid'");

	return $result;
}

function update_ppm($mt_id, $title, $service, $int, $str, $exp)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `mt_ppm` SET `term_ppm` = '".$title."', `service_vendor` = '".$service."', `intervals` = '".$int."', `schedule_date` = '".$str."', `due_date` = '".$exp."' WHERE `mtpm_id` = '".$mt_id."'");

	return $result;
}

function delete_ppm($deletePPM)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `mt_ppm` WHERE `mtpm_id` = '".$deletePPM."'");

	return $result;

}

function get_month_ppm($ppmid, $month)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM ppm_perform_log WHERE ppm_id = '$ppmid' AND month = '$month' ORDER BY date_of_visit");

	return $result;
}

function refresh_ppm($mt_id, $title, $service, $int, $str, $exp, $perform, $date_of_visit)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `mt_ppm` SET `term_ppm` = '".$title."', `service_vendor` = '".$service."', `intervals` = '".$int."', `schedule_date` = '".$str."', `due_date` = '".$exp."', `perform` = '".$perform."', `date_of_visit` = '".$date_of_visit."' WHERE `mtpm_id` = '".$mt_id."'");

	return $result;
}

//ADHOC
function insert_adhoc($title, $reference, $str, $exp, $perform, $complete, $remark)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `adhoc`(`description`, `refer_no`, `schedule_date`, `due_date`, `perform`, `date_complete`, `remarks`) VALUES ('$title', '$reference', '$str', '$exp', '$perform', '$complete', '$remark')");

	return $result;
}

function get_adhoc()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `adhoc` WHERE 1 ORDER BY `ad_id`");

	return $result;
}

function update_adhoc($ad_id, $title, $reference, $str, $exp, $perform, $complete, $remark)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `adhoc` SET `description` = '".$title."', `refer_no` = '".$reference."', `schedule_date` = '".$str."', `due_date` = '".$exp."', `perform` = '".$perform."', `date_complete` = '".$complete."', `remarks` = '".$remark."' WHERE `ad_id` = '".$ad_id."'");

	return $result;
}

function delete_adhoc($deleteAD)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `adhoc` WHERE `ad_id` = '".$deleteAD."'");

	return $result;
}

function perform($cat, $id, $date, $idType)
{
	global $dbconnection;

	if($cat == 'mt_ppm')
	{
		$result = mysqli_query($dbconnection, "UPDATE `$cat` SET `perform` = 'Yes', `date_of_visit` = '".$date."' WHERE `$idType` = '$id' ");
	} else if($cat == 'adhoc')
	{
		$result = mysqli_query($dbconnection, "UPDATE `$cat` SET `perform` = 'Yes', `date_complete` = '".$date."' WHERE `$idType` = '$id' ");
	}
	return $result;
}

//UPDATED INSERT VISITOR
function insert_visitor($unit, $name, $ic, $email, $datetime_of_visit, $purpose_of_visit, $f_name, $entry,  $cPlate, $remarks)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `visitors`(`unit_id`, `name`, `ic`, `email`, `datetime_of_visit`, `image`, `car_plate`, `visit_purpose`, `entry_point`, `remarks`) VALUES ('$unit', '$name', '$ic', '$email', '$datetime_of_visit', '$f_name', '$cPlate', '$purpose_of_visit', '$entry', '$remarks')");

	return $result;	
}


//SCHEDULED & PERIODIC MAINTENANCE
function get_allSPmaintenance()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `sp_maintenance` order by `expiry_date` ASC");

	return $result;		
}

function insert_maintenance($service_date, $expiry_date, $routine, $description, $remarks, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `sp_maintenance`(`service_date`, `expiry_date`, `routine`, `description`, `remarks`, `date_updated`) VALUES ('$service_date', '$expiry_date', '$routine', '$description', '$remarks', '$datetime')");

	return $result;	
}

/*function check_maintenance($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `sp_maintenance` WHERE `document` = '".$fileName."'");

	return $result;		
}*/

function delete_maintenance($deleteSPMid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `sp_maintenance` WHERE `spm_id` = '".$deleteSPMid."'");

	return $result;		
}

//EDIT SCHEDULED & PERIODIC MAINTENANCE
function edit_maintenance($editSPMid, $service_date, $expiry_date, $routine, $description, $remarks, $datetime, $renewal, $new_start, $new_end)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `sp_maintenance` SET `service_date`= '".$service_date."', `expiry_date`= '".$expiry_date."', `description`= '".$description."', `routine`= '".$routine."', `remarks`= '".$remarks."', `date_updated`= '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `spm_id` = '".$editSPMid."' ");

	return $result;	
}

//VIEW SCHEDULED & PERIODIC MAINTENANCE

function get_SPM($viewSPMid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `sp_maintenance` WHERE `spm_id` = '".$viewSPMid."'");
	
	return $result;
}

//LICENSE
function get_allLicense()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `license` order by `expiry_date` ASC");

	return $result;		
}

function insert_license($commence_date, $expiry_date, $description, $authority, $fee, $remarks, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `license`(`commence_date`, `expiry_date`, `description`, `authority`, `fee`, `remarks`, `date_updated`) VALUES ('$commence_date', '$expiry_date', '$description', '$authority', '$fee', '$remarks', '$datetime')");

	return $result;	
}

/*function check_license($fileName)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `license` WHERE `document` = '".$fileName."'");

	return $result;		
}*/

function delete_license($deleteLid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `license` WHERE `license_id` = '".$deleteLid."'");

	return $result;		
}

//EDIT LICENSE
function edit_license($editLid, $commence_date, $expiry_date, $description, $authority, $fee, $remarks, $datetime, $renewal, $new_start, $new_end)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `license` SET `commence_date`= '".$commence_date."', `expiry_date`= '".$expiry_date."', `description`= '".$description."', `authority`= '".$authority."', `fee`= '".$fee."', `remarks`= '".$remarks."', `date_updated`= '".$datetime."', `renewal` = '".$renewal."', `new_start` = '".$new_start."', `new_end` = '".$new_end."' WHERE `license_id` = '".$editLid."' ");

	return $result;	
}

//VIEW LICENSE

function get_License($viewLid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `license` WHERE `license_id` = '".$viewLid."'");
	
	return $result;
}

//SOON TO DUE
function get_alldues()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `due_soon` WHERE 1 ORDER BY `expiry_date` ASC");

	return $result;
}

function get_due($id, $type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM due_soon WHERE id_no = '$id' AND type = '$type'");

	return $result;
}

function add_due($idno, $title, $desc, $expiry, $type)
{
	global $dbconnection;
	// echo $idno .'<br />'. $title.'<br />'. $desc.'<br />'. $expiry.'<br />'. $type .'<br />';
	$query = "INSERT INTO due_soon (id_no, title, description, expiry_date, type) VALUES ('$idno', '$title','$desc','$expiry','$type')";

	return @mysqli_query($dbconnection, $query);
}

function remove_due($editID, $type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM due_soon WHERE id_no = '$editID' AND type = '$type'");

	return $result;
}

function get_alldues_op()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `due_soon_op` WHERE 1 ORDER BY `due_op_id` ASC");

	return $result;
}

function add_due_set($type)
{
	global $dbconnection;
	$getdue = get_due_set($type);

	if(mysqli_num_rows($getdue) < 1)
	{
		$result = mysqli_query($dbconnection, "INSERT INTO due_settings (type, days) VALUES ('$type', '0')");

		return $result;
	}
}

function update_due_set($type, $days)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE due_settings SET days = '$days' WHERE type = '$type'");

	return $result;
}

function get_due_set($type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM due_settings WHERE type = '$type'");
	
	return $result;
}


//REGISTER FACILITY
function add_facility($name, $cat, $floor, $req, $avail)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `facilities` (`floor_id`,`category`,`name`,`booking_required`,`availability`) VALUES ('$floor','$cat','$name','$req','$avail')");

	return $result;
}

//UPDATE FACILITY

function update_facility($edit_id, $name, $cat, $floor, $req, $avail)
{
	global $dbconnection;
	if($floor == "")
	{
		$result = mysqli_query($dbconnection, "UPDATE `facilities` SET `category` = '".$cat."', `name` = '".$name."', `booking_required` = '".$req."', `availability` = '".$avail."' WHERE `facility_id` = '".$edit_id."'");
	} else {
		$result = mysqli_query($dbconnection, "UPDATE `facilities` SET `floor_id` = '".$floor."', `category` = '".$cat."', `name` = '".$name."', `booking_required` = '".$req."', `availability` = '".$avail."' WHERE `facility_id` = '".$edit_id."'");
	}
	return $result;
}

//DELETE FACILITY
function delete_facility($delID)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `facilities` WHERE `facility_id` = '".$delID."'");

	return $result;
}

//UNIT USERS
function updateUnitUsers($user_id, $unitid, $role)
{
	global $dbconnection;
	if($role == 'owner')
	{
		$result = mysqli_query($dbconnection, "UPDATE `units` SET `owner_id` = '".$user_id."' WHERE `unit_id` = '".$unitid."'");
	} else if($role == 'tenant')
	{
		$result = mysqli_query($dbconnection, "UPDATE `units` SET `tenant_id` = '".$user_id."' WHERE `unit_id` = '".$unitid."'");
	}

	return $result;
}

function get_unitUser($uid, $role)
{
	global $dbconnection;
	if($role == 'owner')
	{
	$result = mysqli_query($dbconnection, "SELECT `personal_details`.`name`, `personal_details`.`ic`, `personal_details`.`phone`, `personal_details`.`address`, `users`.`email`, `emergency_contact`.`phone` AS e_phone, `emergency_contact`.`name` as e_name 
											FROM `users`, `personal_details`, `units`, `emergency_contact` 
											WHERE `personal_details`.`user_id` = `users`.`user_id` AND `users`.`user_id` = `units`.`owner_id` AND `personal_details`.`user_id` = `emergency_contact`.`user_id` AND `units`.`unit_id` = '".$uid."' ") or die(mysqli_error($dbconnection));
	} else if ($role == 'tenant')
	{
	$result = mysqli_query($dbconnection, "SELECT `personal_details`.`name`, `personal_details`.`ic`, `personal_details`.`phone`, `personal_details`.`address`, `users`.`email`, `emergency_contact`.`phone` AS e_phone, `emergency_contact`.`name` as e_name 
											FROM `users`, `personal_details`, `units`, `emergency_contact` 
											WHERE `personal_details`.`user_id` = `users`.`user_id` AND `users`.`user_id` = `units`.`tenant_id` AND `personal_details`.`user_id` = `emergency_contact`.`user_id` AND `units`.`unit_id` = '".$uid."' ") or die(mysqli_error($dbconnection));
	}
	return $result;
}

//SECURITY
function add_security($devid, $secName, $secCompany, $secDate)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `security`(`development_id`,`name`,`company`,`date_joined`) VALUES ('$devid','$secName','$secCompany','$secDate')");

	return $result;
}

function get_security($devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `security` WHERE `development_id` = '".$devid."' ORDER BY `security_id` ASC");

	return $result;
}

//GET ALL BLOCKS IN CHARGE
function get_blockInCharge($devid, $role)
{
	global $dbconnection;
	if($role == 'manager')
	{
	$result = mysqli_query($dbconnection, "SELECT `personal_details`.user_id, `personal_details`.phone, `personal_details`.name AS user_name, `blocks`.name as block_name FROM `personal_details` JOIN `blocks` ON `personal_details`.user_id = `blocks`.manager_id WHERE `blocks`.development_id = '".$devid."' ORDER BY `block_id` ASC");
	}
	else if ($role == 'staff')
	{
	$result = mysqli_query($dbconnection, "SELECT `personal_details`.user_id, `personal_details`.phone, `personal_details`.name AS user_name, `blocks`.name as block_name FROM `personal_details` JOIN `blocks` ON `personal_details`.user_id = `blocks`.staff_id WHERE `blocks`.development_id = '".$devid."' ORDER BY `block_id` ASC");
	}
	return $result;
}

//GET ALL UNITS
function get_blockunits($blk_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `units` WHERE `block_id` = '".$blk_id."' ORDER BY `unit_id` ASC");

	return $result;
}

//DISPLAY CERTAIN DEV, BLOCK, FLOOR, UNIT
function display_unit($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `units` WHERE `unit_id` = '".$unitid."'") or die(mysqli_error($dbconnection));
	
	return $result;
}

function display_blk($blkid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `blocks` WHERE `block_id` = '".$blkid."'") or die(mysqli_error($dbconnection));
	
	return $result;
}

function display_floors($blkid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `floors` WHERE `block_id` = '".$blkid."'") or die(mysqli_error($dbconnection));

	return $result;
}

function select_floor($floor_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `floors` WHERE `floor_id` = '".$floor_id."'");

	return $result;
}

function get_devFloors($dev_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `floors` WHERE `development_id` = '".$dev_id."'");

	return $result;
}

function get_userUnit($user_id, $user_type)
{
	global $dbconnection;

	if($user_type == 'owner')
	{
		$result = mysqli_query($dbconnection, "SELECT * FROM `units` WHERE `owner_id` = '".$user_id."'");
	}
	else if($user_type == 'tenant')
	{
		$result = mysqli_query($dbconnection, "SELECT * FROM `units` WHERE `tenant_id` = '".$user_id."'");
	}

	return $result;
}
//ASSET
function get_allAsset()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `assets` ORDER BY `a_id`");

	return $result;
}

function add_asset($asset_name, $asset_cat, $asset_loc, $asset_act, $asset_disp, $asset_serial, $asset_model, $asset_brand, $asset_depart, $asset_pic, $asset_alert, $asset_floor, $asset_code)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `assets`(`floor_id`, `name`, `category`, `location`, `activation`, `disposal`, `serial_no`, `model`, `brand`, `department`, `pic`, `alert`, `code`) 
											VALUES ('$asset_floor','$asset_name','$asset_cat','$asset_loc','$asset_act','$asset_disp','$asset_serial', '$asset_model', '$asset_brand', '$asset_depart', '$asset_pic', '$asset_alert', '$asset_code')");
	return $result;
}

function get_assetCat() 
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT DISTINCT `category`, `floor_id` FROM `assets` ORDER BY `category` ASC");

	return $result;
}

function get_asset($asset_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `assets` WHERE `a_id` = '".$asset_id."'");

	return $result;
}

function delete_asset($asset_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `assets` WHERE `a_id` = '".$asset_id."'");

	return $result;
}

function update_asset($asset_id, $asset_name, $asset_cat, $asset_loc, $asset_act, $asset_disp, $asset_serial, $asset_model, $asset_brand, $asset_depart, $asset_pic, $asset_alert, $asset_floor, $asset_code)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `assets` SET `name` = '".$asset_name."', `category` = '".$asset_cat."', `location` = '".$asset_loc."', `activation` = '".$asset_act."', `disposal` = '".$asset_disp."', `serial_no` = '".$asset_serial."', `model` = '".$asset_model."', `brand` = '".$asset_brand."', `department` = '".$asset_depart."', `pic` = '".$asset_pic."', `alert` = '".$asset_alert."', `floor_id` = '".$asset_floor."', `code` = '".$asset_code."' WHERE `a_id` = '".$asset_id."' ") or die(mysqli_error($dbconnection));

	return $result;
}



//GET BLOCKS IN CHARGE (PER USER)
function get_InChargeOf($uid, $role)
{
	global $dbconnection;
	if($role == ('manager'||'managersa'))
	{
		$result = mysqli_query($dbconnection, "SELECT `blocks`.`name` AS b_name, `developments`.`name` AS d_name FROM `blocks`, `developments` WHERE `blocks`.`development_id` = `developments`.`development_id` AND `blocks`.`manager_id` = '".$uid."'") or die(mysqli_error($dbconnection));
	}

	if($role == "staff")
	{
		$result = mysqli_query($dbconnection, "SELECT `blocks`.`name` AS b_name, `developments`.`name` AS d_name FROM `blocks`, `developments` WHERE `blocks`.`development_id` = `developments`.`development_id` AND `blocks`.`staff_id` = '".$uid."'") or die(mysqli_error($dbconnection));
	}

	return $result;
}

//LOCATION ABBREVIATION
function get_location()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `location_abbr` ORDER BY `location` ASC");

	return $result;
}

function get_oneloc($devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `location_abbr` WHERE `development_id` = '$devid' ORDER BY `location` ASC");

	return $result;
}

//REPORT
function insert_report($unit, $title, $des, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `reports`(`unit_id`, `title`, `description`, `datetime`) VALUES ('$unit', '$title', '$des', '$datetime')") or die(mysqli_error($dbconnection));

	return $result;
}

function get_reportid($datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `reports` WHERE `datetime` = '".$datetime."'") or die(mysqli_error($dbconnection));

	return $result;
}

function get_report($report_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `reports` WHERE `report_id` = '".$report_id."'");

	return $result;
}

function delete_report($report_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `reports` WHERE `report_id` = '".$report_id."'");

	return $result;
}
//SHARE UNITS
function update_unit($unitid, $total, $alloc, $type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `units` SET `total_area` = '".$total."', `allocated_area` = '".$alloc."', `ucat_id` = '".$type."' WHERE `unit_id` = '".$unitid."' ");

	return $result;
}

//GET UNITS OWNED

function get_units_owned($uid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT `developments`.`name` AS d_name, `blocks`.`name` AS b_name, `units`.`name` AS u_name, `units`.`unit_id`, `units`.`development_id`, `units`.`allocated_area`
											FROM `units` , `developments` , `blocks` 
											WHERE `units`.`owner_id` = '".$uid."' AND `units`.`development_id` = `developments`.`development_id` AND `units`.`block_id` = `blocks`.`block_id` ") or die(mysqli_error($dbconnection));

	return $result;
}

//GET UNITS TENANTED?

function get_units_tenant($uid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT `developments`.`name` AS d_name, `blocks`.`name` AS b_name, `units`.`name` AS u_name, `units`.`unit_id`, `units`.`development_id`, `units`.`allocated_area`
											FROM `units` , `developments` , `blocks` 
											WHERE `units`.`tenant_id` = '".$uid."' AND `units`.`development_id` = `developments`.`development_id` AND `units`.`block_id` = `blocks`.`block_id` ") or die(mysqli_error($dbconnection));

	return $result;
}

//GENERAL SOA
function get_allsoa($category, $idname)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `".$category."` order by `".$idname."` DESC");

	return $result;		
}
function update_soa($editId, $editCat, $editIdName, $unit, $amount, $datetime)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `".$editCat."` SET `unit_id` = '$unit', `amount` = '$amount', `datetime` = '$datetime' WHERE `".$editIdName."` = '$editId'");
	
	return $result;
}

//CHARGES_SETUP

function update_min($min, $cat, $type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO minimum_charge (cat_id, min_type, min_value) VALUES ('$cat','$type','$min')");

	return $result;
}

function get_minimum($catid, $type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM minimum_charge WHERE min_type = '".$type."' AND cat_id = '".$catid."'");

	return $result;
}

function del_min($catid, $type)
{
	global $dbconnection;
	mysqli_query($dbconnection, "DELETE FROM minimum_charge WHERE cat_id = '".$catid."' AND min_type = '".$type."'");
}

function del_echarge($cat_id)
{
	global $dbconnection;
	mysqli_query($dbconnection, "DELETE FROM electric_charge WHERE cat_id = '".$cat_id."'");
}

function electric_set($cat, $from, $to, $rate)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO electric_charge (cat_id, units_from, units_to, rate) 
												VALUES ('$cat', '$from', '$to', '$rate')
												");
	return $result;
}

function get_electric($catid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_charge WHERE cat_id = '$catid'");

	return $result;
}

function del_wcharge($cat_id)
{
	global $dbconnection;
	mysqli_query($dbconnection, "DELETE FROM water_charge WHERE cat_id = '".$cat_id."' ");
}

function water_set($cat, $from, $to, $rate)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO water_charge (cat_id, units_from, units_to, rate) VALUES ('$cat', '$from', '$to', '$rate')");

	return $result;
}

function get_water($catid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_charge WHERE cat_id = '$catid'");

	return $result;
}

//ELECTRIC BILLS
function get_meter_single($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills WHERE unit_id = '".$unitid."' ORDER BY eb_id DESC LIMIT 1");

	return $result;
}

function reg_electric_bills($unitid, $date, $due, $prev, $new, $cost, $from, $to, $min, $tax, $total)
{
	global $dbconnection;

	for($i = 0; $i < count($unitid); $i++)
	{
		if($new[$i] != '' && $prev[$i] != '')
		{
			$getinv = get_inv('electric bills');
            $inv = mysqli_fetch_assoc($getinv);

            $invno = $inv['last_inv'] + 1;

            update_last_inv('electric bills', $invno);

            $no = sprintf('%08d', $invno);

            $invoice = $inv['code'] . $no;

			if($cost[$i] < $min)
			{
				$cur = $min;
			} else {
				$cur = $cost[$i];
			}
			mysqli_query($dbconnection, "INSERT INTO electric_bills (unit_id, invoice_no, date, due_date, old_meter, new_meter, charge_amount, bill_from, bill_to, tax_id, total) VALUES ('$unitid[$i]','$invoice','$date','$due','$prev[$i]','$new[$i]','$cur', '$from', '$to', '$tax', '$total[$i]')");
		}
	}

}

function get_all_bill()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT DISTINCT unit_id FROM electric_bills ORDER BY eb_id DESC") or die(mysqli_error($dbconnection));

	return $result;
}

function get_unit_bill($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills WHERE unit_id = '".$unitid."' ORDER BY eb_id ASC");

	return $result;
}

function delete_electric($ebid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM electric_bills WHERE eb_id = '".$ebid."'");

	return $result;
}

function get_single_ebill($id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills WHERE eb_id = '$id'");

	return $result;
}

function get_allelectric()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills");

	return $result;
}

//WATER BILLS
function get_water_single($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills WHERE unit_id = '".$unitid."' ORDER BY wb_id DESC LIMIT 1");

	return $result;
}

function reg_water_bills($unitid, $date, $due, $prev, $new, $cost, $from, $to, $min, $tax, $total)
{
	global $dbconnection;

	for($i = 0; $i < count($unitid); $i++)
	{
		if($new[$i] != '' && $prev[$i] != '')
		{
			$getinv = get_inv('water bills');
            $inv = mysqli_fetch_assoc($getinv);

            $invno = $inv['last_inv'] + 1;

            update_last_inv('water bills', $invno);

            $no = sprintf('%08d', $invno);

			$invoice = $inv['code'] . $no;
			
			if($cost[$i] < $min)
			{
				$cur = $min;
			} else {
				$cur = $cost[$i];
			}
			mysqli_query($dbconnection, "INSERT INTO water_bills (unit_id, invoice_no, date, due_date, old_meter, new_meter, charge_amount, bill_from, bill_to, tax_id, total) VALUES ('$unitid[$i]','$invoice','$date','$due','$prev[$i]','$new[$i]','$cur', '$from', '$to', '$tax', '$total[$i]')");
		}
	}

}

function get_all_water()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT DISTINCT unit_id FROM water_bills ORDER BY wb_id DESC") or die(mysqli_error($dbconnection));

	return $result;
}

function get_unit_water($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills WHERE unit_id = '".$unitid."' ORDER BY wb_id ASC");

	return $result;
}

function delete_water($wbid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM water_bills WHERE wb_id = '".$wbid."'");

	return $result;
}

function get_single_wbill($id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills WHERE wb_id = '$id'");

	return $result;
}

function get_allwbills()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills");

	return $result;
}

//INVOICE & TAX SETTINGS

function get_inv_set()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM invoice_settings");

	return $result;
}

function update_inv_set($id, $code, $trail, $example)
{
	global $dbconnection;

	for($i = 0; $i < count($id); $i++)
	{
		mysqli_query($dbconnection, "UPDATE invoice_settings SET code = '".$code[$i]."', width = '".$trail[$i]."', example = '".$example[$i]."' WHERE iset_id = '".$id[$i]."'");
	}
}

function get_tax_set()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM tax_settings");

	return $result;
}

function update_tax_set($name, $code, $rate)
{
	global $dbconnection;
	
	for($i = 0; $i < count($name); $i++)
	{
		mysqli_query($dbconnection, "INSERT INTO tax_settings (name, code, rate) VALUES ('$name[$i]','$code[$i]','$rate[$i]')");
	}
}

function truncate_tax()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "TRUNCATE TABLE tax_settings");

	return $result;
}

function get_inv($type)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM invoice_settings WHERE name = '".$type."'");

	return $result;
}

function update_last_inv($type, $no)
{
	global $dbconnection;
	mysqli_query($dbconnection, "UPDATE invoice_settings SET last_inv = '".$no."' WHERE name = '".$type."'");
}


//MANAGEMENT CHARGES & SINKING FUNDS

function register_management($unitid, $start, $due, $tax, $amount, $total, $recur)
{
	global $dbconnection;
	for($i = 0; $i < count($unitid); $i++)
	{
		if($amount[$i] != '')
		{
			$result = mysqli_query($dbconnection, "INSERT INTO management_charges 
														(unit_id, invoice_start, due, amount, tax_id, total, recur)
													VALUES 
														('$unitid[$i]', '$start', '$due', '$amount[$i]', '$tax', '$total[$i]', '$recur')
													ON DUPLICATE KEY UPDATE
														invoice_start = VALUES(invoice_start),
														due = VALUES(due),
														amount = VALUES(amount),
														tax_id = VALUES(tax_id),
														total = VALUES(total),
														recur = VALUES(recur)");
		}
	}

	return $result;
}

function get_single_management($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM management_charges WHERE unit_id = '".$unitid."'");

	return $result;
}

function get_all_management()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM management_charges ORDER BY mc_id DESC");

	return $result;
}

function get_unit_management($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM charges WHERE unit_id = '".$unitid."'");

	return $result;
}

function get_allcharges()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM charges");

	return $result;
}


function register_sinking($unitid, $start, $due, $tax, $amount, $total, $recur)
{
	global $dbconnection;
	for($i = 0; $i < count($unitid); $i++)
	{
		if($amount[$i] != '')
		{
			$result = mysqli_query($dbconnection, "INSERT INTO sinking_funds
														(unit_id, invoice_start, due, amount, tax_id, total, recur)
													VALUES 
														('$unitid[$i]', '$start', '$due', '$amount[$i]', '$tax', '$total[$i]', '$recur')
													ON DUPLICATE KEY UPDATE
														invoice_start = VALUES(invoice_start),
														due = VALUES(due),
														amount = VALUES(amount),
														tax_id = VALUES(tax_id),
														total = VALUES(total),
														recur = VALUES(recur)");
		}
	}

	return $result;
}

function get_single_sinking($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM sinking_funds WHERE unit_id = '".$unitid."'");

	return $result;
}

function get_all_sinking()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM sinking_funds ORDER BY sf_id DESC");

	return $result;
}

function get_unit_sinking($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM funds WHERE unit_id = '".$unitid."'");

	return $result;
}

function add_charges($invoice, $unitid, $invdate, $due, $from, $to, $amount, $tax, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO charges (invoice_no, unit_id, invoice_date, due, date_from, date_to, amount, tax_id, total) VALUES ('$invoice', '$unitid', '$invdate', '$due', '$from', '$to', '$amount', '$tax', '$total')");

	return $result;
}

function add_funds($invoice, $unitid, $invdate, $due, $from, $to, $amount, $tax, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO funds (invoice_no, unit_id, invoice_date, due, date_from, date_to, amount, tax_id, total) VALUES ('$invoice', '$unitid', '$invdate', '$due', '$from', '$to', '$amount', '$tax', '$total')");

	return $result;
}

function update_charges_date($unitid, $new_inv)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE management_charges SET invoice_start = '".$new_inv."' WHERE unit_id = '".$unitid."'");

	return $result; 
}

function update_funds_date($unitid, $new_inv)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE sinking_funds SET invoice_start = '".$new_inv."' WHERE unit_id = '".$unitid."'");

	return $result; 
}

function delete_sinkingf($sfid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM sinking_funds WHERE sf_id = '$sfid'");

	return $result;
}

function get_allfunds()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM funds");

	return $result;
}


//UNIT CAT & LOCATION ABBR

function get_ucat()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM ucategory_abbr ORDER BY ucat_id ASC");

	return $result;
}

function get_one_ucat($ucatid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM ucategory_abbr WHERE ucat_id = '".$ucatid."'");

	return $result;
}

function truncate_ucat()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "TRUNCATE TABLE ucategory_abbr");

	return $result;
}

function update_ucat($name, $code)
{
	global $dbconnection;
	for($i = 0; $i < count($name); $i++)
	{
		if($name[$i] != '' && $code[$i] != '')
		{
			$result = mysqli_query($dbconnection, "INSERT INTO ucategory_abbr (name, code) VALUES ('$name[$i]','$code[$i]')") or die(mysqli_error($dbconnection));
		}
	}

	return $result;
}

//ASSESSMENTS
function register_assessments($unitid, $due, $tax, $amount, $total, $from, $to)
{
	global $dbconnection;
	for($i = 0; $i < count($unitid); $i++)
	{
		if($amount[$i] != '')
		{
			mysqli_query($dbconnection, "INSERT INTO assessments (unit_id, due, tax_id, amount, total, date_from, date_to) 
										VALUES ('$unitid[$i]', '$due', '$tax', '$amount[$i]', '$total[$i]', '$from', '$to') 
										ON DUPLICATE KEY UPDATE
											due = VALUES(due),
											amount = VALUES(amount),
											tax_id = VALUES(tax_id),
											total = VALUES(total),
											date_from = VALUES(date_from),
											date_to = VALUES(date_to)");
		}
		
	}
	
}

function get_assessments()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assessments ORDER BY as_id ASC");

	return $result;
}

function get_single_assessment($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assessments WHERE unit_id = '".$unitid."'");

	return $result;
}

function generate_assessment($invoice, $unit_id, $today, $due, $from, $to, $amt, $tax, $total) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO assess_list (invoice_no, unit_id, invoice_date, due, date_from, date_to, amount, tax_id, total) VALUES ('$invoice', '$unit_id', '$today', '$due', '$from', '$to', '$amt', '$tax', '$total')");

	return $result;
}

function update_assessment($unit_id, $newfrom, $newto, $newdue) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE assessments SET date_from = '$newfrom', date_to = '$newto', due = '$newdue' WHERE unit_id = '$unit_id'");

	return $result;
}

function view_assess_fees($unit_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assess_list WHERE unit_id = '$unit_id'");

	return $result;
}

function get_assess_inv($aid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assess_list WHERE alist_id = '$aid'");

	return $result;
}

function get_allassess()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assess_list");

	return $result;
}

//FIRE INSURANCE
function register_fire($unitid, $due, $tax, $amount, $total, $from, $to)
{
	global $dbconnection;
	for($i = 0; $i < count($unitid); $i++)
	{
		if($amount[$i] != '')
		{
			mysqli_query($dbconnection, "INSERT INTO fire_insurance (unit_id, due, tax_id, amount, total, date_from, date_to) 
											VALUES ('$unitid[$i]', '$due', '$tax', '$amount[$i]', '$total[$i]', '$from', '$to') 
											ON DUPLICATE KEY UPDATE
												due = VALUES(due),
												amount = VALUES(amount),
												tax_id = VALUES(tax_id),
												total = VALUES(total),
												date_from = VALUES(date_from),
												date_to = VALUES(date_to)");
		}
		
	}
	
}

function get_fire()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_insurance ORDER BY fire_id ASC");

	return $result;
}

function get_single_fire($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_insurance WHERE unit_id = '".$unitid."'");

	return $result;
}

function generate_fire_invoice($invoice, $unit_id, $today, $due, $from, $to, $amt, $tax, $total) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO fire_list (invoice_no, unit_id, invoice_date, due, date_from, date_to, amount, tax_id, total) VALUES ('$invoice', '$unit_id', '$today', '$due', '$from', '$to', '$amt', '$tax', '$total')");

	return $result;
}

function update_fire($unit_id, $newfrom, $newto, $newdue) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE fire_insurance SET date_from = '$newfrom', date_to = '$newto', due = '$newdue' WHERE unit_id = '$unit_id'");

	return $result;
}

function view_fire_fees($unit_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_list WHERE unit_id = '$unit_id'");

	return $result;
}

function get_fire_inv($fid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_list WHERE flist_id = '$fid'");

	return $result;
}

function get_allfire()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_list");

	return $result;
}


//QUIT RENT
function register_quitrent($unitid, $due, $tax, $amount, $total, $from, $to)
{
	global $dbconnection;
	for($i = 0; $i < count($unitid); $i++)
	{
		if($amount[$i] != '')
		{
			mysqli_query($dbconnection, "INSERT INTO quit_rent (unit_id, due, tax_id, amount, total, date_from, date_to) 
											VALUES ('$unitid[$i]', '$due', '$tax', '$amount[$i]', '$total[$i]', '$from', '$to') 
											ON DUPLICATE KEY UPDATE
												due = VALUES(due),
												amount = VALUES(amount),
												tax_id = VALUES(tax_id),
												total = VALUES(total),
												date_from = VALUES(date_from),
												date_to = VALUES(date_to)");
		}
		
	}
	
}

function get_quit()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM quit_rent ORDER BY qrent_id ASC");

	return $result;
}

function get_single_quit($unitid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM quit_rent WHERE unit_id = '".$unitid."'");

	return $result;
}

function generate_qrent($invoice, $unit_id, $today, $due, $from, $to, $amt, $tax, $total) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO qrent_list (invoice_no, unit_id, invoice_date, due, date_from, date_to, amount, tax_id, total) VALUES ('$invoice', '$unit_id', '$today', '$due', '$from', '$to', '$amt', '$tax', '$total')");

	return $result;
}

function update_qrent($unit_id, $newfrom, $newto, $newdue) {
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE quit_rent SET date_from = '$newfrom', date_to = '$newto', due = '$newdue' WHERE unit_id = '$unit_id'");

	return $result;
}

function view_qrent_fees($unit_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM qrent_list WHERE unit_id = '$unit_id'");

	return $result;
}

function get_qrent_inv($qid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM qrent_list WHERE qlist_id = '$qid'");

	return $result;
}

function get_allqrent()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM qrent_list");

	return $result;
}



//DELETE DEVELOPMENT
function delete_dev($devid)
{
	global $dbconnection;
	$query  = "DELETE FROM units WHERE development_id = '".$devid."';";
	$query .= "DELETE FROM floors WHERE development_id = '".$devid."';";
	$query .= "DELETE FROM blocks WHERE development_id = '".$devid."';";
	$query .= "DELETE FROM developments WHERE development_id = '".$devid."';";

	mysqli_multi_query($dbconnection, $query);
}

//MANAGEMENT BODY
function reg_manageBody($devid, $name, $add)
{
	global $dbconnection;
	mysqli_query($dbconnection, "INSERT INTO manage_body (development_id, name, address, email, phone, fax) VALUES ('$devid','$name','$add', '', '', '')");
}

function get_managebody($devid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM manage_body WHERE development_id = '".$devid."'");

	return $result;
}

//RECEIVE PAYMENT
function receive_pay($id, $type, $idname)
{
	global $dbconnection;
	mysqli_query($dbconnection, "UPDATE $type SET status = 'complete' WHERE $idname = '$id'");
}

//CONT MANAGEMENT
function get_single_charge($charge_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM charges WHERE charge_id = '".$charge_id."'");

	return $result;
}

//GET 1 FLOOR
function get_floor($floorid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM floors WHERE floor_id = '".$floorid."'");

	return $result;
}

//Late Payment Charges

function getLPC($unit_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM lpc_set WHERE unit_id = '$unit_id'");

	return $result;
}

function regLPC($unit_id)
{
	global $dbconnection;

	$query0 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Fire Insurance')";
	$query1 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Quit Rent')";
	$query2 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Assessments')";
	$query3 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Management Charges')";
	$query4 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Sinking Funds')";
	$query5 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Electric Bill')";
	$query6 = "INSERT INTO lpc_set (unit_id, name) VALUES ('$unit_id', 'Water Bill')";

	mysqli_query($dbconnection, $query0);
	mysqli_query($dbconnection, $query1);
	mysqli_query($dbconnection, $query2);
	mysqli_query($dbconnection, $query3);
	mysqli_query($dbconnection, $query4);
	mysqli_query($dbconnection, $query5);
	mysqli_query($dbconnection, $query6);
}

function updateLPC($from, $to, $name, $rate, $minimum, $stat)
{
	global $dbconnection;

	$result = mysqli_query($dbconnection, "UPDATE lpc_set SET interest_rate = '$rate', minimum = '$minimum', status = '$stat' WHERE name = '$name' AND unit_id BETWEEN '$from' AND '$to'");

	return $result;
}

function getCatLPC($unit_id, $category)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM lpc_set WHERE unit_id = '$unit_id' AND name = '$category'");

	return $result;
}

function update_lpc_charge($charge_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE charges SET lpc = '$lpcamount', total = '$total' WHERE charge_id = '$charge_id'");

	return $result;
}

function update_lpc_funds($funds_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE funds SET lpc = '$lpcamount', total = '$total' WHERE funds_id = '$funds_id'");

	return $result;
}

function update_lpc_fire($flist_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE fire_list SET lpc = '$lpcamount', total = '$total' WHERE flist_id = '$flist_id'");

	return $result;
}

function update_lpc_assess($alist_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE assess_list SET lpc = '$lpcamount', total = '$total' WHERE alist_id = '$alist_id'");

	return $result;
}

function update_lpc_qrent($qlist_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE qrent_list SET lpc = '$lpcamount', total = '$total' WHERE qlist_id = '$qlist_id'");

	return $result;
}

function update_lpc_electric($eb_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE electric_bills SET lpc = '$lpcamount', total = '$total' WHERE eb_id = '$eb_id'");

	return $result;
}

function update_lpc_water($wb_id, $lpcamount, $total)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE water_bills SET lpc = '$lpcamount', total = '$total' WHERE wb_id = '$wb_id'");

	return $result;
}

//REPORT & SUMMARY

function get_dev_charges($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM charges JOIN units on charges.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_funds($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM funds JOIN units on funds.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_fire($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_list JOIN units on fire_list.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_qrent($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM qrent_list JOIN units on qrent_list.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_assess($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assess_list JOIN units on assess_list.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_electric($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills JOIN units on electric_bills.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_dev_water($dev)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills JOIN units on water_bills.unit_id = units.unit_id WHERE units.development_id = '$dev'");

	return $result;
}

function get_block_charges($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM charges JOIN units on charges.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_funds($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM funds JOIN units on funds.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_fire($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM fire_list JOIN units on fire_list.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_qrent($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM qrent_list JOIN units on qrent_list.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_assess($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM assess_list JOIN units on assess_list.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_electric($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM electric_bills JOIN units on electric_bills.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

function get_block_water($block)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM water_bills JOIN units on water_bills.unit_id = units.unit_id WHERE units.block_id = '$block'");

	return $result;
}

//Functions for change password
function get_user_info($userid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `users` WHERE `user_id` = '".$userid."'");

	return $result;	
}

function change_pword($userid, $newpword, $status)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `users` SET password='$newpword', status='$status' WHERE `user_id` = '".$userid."'");

	return $result;	
}

//Function for checking notice/circular image
function check_noticephoto($f_name)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `announcements` WHERE `image` = '".$f_name."'");

	return $result;		
}

//MAINTENANCE RECORDS
function get_allMR()
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `maintenance_records` ORDER BY `mr_id`");

	return $result;
}

function add_mr($mr_name, $mr_category, $mr_floor, $mr_loc, $mr_code, $mr_detail, $mr_ahr_ref, $mr_completion_date, $mr_warranty_exp)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `maintenance_records` (`name`, `category`, `floor_id`, `location`, `location_code`, `mr_details`, `ahr_ref`, `completion_date`, `warranty_exp`) VALUES ('$mr_name', '$mr_category', '$mr_floor', '$mr_loc', '$mr_code', '$mr_detail', '$mr_ahr_ref', '$mr_completion_date', '$mr_warranty_exp')");
	return $result;
}


function delete_mr($mr_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM `maintenance_records` WHERE `mr_id` = '".$mr_id."'");

	return $result;
}

function get_mr($mr_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM `maintenance_records` WHERE `mr_id` = '".$mr_id."'");

	return $result;
}

//Additional Maintenance Records function
function update_mr($mr_id, $mr_name, $mr_category, $mr_floor, $mr_loc, $mr_code, $mr_detail, $mr_ahr_ref, $mr_completion_date, $mr_warranty_exp) 
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE `maintenance_records` 
		SET `name` = '".$mr_name."', 
			`category` = '".$mr_category."', 
			`floor_id` = '".$mr_floor."', 
			`location` = '".$mr_loc."', 
			`location_code` = '".$mr_code."', 
			`mr_details` = '".$mr_detail."', 
			`ahr_ref` = '".$mr_ahr_ref."', 
			`completion_date` = '".$mr_completion_date."', 
			`warranty_exp` = '".$mr_warranty_exp."' 

			WHERE `mr_id` = '".$mr_id."' ");

	return $result;
}

//UPDATE THIS

function insert_ppm($title, $service, $int, $str, $exp, $perform, $visit, $remark, $alert)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO `mt_ppm`(`term_ppm`, `service_vendor`, `intervals`, `schedule_date`, `due_date`, `perform`, `date_of_visit`, `remarks`, `days_due`) VALUES ('$title', '$service', '$int', '$str', '$exp', '$perform', '$visit', '$remark', '$alert')");

	return $result;
}

function search_ppm($filter, $item)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM mt_ppm WHERE $filter LIKE '%$item%' ORDER BY (CASE `intervals`
                                         WHEN 'Daily'
                                         THEN 1
                                         WHEN 'Weekly'
                                         THEN 2
                                         WHEN 'Monthly'
                                         THEN 3
                                         WHEN 'Quarterly'
                                         THEN 4
                                         WHEN 'Yearly'
                                         THEN 5
                                         END) ASC");

	return $result;
}

function getWorDetails($worid) 
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM work_order WHERE wo_id = '$worid'");

	return $result;
}

//WOR CHARGES

function getWorCharges($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM work_order_charges WHERE wo_id = '$worid'");

	return $result;
}

function add_wor_charge_form($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO work_order_charges (wo_id, chargeman, technician_a, technician_b, plumber, tenant_parts, management_parts, materials) VALUES ($worid, 0, 0, 0, 0, 0, '', '')");

	return $result;
}

function update_wor_charges($chargeman, $technician_a, $tenant_parts, $parts, $technician_b, $plumber, $materials, $worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE work_order_charges SET chargeman = '$chargeman', technician_a = '$technician_a', technician_b = '$technician_b', plumber = '$plumber', tenant_parts = '$tenant_parts', management_parts = '$parts', materials = '$materials' WHERE wo_id = '$worid'");

	return $result;
}

function add_attendee($name, $start_date, $end_date, $start_time, $end_time, $worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO wor_attendees (attendee, start_date, end_date, start_time, end_time, wo_id) VALUES ('$name', '$start_date', '$end_date', '$start_time', '$end_time', '$worid')");

	return $result;
}

function get_attendee($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM wor_attendees WHERE wo_id = '$worid'");

	return $result;
}


//Specific MR Search
function get_asset_mr($assetid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM maintenance_records WHERE name = '$assetid'");

	return $result;
}

//permissions
function updatePermissions($viewUid, $registration, $operation, $monitoring, $communication, $account, $setting)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO access_control (user_id, registration, operation, monitoring, communication, account, setting) 
											VALUES ('$viewUid', '$registration', '$operation', '$monitoring', '$communication', '$account', '$setting')
											ON DUPLICATE KEY UPDATE
											registration = VALUES(registration),
											operation = VALUES(operation),
											monitoring = VALUES(monitoring),
											communication = VALUES(communication),
											account = VALUES(account),
											setting = VALUES(setting)
											");

	return $result;
}

function getPermissions($userid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM access_control WHERE user_id = '$userid'");

	return $result;
}

function assign_password($uid, $password)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE users SET password = '$password' WHERE user_id = '$uid'");

	return $result;
}

//DUE

function deletedue($dueid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM due_soon WHERE due_id = '$dueid'");

	return $result;
}

//PPM PERFORM

function delete_ppm_log_month($ppm_id, $month)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "DELETE FROM ppm_perform_log WHERE ppm_id = '$ppm_id' AND month = '$month'");

	return $result;
}

function add_perform_log($ppm_id, $schedule, $due, $month, $visit, $perform, $remarks)
{
	global $dbconnection;
	for($i = 0; $i < count($visit); $i++)
	{
		if($visit[$i] != "")
		{
			$result = mysqli_query($dbconnection, "INSERT INTO ppm_perform_log (ppm_id, schedule_date, due_date, month, date_of_visit, perform, remarks) 
													VALUES ('$ppm_id', '$schedule', '$due', '$month', '$visit[$i]', '$perform[$i]', '$remarks[$i]')");
		}
	}

	return $result;
}

function close_log($ppm_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE mt_ppm SET perform = 'Yes' WHERE mtpm_id = '$ppm_id'");

	return $result;
}

function reopen_log($ppm_id)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "UPDATE mt_ppm SET perform = 'No' WHERE mtpm_id = '$ppm_id'");

	return $result;
}

//communications permissions
function updateComPermissions($viewUid, $facility_bookings, $feedbacks, $work_order_requests, $visitor, $handbook, $notice)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO access_control_com (user_id, facility_bookings, feedbacks, work_order_requests, visitor, handbook, notice) 
											VALUES ('$viewUid', '$facility_bookings', '$feedbacks', '$work_order_requests', '$visitor', '$handbook', '$notice')
											ON DUPLICATE KEY UPDATE
											facility_bookings = VALUES(facility_bookings),
											feedbacks = VALUES(feedbacks),
											work_order_requests = VALUES(work_order_requests),
											visitor = VALUES(visitor),
											handbook = VALUES(handbook),
											notice = VALUES(notice)
											");

	return $result;
}

function getComPermissions($userid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM access_control_com WHERE user_id = '$userid'");

	return $result;
}

//work order requests details (request side)
function insert_work_order_detail($wo_id, $location, $detail_of_works, $requested_by, $requested_date, $attended_by, $attended_date)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO work_order_detail (wo_id, location, detail_of_works, requested_by, requested_date, attended_by, attended_date) VALUES ('$wo_id', '$location', '$detail_of_works', '$requested_by', '$requested_date', '$attended_by', '$attended_date')");

	return $result;
}

function insert_wor_respond($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "INSERT INTO work_order_respond (wo_id, action_taken, incident_report) VALUES ($worid, '', '')");

	return $result;
}

function get_wor_respond($worid)
{
	global $dbconnection;
	$result = mysqli_query($dbconnection, "SELECT * FROM work_order_respond WHERE wo_id = '$worid'");

	return $result;
}
<?php
    include '../db.php';
	$menu=$_REQUEST['menu'];
	$id=$_REQUEST['id'];
	$time=$_REQUEST['time'];
	$day=$_REQUEST['day'];
	
	$query=mysqli_query($con,"INSERT INTO `menu_master`(`mm_id`,`mm_day`, `mm_time`, `mm_menu`) VALUES ('".$id."','".$day."','".$time."','".$menu."')") or                            die(mysqli_error($con));
	if($query)
	{
		$response['success']=200;
		$response['message']="Menu Inserted";
	}
	else
	{
		$response['success']=201;
		$response['message']="Not Inserted";
	}
	echo json_encode($response);
?>
<?php
include '../db.php';
	$id=$_REQUEST['id'];
	$parent=$_REQUEST['parent'];
	$status=$_REQUEST['status'];
	
	$query=mysqli_query($con,"UPDATE `leave_report` SET `lr_parent`='".$parent."', `lr_parstat`='".$status."' WHERE `lr_id`='".$id."'") or die(mysqli_error($con));
	$response=array();
	if($query)
	{
		$response['success']=200;
		$response['message']="Leave Approved";
	}
	else
	{
		$response['success']=201;
		$response['message']="Not Approved";
	}
	echo json_encode($response);
?>
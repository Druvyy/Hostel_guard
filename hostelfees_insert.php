<?php
include '../db.php';
	$id=$_REQUEST['id'];
	$hfid=$_REQUEST['hfid'];
	$status=$_REQUEST['status'];
	
	$query=mysqli_query($con,"INSERT INTO `hostel_fees`(`hf_id`, `sm_id`, `hf_regdate`, `hf_status`) VALUES ('".$hfid."','".$id."',now(),'".$status."')") or die(mysqli_error($con));
	$response=array();
	if($query)
	{
		$response['success']=200;
		$response['message']="Fees Paid";
	}
	else
	{
		$response['success']=201;
		$response['message']="Not Paid";
	}
	echo json_encode($response);
?>
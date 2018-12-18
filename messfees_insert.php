<?php
include '../db.php';
	$id=$_REQUEST['id'];
	$mfid=$_REQUEST['mfid'];
	$month=$_REQUEST['month'];
	$status=$_REQUEST['status'];
	
	$query=mysqli_query($con,"INSERT INTO `mess_fees`(`mf_id`, `sm_id`, `mf_regdate`, `mf_month`, `mf_status`) VALUES ('".$mfid."','".$id."',now(),'".$month."','".$status."')") or die(mysqli_error($con));
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
<?php
include '../db.php';
	$id=$_REQUEST['id'];
	$month=$_REQUEST['month'];
	
	$query=mysqli_query($con,"UPDATE `mess_fees` SET `mf_month`= '".$month."' WHERE `sm_id`='".$id."'") or die(mysqli_error($con));
	$response=array();
	if($query)
	{
		$response['success']=200;
		$response['message']="updated";
	}
	else
	{
		$response['success']=201;
		$response['message']="Not updated";
	}
	echo json_encode($response);
?>
<?php 
	include '../db.php';
	$id=$_REQUEST['id'];
	$reason=$_REQUEST['reason'];
	$dtfrm=date("Y-m-d", strtotime($_REQUEST['dtfrm']));
	$dtto=date("Y-m-d", strtotime($_REQUEST['dtto']));
	
	$query=mysqli_query($con,"INSERT INTO `leave_report`(`sm_id`, `lr_reason`, `lr_from`, `lr_to`,`lr_regdate`) VALUES ('".$id."', '".$reason."','".$dtfrm."'                         ,'".$dtto."', now())") or die(mysqli_error($con));
	$response=array();
	if(mysqli_insert_id($con)!="")
	{
		$response['success']=200;
		$response['message']="Leave Applied";
	}
	else
	{
		$response['success']=201;
		$response['message']="Something Went Wrong";
	}
	echo json_encode($response);
?>
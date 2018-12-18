<?php 
	include '../db.php';
	
	$menu=$_REQUEST['menu'];
	$id=$_REQUEST['id'];
	
	$query=mysqli_query($con,"UPDATE `menu_master` SET `mm_menu`='".$menu."' WHERE `mm_id`='".$id."'") or die(mysqli_error($con));
	
	$response=array();
	if($query)
	{
		$response['success']=200;
		$response['message']="Menu Updated";
	}
	else
	{
		$response['success']=201;
		$response['message']="Not Updated";
	}
	echo json_encode($response);
	
	
?>
<?php 
	include '../db.php';
	$user=$_REQUEST['user'];
	$psw=md5($_REQUEST['psw']);
	$status=$_REQUEST['status'];
	if($status=="student")
	{
		$login=mysqli_query($con, "select * from stud_master where sm_cnct='".$user."' or sm_mail='".$user."' and sm_psw='".$psw."'") or die(mysqli_error($con));
		$response=array();
		if (mysqli_num_rows($login)!=0)
		{
			$response['success']=201;
			$log=mysqli_fetch_array($login);
			$response['data']=$log['sm_id'];
			$response['message']="Login Successful";
		}
		else
		{
			$response['success']=200;
			$response['message']="User or Password Incorrect";
		}
	}
	else if($status=="parent")
	{
		$login=mysqli_query($con, "select * from parent_master where pm_cnct='".$user."' or pm_mail='".$user."' and pm_psw='".$psw."'") or die(mysqli_error($con));
		$response=array();
		if (mysqli_num_rows($login)!=0)
		{
			$response['success']=201;
			$log=mysqli_fetch_array($login);
			$response['data']=$log['pm_id'];
			$response['message']="Login Successful";
		}
		else
		{
			$response['success']=200;
			$response['message']="User or Password Incorrect";
		}
	}
	else if($status=="warden")
	{
		$login=mysqli_query($con, "select * from faculty_master where fm_cnct='".$user."' or fm_mail='".$user."' and fm_psw='".$psw."'") or die(mysqli_error($con));
		$response=array();
		if (mysqli_num_rows($login)!=0)
		{
			$response['success']=201;
			$log=mysqli_fetch_array($login);
			$response['data']=$log['fm_id'];
			$response['message']="Login Successful";
		}
		else
		{
			$response['success']=200;
			$response['message']="User or Password Incorrect";
		}
	}
	else
	{
		$response['success']=200;
		$response['message']="Don't Try To Hack";
	}
	echo json_encode ($response);
?>
<?php 
	include '../con.php';
	$user=$_POST['user'];
	$psw=md5($_POST['psw']);
	$status=$_POST['status'];
	$faculty=$_POST['faculty'];
	$stud=$_POST['stud'];
	$cnct=$_POST['cnct'];
	$mail=$_POST['mail'];
	$branch=$_POST['branch'];
	$img=$_POST['img'];
	$parent=$_POST['parent'];
	$rel=$_POST['rel'];
	$role=$_POST['role'];
	$facrole=$_POST['facrole'];
	
	if($status=="student")
	{
		mysqli_query($con, "INSERT INTO `stud_master`(`fm_id`, `sm_name`, `sm_cnct`, `sm_mail`, `sm_psw`, `sm_branch`, `sm_img`, `sm_regdate`) VALUES ('".$faculty."', '".$stud."', '".$cnct."', '".$mail."', '".$psw."', '".$branch."', 'image/".$img."', now())") or die(mysqli_error($con)); or die(mysqli_error($con));
		header("Location:login.php");
	
	}
	else if($status=="parent")
	{
		mysqli_query($con, "INSERT INTO `parent_master`(`sm_id`, `pm_name`, `pm_cnct`, `pm_mail`, `pm_psw`, `pm_relation`, `pm_regdate`) VALUES ('".$id."', '".$parent."', '".$cnct."', '".$mail."', '".$psw."', '".$rel."', now())") or die(mysqli_error($con));
		header("Location:parent_reg.php");
			
	}
	else if($status=="warden")
	{
		mysqli_query($con, "INSERT INTO `faculty_master`(`fm_name`, `fm_cnct`, `fm_mail`, `fm_psw`, `fm_role`, `fm_img`, `fm_regdate`) VALUES ('".$faculty."', '".$cnct."', '".$mail."', '".$psw."', '".$facrole."', 'image/".$img."', now())") or die(mysqli_error($con));
		
		header("login.php");
	}
	else
	{
		$response['success']=200;
		$response['message']="Don't Try To Hack";
	}
	echo json_encode ($response);
?>
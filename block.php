<?php
	include '../con.php';
	$block=mysqli_query($con, "select *form block_master");
	$blc=mysqli_fetch_array($block);
	
?>
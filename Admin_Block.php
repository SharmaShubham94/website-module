<?php
	$id=$_GET["id"];
	$status=$_GET["status"];
			
	include "dbcon.php";
	if($status=="Active")
	{
		mysqli_query($con,"update user_tb set status='Block' where loginid='$id'");
		mysqli_query($con,"update login_tb set status='Block' where loginid='$id'");
	}
	else
	{	
		mysqli_query($con,"update user_tb set status='Active' where loginid='$id'");
		mysqli_query($con,"update login_tb set status='Active' where loginid='$id'");
	}
	mysqli_close($con);
	header("location: Admin_User.php");
?>

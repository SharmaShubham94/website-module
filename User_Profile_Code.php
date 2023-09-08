<?php
	session_start();		
	$id=$_SESSION["loginid"];
	$uname=$_POST["uname"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
		
	include "dbcon.php";
	mysqli_query($con," update user_tb set uname='$uname', phone='$phone', email='$email' where loginid='$id'");
	$a=mysqli_affected_rows($con);
	mysqli_close($con);
	if($a==0)
		header("location: User_Profile.php?flag=0");
	else
		header("location: User_Profile.php?flag=1");
?>
<?php
	$id=$_POST["id"];
	$pwd=$_POST["pwd"];
	$uname=$_POST["uname"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	
	include "dbcon.php";
	mysqli_query($con," insert into login_tb values('$id','$pwd','user','Active')");
	mysqli_query($con," insert into user_tb values('$id','$uname','$phone','$email','Active')");
	$a=mysqli_affected_rows($con);
	mysqli_close($con);
	if($a==0)
		header("location: Registration_Page.php?flag=0");
	else
		header("location: Registration_Page.php?flag=1");
?>

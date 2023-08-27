<?php 
	$sno=$_POST["sno"];
	$date=$_POST["date"];
	$notice=$_POST["notice"];
	
	include "dbcon.php";
	mysqli_query($con," insert into notice_tb values($sno,'$date','$notice')");
	$a=mysqli_affected_rows($con);
	mysqli_close($con);
	if($a==0)
		header("location: Admin_Notice.php?flag=0");
	else
		header("location: Admin_Notice.php?flag=1");
?>

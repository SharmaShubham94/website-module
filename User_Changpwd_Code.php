<?php  
	session_start();
		$id=$_SESSION["loginid"];
		$opwd=$_POST["opwd"];
		$npwd=$_POST["npwd"];
		$cpwd=$_POST["cpwd"];
		$dbpwd="";
		include "dbcon";
		$result=mysqli_query($con,"select pwd from login_tb where loginid='$id'");
		while($row=mysqli_fetch_array($result))
		{
			$dbpwd=$row[0];
		}
		mysqli_close($con);
	
	if($dbpwd==$opwd)
	{
		if($npwd==$cpwd)
		{
			include "dbcon.php";
			mysqli_query($con,"update login_tb set pwd='$npwd' where loginid='$id'");
			$a=mysqli_affected_rows($con);
			mysqli_close($con);
			if($a==0)
				header("location: User_ChangPwd.php?flag=0");
			else
				header("location: User_ChangPwd.php?flag=1");
		}
		else
		{
			header("location: User_ChangPwd.php?flag=3");
		}
	else
	{
		header("location: User_ChangPwd.php?flag=2");
	}
?>
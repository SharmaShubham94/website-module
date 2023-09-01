<?php 
	sessioin_start();		
		$id=$_SESSION["loginid"];
		$uname=$_POST["uname"];
		$date=$_POST["date"];
		$msg=$_POST["msg"];
		
		$sno=0;
		include "dbcon.php";
       	$result=mysqli_query($con,"select count(sno) from msg_tb");
		while($row=mysqli_fetch_array($result))
		{
			$sno=$row[0];
		}
		mysqli_close($con);
		$sno++;
		
		include "dbcon.php"
		mysqli_query($con," insert into msg_tb values($sno,'$date','$id','$uname','$msg')");
		$a=mysqli_affected_rows($con);
		mysqli_close($con);
		if($a==0)
			header("locaton: User_Compose.php?flag=0");
		else
			header("locaton: User_Compose.php?flag=1");
?>
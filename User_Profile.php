<?php
	session_start();
	$uname="";
	$phone="";
	$email="";
	$id=$_SESSION["loginid"];
	include "dbcon.php";
	$result=mysqli_query($con,"select * from user_tb where loginid='$id'");
	while($row=mysqli_fetch_array($result))
	{
		$uname=$row[1];
		$phone=$row[2];
		$email=$row[3];
	}
	mysqli_close($con);
?>
<head>
	<title>Collapsible NavBar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">	
	<script src="jquery/jquery-3.3.1.js"></script>
	<script src ="bootstrap3/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
				<span class="icon-bar"> </span>
			</button>
			<a class="navbar-brand" href="#" >Optimus Infotech</a>
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="User_Profile.php" >Profile</a></li>
				<li><a href="User_ChangPwd.php" >ChangePwd</a></li>
				<li><a href="User_Inbox.php" >Inbox</a></li>
				<li><a href="User_Compose.php" >Compose</a></li>
				<li><a href="User_Notice.php" >Notice</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span>Logout
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<hr>
	<span style="color:green;font-size:18px"> Welcome<?php echo $id; ?></span>
<hr>

<div class="container">
	<h2>Profile Page</h2>
	<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-8">
			<form action="User_Profile_code.php" method="post">
				<div class="form-group">
					<label>User Name</label>
					<input type="text" class="form-control"  value="<?php echo $uname ; ?>" name="uname" >
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" class="form-control"  value="<?php echo $phone ; ?>" name="phone" >
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control"  value="<?php echo $email ;?>" name="email" >
				</div>
				<input type="submit" class="btn btn-success" name="submit" value="Edit Profile">
			</form>
			
			<?php 
				if(isset($_GET["flag"]))
				{
					$flag=$_GET["flag"];
					if($flag==0)
					echo "Profile Updation Failed!! Try Again";
					else
					echo "Profile Updated Successfully";
				}
			?>
			</div>
		</div>
	<br> <br>
</div>
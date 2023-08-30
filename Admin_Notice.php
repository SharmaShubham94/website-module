<?php 
	$sno=0;
	include "dbcon.php";
	$result=mysqli_query($con,"select count(sno) from notice_tb");
	while($row=mysqli_fetch_array($result))
	{
		$sno=$row[0];
	}
	mysqli_close($con);
	$sno++;
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
			<a class="navbar-brand" href="#" >Company Name</a>
		</div>
		
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="Admin_User.php" >User</a></li>
				<li class="Active"><a href="Admin_Notice.php" >Notice</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Login_Page.php"><span class="glyphicon glyphicon-user"></span>Logout
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<hr>
<span style="color:green;font-size:18px">Welcome Admin!</span>
<hr>
<div class="container">
	<h2>Send Notice</h2>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-8">
			<form action="Admin_Notice_Code.php" method="post">
				<div class="form-group">
					<label for="login">S.no</label>
					<input type="text" class="form-control" name="sno" value="<?php echo $sno; ?>">	
				</div>
				<div class="form-group">
					<label>Date</label>
					<input type="text" class="form-control" name="date">
				</div>
				<div class="form-group">
					<label>Notice</label>
					<input type="text" class="form-control" name="notice">
				</div>
				<input type="submit" class="btn btn-success" name="submit" value="Send Notice">
			</form>
			<?php 
				if(isset($_GET["flag"]))
				{
					$flag=$_GET["flag"];
					if($flag==0)
					echo "Notice Send Failed!! Try Again";
					else if($flag==1)
					echo "Notice Send Successfully";
				}
			?>
			</div>
		</div><br><br>
</div>

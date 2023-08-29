<head>
	<title>Collapsible Bar Registration Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<li class="active"><a href="#" >Home</a></li>
				<li><a href="#" >ContactUs</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="Registration_Page.php"><span class="glyphicon glyphicon-user"></span>SignUp
					</a>
				</li>
				<li>
					<a href="Login_Page.php"><span class="glyphicon glyphicon-log-in"></span> Login
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<h2>Registration Page</h2>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-8">
			<form action="Registration_code.php" method="post">
				<div class="form-group">
					<label>Login Id</label>
					<input type="text" class="form-control"  placeholder="Enter Login Id " name="id" >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Enter Password" name="pwd">
				</div>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" class="form-control" placeholder="Enter User Name" name="uname">
				</div>
				
				<div class="form-group">
					<label>Phone no.</label>
					<input type="text" class="form-control" placeholder="Enter User Name" name="phone">
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" placeholder="Enter Email" name="email">
				</div>
				
				<input type="submit" class="btn btn-success" name="submit" value="Register">
			</form>
			<?php 
				if(isset($_GET["flag"]))
				{
					$flag=$_GET["flag"];
					if($flag==0)
					echo "Regitration Failed! Try Again";
					else
					echo "Regitration Successfull...";
				}
			?>
			</div>
		</div>
	<br> <br>
</div> 
<head>
	<title>Collapsible Bar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
				<li class="active"><a href="Admin_User.php" >User</a></li>
				<li><a href="Admin_Notice.php" >Notice</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="Login_Page.php"><span class="glyphicon glyphicon-user"></span> Logout
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<hr>
<span style="color:green;font-size:18px">welcome Admin!
<hr>
<div class="container">
	<h2>User List</h2>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
			<table class="table table-bordered">
				<tr style="background-color:green; color:white" >
					<td>Login ID</td>
					<td>User Name</td>
					<td>Phone</td>
					<td>Email</td>
					<td>Status</td>
					<td>Action</td>
				</tr>
			<?php 
				include "dbcon.php"; //include is used to link php file to php file
				$result=mysqli_query($con,"select * from user_tb");
				while($row=mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td>";
					if($row[4]="Active")
					echo "<td><a href='Admin_Block.php?id=$row[0]&row[4]'>Block</a></td>";
					else
					echo "<td><a href='Admin_Block.php?id=$row[0]&row[4]'>Active</a></td>";
					echo "</tr>";
				}
				mysqli_close($con);
			?>
			</table>
		</div>
	</div>
	<br><br>
</div>

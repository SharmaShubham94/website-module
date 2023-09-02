<?php   
	session_start();
		$id=$_SESSION["loginid"];
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
				<li><a href="Login_Page.php"><span class="glyphicon glyphicon-log-out"></span> Logout
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
	<h2>Notice Page</h2>
		<hr>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10"> 
				<table class="table table-bordered">
					<tr style="background-color:green;color:white">
						<td>Date</td><td>Notice</td>
					</tr>
					<?php
						include "dbcon.php";
						$result=mysqli_query($con,"select * from notice_tb order by sno desc");
						while($row=mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>$row[1]</td><td>$row[2]</td>";						
							echo "</tr>";
						}						
						mysqli_close($con);
					?>
				</table>
			</div>
		</div>	
	<br><br>		
</div>
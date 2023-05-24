<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				
				
				<li><a href="addDoctor2.php">Add Doctor</a></li>
				<li><a href="viewDoctor.php">View Doctor</a></li>
				<li><a href="addVet.php">Add VetClinic</a></li>
				<li><a href="viewVet.php">View VetClinic</a></li>
				<li><a href="viewCustomer.php">View Patient</a></li>
				<li><a href="viewAppoinment.php">View Appoinment</a></li>
				<li><a href="viewFeedback.php">View Feedback</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	

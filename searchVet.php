
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Veterinary Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<div class="container-fluid">
	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="vet_hospital.php">Search Hospital</a></li>
				<!-- <li><a href="doctorinfo.php">Medical Doctors</a></li> -->
				<li><a href="about.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="signin.php">User Login</a></li>
				<li><a href="admin/index.php">Admin Login</a></li>
				
			</ul>
		</nav>
	</div>
	


	<!-- mc info -->
	<div class="form-group mc">
		<h2 class="text-center" style="background-color:#272327;color: #fff;">Veterinary Hospitals</h2>

                              <div class="all_user" style="margin-top:0px; margin-left: 40px;">
				
						    <table border="1" align="center" cellpadding="32">
							<tr>
								<th>SLNO</th>
								<th>Vet Name</th>								
								<th>Location</th>
								<th>No of Doctors</th>
								<th>Established year</th>
								<th>Website</th>
								
				
							</tr>
				<?php 
					include('config.php');

					if(isset($_POST["submit"])){
					$location=$_POST['location'];
					$sql= "SELECT * FROM vetclinic WHERE location ='$location'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>0){
						while($row=mysqli_fetch_array($result)){
								?> 
								<tr>
								 <td><?= $row['slno']?></td>	
								 <td><?= $row['vetname']?></td>							
								 <td><?= $row['location']?></td>
								 <td><?= $row['doctors']?></td>
								 <td><?= $row['estd']?></td>
								 <td><?= $row['website']?></td>
								 <?php
								
								echo "</tr>";
								 
						}
						 echo"</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

				}
					?>
	</div>
	



	
	</div><!--  containerFluid Ends -->



	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
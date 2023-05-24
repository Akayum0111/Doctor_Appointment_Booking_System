<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">All registered Doctor List</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM doctor";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Photo</th>
								<th>Name</th>								
								<th>Address</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Expert in</th>

								<th>Fee</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								?> 
								<tr>
								
								 <td><img src="../photo/<?= $row['pic']?>"  height="50px" width="50px"></td>
								 <td><?= $row['name']?></td>							
								 <td><?= $row['address']?></td>
								 <td><?= $row['contact']?></td>
								 <td><?= $row['email']?></td>
								 <td><?= $row['expertise']?></td>
								 <td><?= $row['fee']?></td>
								 </tr>
								 <?php
						}
						 echo"</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>

<!-- // echo "<td>".$row['doctor_id']."</td> -->
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

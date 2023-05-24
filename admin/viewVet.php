<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>


	<!-- mc info -->
	<div class="form-group mc">
		<h2 class="text-center" style="background-color:#272327;color: #fff;">Veterinary Hospitals</h2>

                              <<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM vetclinic";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>SLNO</th>
								<th>Vet Name</th>								
								<th>Location</th>
								<th>No of Doctors</th>
								<th>Established year</th>
								<th>Website</th>
								<th>Action</th>
				
							</tr>";
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
								 echo "<td><a href=delvet.php?id=".$row['slno'].">Delete</a></td>";
								echo "</tr>";
								 
						}
						 echo"</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					
					?>
	</div>
	

    <!-- footer section --> 
			 <?php include('footer.php'); ?>
		<!-- footer section Ends--> 


	
	</div><!--  containerFluid Ends -->



	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
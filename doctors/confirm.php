<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Today's Appoinment</h3>
		
		
	</div>
		
			

            <?php 
	            $book_id = isset($_GET['booking_id'])?$_GET['booking_id']:"";
	
					include('../config.php');

					$sql = " UPDATE booking SET status='Booked' WHERE booking_id=$book_id";
					$result = mysqli_query($conn,$sql);
					if($result==TRUE){
                            echo "Booking Confirmed";
                    }					
					else{
                        echo "Query Failed";
					}

			?>
			
		
	
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

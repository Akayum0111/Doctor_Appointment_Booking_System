<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
       
                    //delete vet info

                    <?php 
					include('../config.php');
                    $vetid = isset($_GET['id'])?$_GET['id']:"";

					$sql = " DELETE FROM vetclinic WHERE slno=$vetid";
					$result = mysqli_query($conn,$sql);
					if($result == TRUE){
						echo "Vet deleted";
					}else{
						echo "Not deleted";
					}

                    ?>
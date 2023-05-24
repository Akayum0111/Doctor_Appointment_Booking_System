<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>



                    <!-- this is for donor registraton -->
                    <div class="recipient_reg" style="background-color:#272327;">
                        <h3 class="text-center" style="background-color:#272327;color: #fff;">Add Doctor</h3>
                
                        <div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
                        <form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
                             <div class="col-md-12">
                                  
                                     <label>
                                        <input type="text" name="vetname" value="" placeholder="Vet Name" required>
                                    </label><br><br>
                                    <label>
                                        <input type="text" name="location" value="" placeholder="Location of Vet" required>
                                    </label><br><br>
                                    <label>
                                         <input type="text" name="doctors" value="" placeholder="No of doctor" required>
                                    </label><br><br>
                                    <label>
                                         <input type="text" name="estd" value="" placeholder="Established Year" required>
                                    </label><br><br>
                
                                    <label>
                                         <input type="text" name="website"  value="" placeholder="Website of Clinic" required>
                                    </label><br><br>
                                    
                                
                                    <button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>
                                
                            </div>	<!-- col-md-12 -->
                
                
                                </form>
                            </div>
                
                
                
                
                    </div>
                    
                    
                
                 <!-- validation and insertion -->
                
                
                            <?php
                                        include('../config.php');
                                        if(isset($_POST['submit'])){

                                            $sql1 = "SELECT * FROM vetclinic WHERE vetname='".$_POST["vetname"]."' OR location= '" . $_POST["location"] . "' ";
	              					$result = $conn->query($sql1);
	              					if($result->num_rows > 0){
	              						 echo "<script>alert('Sorry, Name or Location already exist!');</script>";
	              					}
	              					else{
                
                                            $sql = "INSERT INTO vetclinic (vetname,location,doctors,estd,website)
                                            VALUES ('" . $_POST["vetname"] ."','" . $_POST["location"] . "','" . $_POST["doctors"] . "','" . $_POST["estd"] . "','" . $_POST["website"] . "' )";
                
                                            if ($conn->query($sql) === TRUE) {
                                                echo "<script>alert('New Vet Has been Added Successfully!');</script>";
                                            } else {
                                                echo "<script>alert('There was an Error')<script>";
                                            }
                
                                            $conn->close();
                                        }
                                    }
                                ?> 
                
                
                
                    <!-- validation and insertion End-->
                
                    
                    
                 <?php include('footer.php'); ?>
                
                
                    
                    </div><!--  containerFluid Ends -->
                
                
                
                
                    <script src="js/bootstrap.min.js"></script>
                
                
                    
                
                
                
                </body>
                </html>
		
<?php


include "header.php";

?>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <style>
    .input-borders{
        border-radius:30px;
    }
    </style>
				<!-- row -->
				
                <div class="container-fluid">
					
						
						
						<!-- /Billing Details -->

						<?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                ?>
						
								
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h2 class="login100-form-title p-b-49" >My Profile</h2>
                                    </div>
                                    <div class="form-group ">
                                    
                                        <p>First Name: <?php $row['first_name'] ?></p>
                                    </div>
                                    <div class="form-group">
                                    
                                        <p>Last Name</p>
                                    </div>
                                    <div class="form-group">
                                        <p>E-Mail</p>
                                    </div>
                                    
                                    <div class="form-group">
                                        <p>Phone Number</p>
                                    </div>
                                    <div class="form-group">
                                        <p>Address</p>
                                    </div>
                                    <div class="form-group">
                                        <p>City</p>
                                    </div>
                                    
                                    
                                    <div style="form-group">
                                       <input class="primary-btn btn-block"  value="Edit" type="submit" name="signup_button">
                                    </div>
                                    <div class="text-pad">
                                    <!--a href="" data-toggle="modal" data-target="#Modal_login">Already have an Account ? then login</a> -->
                                       
                                    </div>
                                    
                                
								</form>
                                <div class="login-marg">

                                	<?php
                                }
                                ?>
						<!-- Billing Details -->
						<div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8" id="signup_msg">
                                    

                                </div>
                                <!--Alert from signup form-->
                            </div>
                            <div class="col-md-2"></div>
                        </div>

						
					</div>
                    </div> 

					
				
				<!-- /row -->

<?php
//include "profile.php";
include "newslettter.php";
include "footer.php";
?>

	
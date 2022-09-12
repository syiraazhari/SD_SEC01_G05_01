<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>UTMKL Facility Booking System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">
</head>
<body>


<!-- partial:index.partial.html
<a href="https://front.codes/" class="logo" target="_blank">
		//<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	//</a>-->

	<div class="section">
		
		<div class="container">
			
				<div class="col-12 text-center align-self-center py-5">
					
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">

											<h4 class="mb-4 pb-3">Reset your password</h4>
											<p> </p>

                                                        <form action= "..\case1\processFBS.php" method="post">
                                                        <?php
                                                          //session_start();
                                                          //$status = $_SESSION["status"];
                                                          //echo '<h4 class="mb-4 pb-3" style="color:red">'.$status.'</h4>';
                                                          $email = $_GET['email'];
                                                          $token = $_GET['vkey'];

                                                          if(isset($_GET['statusReset'])){
															if($_GET['statusReset'] == "normal"){
																//echo "<p>Please Enter your new password </p>";
															}else if($_GET['statusReset'] == "Success"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Your Password has been reset !</p>';
															}else if($_GET['statusReset'] == "fail"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Fail to change the password</p>';
															}else if($_GET['statusReset'] == "passwordNotSame"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Password was not same!</p>';
															}else if($_GET['statusReset'] == "InvalidToken"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Invalid Token</p>';
															}else if($_GET['statusReset'] == "MantedoryField"){
																echo '<p class="mb-4 pb-3" style="color:yellow">All field are mantedory</p>';
															}else if($_GET['statusReset'] == "errorToken"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Error Token</p>';
															}else if($_GET['statusReset'] == "notEnoughLength"){
																echo '<p class="mb-4 pb-3" style="color:yellow">Passsword length must between 8 - 12</p>';
															}
														}
                                                        ?>
                                                        <div class="form-group">
                                                            <?php 

                                                            echo '<input type="text" name="email" value ='.$email.' class="form-style"  autocomplete="off" readonly>';
                                                            ?>
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>
                                                        
                                                        <div class="form-group mt-2">
                                                            <?php 

                                                            echo '<input type="hidden" name="token" value ='.$token.' class="form-style"  autocomplete="off" readonly>';
                                                            ?>
                                                            <i class="input-icon uil uil-user"></i>
                                                        </div>	

                                                        <div class="form-group mt-2">
                                                            <input type="password" name="password" class="form-style" placeholder="Enter a new password" autocomplete="off">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>	
                                                        <div class="form-group mt-2">
                                                            <input type="password" name="re-password" class="form-style" placeholder="Repeat new password" autocomplete="off">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>	
                                                        <input type="submit" value="Reset Password" class="btn mt-4" name="reset-password-submit">
                                                        <p class="mb-0 mt-4 text-center"><a href="..\LoginSignupPage\index.php" class="link">Go back to login page?</a></p>

                                                    </form>

                                            <!--
                                            <form action= "..\case1\processFBS.php" method="POST">
											<div class="form-group">
												<input type="text" name="userEmail" class="form-style" placeholder="Enter your e-mail address" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											
												<input type="submit" value="RECEIVE NEW PASSWORD BY MAIL" class="btn mt-4" name="forgotpassword">
                                            </form>
                                            -->
                                                                        				<!--<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> -->
				      					</div>
			      					</div>
			      				</div>

			      			</div>
			      		</div>
			      	
		      	</div>
	      	
	    </div>
	</div>
<!-- partial -->

  <script  src="./script.js"></script>

</body>
</html>


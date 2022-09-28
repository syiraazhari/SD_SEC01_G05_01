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
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
										
											<h4 class="mb-4 pb-3">
											<img class="dark-logo" src="../StaffPage/StaffPagePicture/UTM-LOGO.png" 	weight="150" height = "150" alt="UTM Logo">
											<br><br>UTMKL Facility Booking System</h4>
                                            <form action= "..\case1\processFBS.php" method="POST">
											<div class="form-group">
												<input type="text" name="username" class="form-style" placeholder="Your Email" autocomplete="off" required>
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" autocomplete="off"required>
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
												<input type="submit" value="Login" class="btn mt-4" name="login1">
                                            </form>
											<?php
												if(isset($_GET['error'])){
													if($_GET['error'] == "falseemailorpassword"){
														echo '<div class="form-group mt-2">';
														echo '<h5 class="mb-4 pb-3" >Email Or Password Was Invalid</h5>';
														echo '</div>';
													}else if($_GET['error'] == "noverify"){
														echo '<div class="form-group mt-2">';
														echo '<h5 class="mb-4 pb-3" >Your Email Havent Done Verification</h5>';
														echo '</div>';
													}else if($_GET['error'] == "noEmail"){
														echo '<div class="form-group mt-2">';
														echo '<h5 class="mb-4 pb-3" >Invalid Email</h5>';
														echo '</div>';
													}
												}
											?>
                            				<p class="mb-0 mt-4 text-center"><a href="..\ForgotPassword\resetpassword.php?statusEmail=success" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////                Sign up                   /////////////////////////////////////////////-->
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
                                            <form action= "..\case1\processFBS.php" method="POST">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="name" class="form-style" placeholder="Your Full Name" autocomplete="off" required><!-- name-->
												<i class="input-icon uil uil-user"></i>
											</div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="MatricNum" class="form-style" placeholder="Your Staff ID / Matric Number" autocomplete="off"required><!-- Matricnum-->
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="number" name="phoneNum" class="form-style" placeholder="Your Contact Number" autocomplete="off"required><!-- phoneNum-->
                                                    <i class="input-icon uil uil-mobile-android"></i>
                                                </div>

                                                <div class="form-group mt-2">
												<input type="email" name="userId" class="form-style" placeholder="Your Email" autocomplete="off"required><!--Email-->
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" autocomplete="off"required><!-- password-->
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                                                <input type="submit" value="Register As Staff" class="btn mt-4" name="registerstaff"><!-- Button-->
                                                <input type="submit" value="Register As Student" class="btn mt-4" name="register"><!-- Button-->
                                            </form>
				      					</div>
			      					</div>
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


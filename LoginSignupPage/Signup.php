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
						<h6 class="mb-0 pb-3"><span>Sign Up </span><span>Login</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								
<!-- ////////////////////////////////////////////////////////////////////////////////////                Sign up                   /////////////////////////////////////////////-->
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
                                            <form action= "..\case1\processFBS.php" method="POST">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<?php
												if(isset($_GET['error'])){
													if($_GET['error'] == "emptyfields"){
														echo '<h6 class="mb-4 pb-3" style="color:red">Please Fill in all the field!!!!!</h6>';
													}else if($_GET['error'] == "passwordErrors"){
														echo '<h6 class="mb-4 pb-3" style="color:red">Your Password must between 8 - 12 alphabet or number.</h6>';
													}else if($_GET['error'] == "phoneNumErrors"){
														echo '<h6 class="mb-4 pb-3" style="color:red">Your Phone number must between 10 - 11 digit.</h6>';
													}
												}
												
											?>
											<?php
												if(isset($_GET['newpwd'])){
													if($_GET['newpwd'] == "passwordError"){
														echo '<h5 class="mb-4 pb-3" style="color:red">Your password has been reset</h5>';
													}
												}
											?>
											<div class="form-group">
												<input type="text" name="name" class="form-style" placeholder="Your Full Name" autocomplete="off"><!-- name-->
												<i class="input-icon uil uil-user"></i>
												
											</div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="MatricNum" class="form-style" placeholder="Your Staff ID / Matric Number" autocomplete="off"><!-- Matricnum-->
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="number" name="phoneNum" class="form-style" placeholder="Your Contact Number" autocomplete="off"><!-- phoneNum-->
                                                    <i class="input-icon uil uil-mobile-android"></i>
                                                </div>

                                                <div class="form-group mt-2">
												<input type="email" name="userId" class="form-style" placeholder="Your Email" autocomplete="off"><!--Email-->
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
											<input type="password" name="password" class="form-style" placeholder="Your Password" autocomplete="off"><!-- password-->
											
												<i class="input-icon uil uil-lock-alt"></i>
											</div>

											
                                                <input type="submit" value="Register As Staff" class="btn mt-4" name="registerstaff"><!-- Button-->
                                                <input type="submit" value="Register As Student" class="btn mt-4" name="register"><!-- Button-->
                                            </form>
				      					</div>
			      					</div>
			      				</div>
								
<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">

											<h4 class="mb-4 pb-3">Log In</h4>
                                            <form action= "..\case1\processFBS.php" method="POST">
											<div class="form-group">
												<input type="text" name="username" class="form-style" placeholder="Your Email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
												<input type="submit" value="Login" class="btn mt-4" name="login1">
                                            </form>
                            				<p class="mb-0 mt-4 text-center"><a href="..\ForgotPassword\resetpassword.php?statusEmail=success" class="link">Forgot your password?</a></p>
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


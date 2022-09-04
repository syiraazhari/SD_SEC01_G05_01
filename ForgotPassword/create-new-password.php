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

											<h4 class="mb-4 pb-3">Reset your password.</h4>
											<p>An e-mail will be send to you with instructions on how to reset your password </p>
                                            <?php
                                                $selector = $_GET["selector"];
                                                $validator = $_GET["validator"];
                                                
                                                //echo $selector;
                                                //echo $validator;
                                                if(empty($selector) || empty($validator)){
                                                    echo 'could not validate your request';
                                                }else{
                                                    if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false ){
                                                        ?>
                                                        <form action= "..\case1\processFBS.php" method="post">
                                                        <div class="form-group">
                                                            <input type="Hidden" name="selector" value="<?php echo $selector ?>"class="form-style" placeholder="" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
                                                            <input type="Hidden" name="validator" value="<?php echo $validator ?>"class="form-style" placeholder="" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
                                                            <input type="password" name="pwd" class="form-style" placeholder="Enter a new password" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
                                                            <input type="password" name="pwd-repeat" class="form-style" placeholder="Repeat new password" autocomplete="off">
                                                            <i class="input-icon uil uil-at"></i>
											            </div>	
                                                        <input type="submit" value="RECEIVE NEW PASSWORD BY MAIL" class="btn mt-4" name="reset-password-submit">

                                                    </form>
                                                        <?php
                                                    }

                                                }
                                            ?>
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


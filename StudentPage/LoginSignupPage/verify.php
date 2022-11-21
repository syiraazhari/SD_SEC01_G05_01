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
			          	
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<?php
											if(isSet($_GET['vkey'])){
												$vkey = $_GET['vkey'];
												//echo "<h4 class='mb-4 pb-3'>we are in side</h4>";
												$mysqli = new MySQLi("localhost", "projectsd", "projectsd", "projectsd");
											
												$resultSet =  $mysqli->query("SELECT verified,vkey FROM user WHERE verified = 0 and vkey = $vkey LIMIT 1");
												//echo "SELECT verified,vkey FROM user WHERE verified = 0 and vkey = $vkey LIMIT 1";
												//echo "<h4 class='mb-4 pb-3'>'$vkey'</h4>";
												if($resultSet -> num_rows ==1){
													$update = $mysqli->query("UPDATE user SET verified = 1 WHERE vkey = $vkey LIMIT 1");
													//echo "UPDATE user SET verified  1 WHERE vkey = $vkey LIMIT 1";
														if($update){
															echo "<h4 class='mb-4 pb-3'>Your account has been verified. You may now login</h4>";
														}else{
															echo   $mysqli->error;
														}
												}else{
													echo"<h4 class='mb-4 pb-3'>This account invalid or already verified</h4>";
												}
												
											}else{
												die("<h4 class='mb-4 pb-3'>Something went wrong</h4>");
											}

											?>
											<!--<h4 class="mb-4 pb-3">This is the verify page</h4>-->
                                            <form action= "..\case1\processFBS.php" method="POST">
											
												<input type="submit" value="Return to Login" class="btn mt-4" name="gobackLogin">
                                            </form>
                            				
				      					</div>
			      					</div>
			      				</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////                Sign up                   /////////////////////////////////////////////-->
								
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


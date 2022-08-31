<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>UTMKL Facility Booking System</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">
    <script>
        function showDistrictByState(str)
        {
            if (str == "") {
                document.getElementById("districtDiv").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("districtDiv").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","../Login/showDistrictByState.php?state="+str,true);
                xmlhttp.send();
            }

        }

        function showPostCodeByDistrict(str)
        {
//alert(str);
            if (str == "") {
                document.getElementById("postcodeDiv").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("postcodeDiv").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","../Login/showPostCodeByDistrict.php?district="+str,true);
                xmlhttp.send();
            }

        }

    </script>
</head>
<body>
<?php
include "..\LoginSignupPage\utility.php";
?>

<!-- partial:index.partial.html -->
<a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a>

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
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>

								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
                                            <form action= "..\case1\processFBS.php" method="POST">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="name" class="form-style" placeholder="Your Full Name" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="icNum" class="form-style" placeholder="Your Matric Number" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="number" name="userNumber" class="form-style" placeholder="Your Contact Number" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="address1" class="form-style" placeholder="Address 1" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="text" name="address2" class="form-style" placeholder="Address 2" autocomplete="off">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>

                                                <?php showListOfState(); ?>

                                                <div class="row">
                                                    <div id = "districtDiv" name = "district">

                                                    </div>

                                                    <!--Postcode--------------------------------------------------------------->

                                                    <div id = "postcodeDiv" name = "postcode">

                                                    </div>

                                                <div class="form-group mt-2">
												<input type="email" name="userId" class="form-style" placeholder="Your Email" autocomplete="off">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Your Password" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
                                                <input type="submit" value="Register" class="btn mt-4" name="register">
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
<?php
function showListOfState(){

    $qry = getListOfState();
    //create the select input
    echo '<select name = "state" class="form-control" id="state" placeholder="state" onchange="showDistrictByState(this.value)">';
    while($row=mysqli_fetch_assoc($qry))//Display car information
    {
        echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';//add state list
    }

    echo '</select>';


}

?>

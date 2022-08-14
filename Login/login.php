<!DOCTYPE html>
<html>
<head>
	 <title>Unity Facility Booking</title>
	 
	 <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
	 
	<style media="screen">
	*,
	*:before,
	*:after{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{
		 background-color: #ADD8E6;
	}
	.background{
		width: 430px;
		height: 520px;
		position: absolute;
		transform: translate(-50%,-50%);
		left: 50%;
		top: 50%;
	}
	.background .shape{
		height: 200px;
		width: 200px;
		position: absolute;
		border-radius: 50%;
	}
	.shape:first-child{
		background: linear-gradient(
			#1845ad,
			#23a2f6
		);
		left: -80px;
		top: -80px;
	}
	.shape:last-child{
		background: linear-gradient(
			to right,
			#ff512f,
			#f09819
		);
		right: -70px;
		bottom: -150px;
	}
	form{
		height: 550px;
		width: 430px;
		background-color: rgba(255,255,255,0.13);
		position: absolute;
		transform: translate(-50%,-50%);
		top: 60%;
		left: 50%;
		border-radius: 10px;
		backdrop-filter: blur(10px);
		border: 2px solid rgba(255,255,255,0.1);
		box-shadow: 0 0 40px rgba(8,7,16,0.6);
		padding: 50px 35px;
	}
	form *{
		font-family: 'Poppins',sans-serif;
		color:black;
		letter-spacing: 0.5px;
		outline: none;
		border: none;
	}
	form h3{
		font-size: 32px;
		font-weight: 500;
		line-height: 42px;
		text-align: center;
	}

	label{
		display: block;
		margin-top: 30px;
		font-size: 16px;
		font-weight: 500;
	}
	input{
		display: block;
		height: 50px;
		width: 100%;
		background-color: rgba(255,255,255,0.07);
		border-radius: 3px;
		padding: 0 10px;
		margin-top: 8px;
		font-size: 14px;
		font-weight: 300;
	}
	::placeholder{
		color: #a9a9a9;
	}
	button{
		margin-top: 50px;
		width: 100%;
		background-color: #ffffff;
		color: #080710;
		padding: 15px 0;
		font-size: 18px;
		font-weight: 600;
		border-radius: 5px;
		cursor: pointer;
	}
	.social{
	  margin-top: 30px;
	  display: flex;
	}
	.social div{
	  background: red;
	  width: 150px;
	  border-radius: 3px;
	  padding: 5px 10px 10px 5px;
	  background-color: rgba(255,255,255,0.27);
	  color: #eaf0fb;
	  text-align: center;
	}
	.social div:hover{
	  background-color: rgba(255,255,255,0.47);
	}
	.social .fb{
	  margin-left: 25px;
	}
	.social i{
	  margin-right: 4px;
	}
	</style>
</head>
<html>
    <body>
        <!--
        <form action= "processFacility.php" method="POST">
            Facility Id:<input type="text" name="facilityId" require>
            <br>Name:<input type="text" name="name">
            <br>Category:<input type="text" name="category">
            <br>Capacity:<input type="text" name="capacity">
            <br>Facility Detail:<input type="text" name="facilityDetail">
            <br>Rate Per Day:<input type="number" name="ratePerDay">
            <br>status:<input type="text" name="status">
            <br><input type="submit" value="add" name="addFacilityButton">        


        </form>
-->
<?php
session_start();
?>

			<div class="background">
				<div class="shape"></div>
				<div class="shape"></div>
		    </div>
            <form action= "..\case1\processFBS.php" method="POST">
			<h2 style="text-align: center">UNITY FACILITY BOOKING</h2><br>
			<h3 style="text-align:center">Login</h3>
            
            
                <!--username-->
                <label for="id">Email:</label>
                <input type="text" name="username" placeholder="Your Email..">
				
            <!--password-->
				<label for="name">Password:</label> 
                <input type="text" name="password" placeholder="Your password..">
           
            <br>
                <input type="submit" value="Login" name="login">
                <input type="submit" value="Register" name="registerbutton">

            </form>
           

    </body>

</html>
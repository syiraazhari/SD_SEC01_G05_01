<!DOCTYPE html>
<head>
<title>Register</title>
 
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
		height: 1500px;
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
			#e2ac6b,
			#e0d2b4
		);
		left: -80px;
		top: 400px;
	}
	.shape:last-child{
		background: linear-gradient(
			to right,
			#96705b,
			#ba9a8e
		);
		right: -80px;
		bottom: -300px;
	}
	form{
		height: 1200px;
		width: 450px;
		background-color: rgba(255,255,255,0.13);
		position: absolute;
		transform: translate(-50%,-50%);
		left: 50%;
		top: 110%;
		border-radius: 10px;
		backdrop-filter: blur(10px);
		border: 2px solid rgba(255,255,255,0.1);
		box-shadow: 0 0 40px rgba(8,7,16,0.6);
		padding: 50px 35px;
	}
	form *{
		font-family: 'Poppins',sans-serif;
		color: black;
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
<html>
    <body>
      <?php
       include "..\Login\utility.php";
      ?>
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
			<div class="background">
				<div class="shape"></div>
				<div class="shape"></div>
		    </div>
            <form action= "..\case1\processFBS.php" method="POST">
            <h2 style="text-align: center"> Customer Registration </h2>
                <!--Name-->
                 <label for="id">Name:</label>
                 <input type="text" name="name" placeholder="Your Name..">
				
            <!--icnum-->
				<label for="name">IC Number:</label>
                <input type="text" name="icNum" placeholder="Your ic Number..">
				
            <!--Contact Number-->
				<label for="address">Contact Number:</label>
                <input type="number" name="userNumber" placeholder="Your contact Number..">
				
            <!--address1-->
				<label for="name">Address 1:</label>
                <input type="text" name="address1" placeholder="Your address 1..">
				
            <!--address2-->
				<label for="name">Address 2:</label>
                <input type="text" name="address2" placeholder="Your address 2..">
				
            <!--state--------------------------------------------------------->
            
                <label for="name">state:</label>
              
                <?php showListOfState(); ?>
           
            <!--district---------------------------------------------------------------->
            
            <div class="row">
                <div id = "districtDiv" name = "district">
                
                </div>
            
            <!--Postcode--------------------------------------------------------------->
           
                <div id = "postcodeDiv" name = "postcode">
                
                </div>
                
            
            <!--date of-->
				<label for="name">Date of Birth:</label> 
                <input type="date" name="dateOfBirth" placeholder="Your birthday..">
				
            <!--Username-->
				<label for="salutation">Email:</label>
                <input type="text" name="userId" placeholder="Your Email...">
				
            <!--Password-->
				<label for="telephone">Password:</label>  
                <input type="text" name="password" placeholder="Your password..">  
           
            <br>
                <input type="submit" value="Submit" name="register">
				
            </form>
           
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
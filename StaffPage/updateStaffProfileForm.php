<!DOCTYPE html>
<html>
<head>
    <title>Staff Profile Update</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        form {
            margin: 0 auto;
            width: 600px;
			font-family: "Raleway", Arial, Helvetica, sans-serif;
        }
		
		.button {
		  background-color: #212F3C ; /* Green */
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 4px 2px;
		  cursor: pointer;
		  -webkit-transition-duration: 0.4s; /* Safari */
		  transition-duration: 0.4s;
		  width: 100%;
		}

		.button1 {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
		}

		.button2:hover {
		  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
    </style>
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63479eb437898912e96e5bc6/1gf7s7t2f';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<?php
include "..\case1\FBS.php";


$userId=$_POST['CustomerUserIdToUpdate'];
$userQry = getUserInformation($userId);
$UserRecord = mysqli_fetch_assoc($userQry);


$listOfPassword = getListOfpassword($userId);
$row2 = mysqli_fetch_assoc($listOfPassword);

echo '<div class="w3-bar w3-large"; style="background-color:#154360;";>';
echo'<b><h2 style="text-align: center; color:white;"> Staff Profile Update </h2></b>';
echo '</div>';
echo'<div style="background-color: #EBF5FB">';
echo'<form class="w3-container" action="..\case1\processFBS.php" method="POST">';

echo'<br>';
echo'Staff Id: <input class="w3-input" type="text" name="MatricNum" value="'.$UserRecord['staffId'].'"readonly>';
echo'<br>Email address: <input class="w3-input" type="text" name="userId" value="'.$row2['userId'].'" readonly>';
echo'<br>Password: <input class="w3-input" type="text" name="password" value="'.$row2['password'].'" >';
echo'<br>Name: <input class="w3-input" type="text" name="name" value="'.$UserRecord['name'].'">';
echo'<br>Phone Number: <input class="w3-input" type="number" name="phoneNum" value="'.$UserRecord['phoneNum'].'">';

        echo'<br><input class="button button2" style="vertical-align:middle" type="submit" name="updateStaffProfileButton" value"="Save">';
		echo '<br><br>';
    echo'</form>';
echo'</div>';
?>
</html>

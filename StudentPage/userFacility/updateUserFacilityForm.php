<!DOCTYPE html>
<html>
<head>
    <title>Update User Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
         form {
            margin: 0 auto;
            width: 600px;
			font-family: "Raleway", Arial, Helvetica, sans-serif;
        }
		
		.button {
		  background-color: #306946; /* Green */
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
<?php
include "..\case1\FBS.php";


$userId=$_POST['userIdToUpdate'];
$userQry = getUserInformation($userId);
$UserRecord = mysqli_fetch_assoc($userQry);

$listOfPassword = getListOfpassword($userId);
$row2 = mysqli_fetch_assoc($listOfPassword);

echo'<div class="w3-bar w3-large"; style="background-color:#306946; color:white;">';
echo'<b><h2 style="text-align: center"> User Update Form </h2>';
echo'<div>';
echo'<div style="background-color: #A9DFBF; color:black;">';
echo'<form class="w3-container" action="..\case1\processFBS.php" method="POST">';

        echo'<br>IC Number: <input class="w3-input" type="text" name="icNum" value="'.$UserRecord['icNum'].'"readonly>';
        echo'<br>Email address: <input class="w3-input" type="text" name="userId" value="'.$row2['userId'].'" readonly>';
        echo'<br>Password: <input class="w3-input" type="text" name="password" value="'.$row2['password'].'" >';
        echo'<br>Name: <input class="w3-input" type="text" name="name" value="'.$UserRecord['name'].'">';
        echo'<br>Phone Number: <input class="w3-input" type="number" name="phoneNum" value="'.$UserRecord['phoneNum'].'">';
        echo'<br>Address 1: <input class="w3-input" type="text" name="address1" value="'.$UserRecord['address1'].'">';
        echo'<br>Address 2: <input class="w3-input" type="text" name="address2" value="'.$UserRecord['address2'].'">';
        echo'<br>State: <input class="w3-input" type="text" name="state" value="'.$UserRecord['state'].'">';
        echo'<br>District: <input class="w3-input" type="text" name="district" value="'.$UserRecord['district'].'">';
        echo'<br>Postcode: <input class="w3-input" type="text" name="postcode" value="'.$UserRecord['postcode'].'">';
        echo'<br>Birthday date: <input class="w3-input" type="date" name="dateOfBirth" value="'.$UserRecord['dateOfBirth'].'">';
        echo'<br><input class="button button2" type="submit" name="updateUserButton" value"="Save"><br><br>';
		
    echo'</form>';
echo'</div>';
?>
</html>

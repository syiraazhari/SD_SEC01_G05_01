<!DOCTYPE html>
<html>
<head>
    <title>Update Facility Form</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .w3docs {
            margin-left: 70px;
            font-weight: bold;
            text-align: left;
            font-family: sans-serif, bold, Arial, Helvetica;
            font-size: 14px;
        }
        .button {
		  background-color: #2F4F4F; /* Green */
		  border: none;
		  color: white;
		  padding: 10px 255px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}

		.button3 {
		  background-color: #2F4F4F; 
		  color: white; 
		  border: 2px solid #2F4F4F;
		}

		.button3:hover {
		  background-color: #A9DFBF;
		  color: black;
		  border: 2px solid #A9DFBF;
		}
		
        div input {
            margin-right: 10px;
        }
        form {
            margin: 0 auto;
            width: 600px;
        }
        form input {
            padding: 10px;
        }
        form select {
            background-color: #ffffff;
            padding: 5px;
        }
        form label {
            display: block;
            width: 100%;
            margin-bottom: 5px;
    </style>
</head>
<?php
include "FBS.php";
include "../menu/menuStaff.php";


$facilityId=$_POST['facilityIdToUpdate'];
$facilityQry = getFacilityInformation($facilityId);
$facilityRecord = mysqli_fetch_assoc($facilityQry);

echo'<br><h2 style="text-align: center"><b> Facility Update Form </b></h2>';
echo'<div>';
echo'<form class="w3-container" action="processFBS.php" method="POST">';

        echo'Facility Id: <input class="w3-input" type="text" name="facilityId" value="'.$_POST['facilityIdToUpdate'].'"readonly>';
        echo'<br>Name: <input class="w3-input" type="text" name="name" value="'.$facilityRecord['name'].'" readonly>';
        echo'<br>Category: <input class="w3-input" type="text" name="category" value="'.$facilityRecord['category'].'">';
        echo'<br>Capacity: <input class="w3-input" type="number" name="capacity" value="'.$facilityRecord['capacity'].'">';
        echo'<br>Facility Detail: <input class="w3-input" type="text" name="facilityDetail" value="'.$facilityRecord['facilityDetail'].'">';
        echo'<br>Rate Per Day: <input class="w3-input" type="number" name="ratePerDay" value="'.$facilityRecord['ratePerDay'].'">';
        
        echo '<select class="w3-select" type="text" value="" name="status">
                <option>'.$facilityRecord['status'].'</option>
                <option>Available</option>
                <option>Not Available</option>
                <option>Under Maintenance</option>
                </select>';
        echo'<br><br><input class="button button3" type="submit" name="updateFacilityButton" value"="Save">';

    echo'</form>';
echo'</div>';
?>
</html>

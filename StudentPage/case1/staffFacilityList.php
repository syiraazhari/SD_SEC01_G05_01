<!DOCTYPE html>
<html>
<style>
	.button {
	  background-color: #2F4F4F; /* Green */
	  border: none;
	  color: white;
	  padding: 5px 16px;
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

	.button2 {
		  background-color: #2F4F4F; /* Green */
		  border: none;
		  color: white;
		  padding: 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 15px;
		  margin: 4px 2px;
		  cursor: pointer;
	}

	.button5 {
		border-radius: 50%;
	}
	
	.button5:hover {
	  background-color: #A9DFBF;
	  color: black;
	 
	}

	input[type=text] {
	  width: 130px;
	  box-sizing: border-box;
	  border: 2px solid #ccc;
	  border-radius: 4px;
	  font-size: 20px;
	  background-color: white;
	  background-position: 10px 10px; 
	  background-repeat: no-repeat;
	  padding: 10px 20px 10px 40px;
	  transition: width 0.4s ease-in-out;
	}

	input[type=text]:focus {
	  width: 100%;
	}

	hr.new1 {
	  border-top: 2px solid black;
	}

	 tr:nth-child(odd)
	  {
		background-color: #A2D9CE;
		color:black;
	  }
  </style>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<?php
include "FBS.php";
include "..\menu\menuStaff.php";

echo'<div class="w3-container" style="width:80%;margin:auto">';
// displayHeaderStaff();
echo'<br>';
displaySearchPanel();
$listOfFacility = getListOfFacility();
if(isSet($_POST['searchByFacilityId']))
{
    $listOfFacility = searchByFacilityId();
}
else if (isSet($_POST['searchByName']))
{
    $listOfFacility = searchByName();
}
else if (isSet($_POST['searchByCategory']))
{
    $listOfFacility = searchByCategory();
}

else
{
    $listOfFacility = getListOfFacility();
}
echo "<br><b>There are ". mysqli_num_rows($listOfFacility). ' record</b>';

if(mysqli_num_rows($listOfFacility) > 0)
    displayTableHeader();

$count=1;
while($row = mysqli_fetch_assoc($listOfFacility))
{
    echo'<tr>';
    echo '<td>'.$count.'</td>';
    echo '<td>'.strtoupper($row['facilityId']).'</td>';
    echo '<td>'.strtoupper($row['name']).'</td>';
    echo '<td>'.strtoupper($row['category']).'</td>';
    echo '<td>'.$row['capacity'].'</td>';
    echo '<td>'.strtoupper($row['facilityDetail']).'</td>';
    echo '<td>'.$row['ratePerDay'].'</td>';
    echo '<td>'.strtoupper($row['status']).'</td>';
    $facilityId = $row['facilityId'];
    echo '<td>';//delete option
    echo'<form action="processFBS.php" method="POST">';
    echo"<input type='hidden' value='$facilityId' name='facilityIdToDelete'>";
    echo'<input class="button2 button5" type="submit" name="deleteFacilityButton" value="Delete">';
    echo'</form>';
    echo'</td>';

    echo '<td>';//update option
    echo'<form action="updateFacilityForm.php" method="POST">';
    echo"<input type='hidden' value='$facilityId' name='facilityIdToUpdate'>";
    echo'<input class="button2 button5" type="submit" name="updateFacilityButton" value="Update">';
    echo'</form>';
    echo'</td>';
    echo'</tr>';
    $count++;

}
echo'</table>';
echo'</div>';
echo'<br><br>';
?>

<?php
function displaySearchPanel()
{
    echo'<div>';
    echo'<form action="" method="POST">';
    echo'<fieldset style="text-align: center; font-size: 20px;"><legend><b>Search facility:</b></legend>';
    echo'<b>Search Key: </b>';
    echo'<br><input type="text" name="searchKey">';
    echo'<br><br><input class="button button3" type="submit" name="searchByFacilityId" value="By Facility Id">';
    echo'<input class="button button3" type="submit" name="searchByName" value="By Name">';
    echo'<input class="button button3" type="submit" name="searchByCategory" value="By Category">';
    echo'<input class="button button3" type="submit" name="displayAll" value="Display All">';
    echo'</fieldset>';
    echo'</form>';
    echo'</div>';

}
function displayTableHeader()
{
    echo'<table class="w3-table w3-striped w3-border">';
    echo'<br><br><tr style="background-color: #16A085; color:white;">
            <th>Bil</th>
            <th>Facility Id</th>
            <th>Name</th>
            <th>Category</th>
            <th>Capacity</th>
            <th>Facility Detail</th>
            <th>Rate Per Day</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>';
	
}

?>
</html>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
.button {
  background-color: #2F4F4F; /* Green */
  border: none;
  color: white;
  padding: 8px 16px;
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

.button4 {border-radius: 12px;}

.button4:hover {
	  background-color: #A9DFBF;
	  color: black;
	 
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

	.button5 {border-radius: 50%;}
	
	.button5:hover {
	  background-color: #C1CEC6 ;
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
    background-color: #A6D5B8;
    color:black;
  }
  </style>
<?php
include "..\case1\FBS.php";
include "..\menu\menuStaff.php";

echo'<div class="w3-container" style="width:80%;margin:auto">';
// displayHeaderStaff();
echo'<br>';
displaySearchPanel();


$listOfUser = getListOfUser();

if(isSet($_POST['searchByIcNum']))
{
    $listOfUser = searchByIcNum();
}
else if (isSet($_POST['searchByNameUser']))
{
    $listOfUser = searchByNameUser();
}
else if (isSet($_POST['searchByEmail']))
{
    $listOfUser = searchByEmail();
}
else if (isSet($_POST['searchByState']))
{
    $listOfUser = searchByState();
}
else
{
    $listOfUser = getListOfUser();
}
echo "<br><b>There are ". mysqli_num_rows($listOfUser). ' record</b>';

if(mysqli_num_rows($listOfUser) > 0)
    displayTableHeader();

$count=1;
while($row = mysqli_fetch_assoc($listOfUser))
{
    $listOfPassword = getListOfpassword($row['userId']);
    $row2 = mysqli_fetch_assoc($listOfPassword);

    echo'<tr>';
    echo '<td>'.$count.'</td>';
    echo '<td>'.strtoupper($row['icNum']).'</td>';
    echo '<td>'.strtoupper($row['name']).'</td>';
    echo '<td>'.($row2['userId']).'</td>';
    echo '<td>'.($row2['password']).'</td>';
    echo '<td>'.$row['phoneNum'].'</td>';
    echo '<td>'.strtoupper($row['address1']).'</td>';
    echo '<td>'.$row['address2'].'</td>';
    echo '<td>'.strtoupper($row['state']).'</td>';
    echo '<td>'.strtoupper($row['district']).'</td>';
    echo '<td>'.strtoupper($row['postcode']).'</td>';
    echo '<td>'.strtoupper($row['dateOfBirth']).'</td>';

    $userId = $row2['userId'];
    echo '<td>';//delete option
    echo'<form action="..\case1\processFBS.php" method="POST">';
    echo"<input type='hidden' value='$userId' name='userIdToDelete'>";
    echo'<input class="button2 button5" type="submit" name="deleteUserButton" value="Delete">';
    echo'</form>';
    echo'</td>';

    echo '<td>';//update option
    echo'<form action="updateUserFacilityForm.php" method="POST">';
    echo"<input type='hidden' value='$userId' name='userIdToUpdate'>";
    echo'<input class="button2 button5" type="submit" name="updateUserButton" value="Update">';
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
    echo'<fieldset style="font-size: 20px;"><legend><b>Search facility User:</b></legend>';
    echo'<b>Search Key: </b><br>';
    echo'<input type="text" name="searchKeyUser">';
    echo'<br><br><input class="button button4" type="submit" name="searchByIcNum" value="By IC Number">';
    echo'<input class="button button4" type="submit" name="searchByNameUser" value="By Name">';
    echo'<input class="button button4" type="submit" name="searchByEmail" value="By Email">';
    echo'<input class="button button4" type="submit" name="searchByState" value="By State">';
    echo'<input class="button button4" type="submit" name="displayAll" value="Display All">';
    echo'</fieldset>';
    echo'</form>';
    echo'</div>';

}
function displayTableHeader()
{
    echo'<br><br><table class="w3-table w3-striped w3-border">';
    echo'<tr style="background-color: #578E6C ; color:white;">
            <th>Bil</th>
            <th>IC Number</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>password</th>
            <th>Phone Number</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>State</th>
            <th>Pistrict</th>
            <th>Postcode</th>
            <th>Date of Birth</th>
            <th>Delete</th>
            <th>Update</th>
            </tr>';
}

?>
</html>

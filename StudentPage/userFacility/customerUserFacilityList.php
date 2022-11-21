<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
.button {
  background-color: #1A5276; /* Green */
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #1A5276; 
  color: white; 
  border: 2px solid #1A5276;
}

.button1:hover {
  background-color: #2980B9;
  color: white;
}

tr:nth-child(odd)
  {
    background-color: #D4E6F1;
    color:black;
  }

</style>
<?php
include "..\case1\FBS.php";
include "..\menu\menu.php";
echo'<div class="w3-container" style="width:80%;margin:auto">';
//displayHeaderCustomer();
echo'<br>';

session_start();

    if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
        header ("Location:..\Login\login.php");
    }

$userId = $_SESSION['username'];
$listOfUser = getListOfUserCustomer($userId);

echo "<b style='font-size: 25px;'>There are ". mysqli_num_rows($listOfUser). ' record</b><br><br>';

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
    
    echo '<td>';//update option
        echo '<form action="../StaffPage/updateStaffProfileForm.php" method="POST">';
            echo"<input type='hidden' value='$userId' name='CustomerUserIdToUpdate'>";
            echo'<input class= "button button1" type="submit" name="updateCustomerUserButton" value="Update">';
        echo'</form>';
    echo'</td>';

    echo '<td>';//detail option (go to bookingHistory.php)
        echo'<form action="../Rent/historyBooking.php" method="POST">';
            echo"<input type='hidden' value='$userId' name='CustomerUserIdToUpdate'>";
            echo'<input class= "button button1" type="submit" name="case3" value="Detail">';
        echo'</form>';
    echo'</td>';
    echo'</tr>';
    $count++;

}
echo'</table>';
echo'</div>'
?>

<?php
function displaySearchPanel()
{
    echo'<div>';
    echo'<form action="" method="POST">';
    echo'<fieldset><legend>Search facility User:</legend>';
    echo'Search Key: ';
    echo'<input type="text" name="searchKeyUser">';
    echo'<br><input type="submit" name="searchByIcNum" value="By IC Number">';
    echo'<input type="submit" name="searchByNameUser" value="By Name">';
    echo'<input type="submit" name="searchByEmail" value="By Email">';
    echo'<input type="submit" name="searchByState" value="By State">';
    echo'<input type="submit" name="displayAll" value="Display All">';
    echo'</fieldset>';
    echo'</form>';
    echo'</div>';

}
function displayTableHeader()
{
    echo'<table class="w3-table w3-striped w3-border">';
    echo'<tr style="background-color: #2F4F4F; color: white;">
            <th>Bil</th>
            <th>IC Number</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Address 1</th>
            <th>Address 2</th>
            <th>state</th>
            <th>District</th>
            <th>Postcode</th>
            <th>Date of Birth</th>
           
            <th>Update</th>
            <th>Detail</th>

            </tr>';
}

?>
</html>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UTMKL Student Facility Booking</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../StudentPage/assets/images/StudentPagephoto/UTM-LOGO.png">

    <!-- CSS
	============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/vendor/muli-font.css">

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="calendar/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <style>
        .checkAvailableBox {
            background-color: pink;
        }
        body{
            background: url(../StudentPage/assets/images/StudentPagephoto/CampusUTMKL.png);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .button {
            background-color: #2F4F4F; /* Green */
            border: none;
            color: white;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            color: white;
            border: 2px solid #2F4F4F;
        }

        .button1:hover {
            background-color: #008080;
            color: white;
        }

        .button2 {
            background-color: #154360; /* Green */
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
            background-color: #008080;
            color: white;
        }

        tr:nth-child(odd)
        {
            background-color: #D4E6F1;
            color:black;
        }

    </style>
</head>
<?php
session_start();
?>
<body>

<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Add Event</button>
				      </div>
				    </div>
				    <div class="events-container">
				    </div>
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Add New Event </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>

	<script src="calendar/js/jquery.min.js"></script>
  <script src="calendar/js/popper.js"></script>
  <script src="calendar/js/bootstrap.min.js"></script>
  <script src="calendar/js/main.js"></script>
<br><br><div class="w3-container" style="width:70%;margin:auto">

    <div class="w3-container" style="background-color:#008080; color:white">
        <h1>FACILITY</h1>
    </div>
    <form action=" " method ="POST">
        <div class="w3-container w3-white w3-padding-16">
            <div class="w3-row-padding" style="margin:0 -16px;">
                <div class="w3-half w3-margin-bottom">
                    <label for="startDate">Start Date</label>
                    <input type="date" name = "startDate">
                </div>
                <div class="w3-half">
                    <label for="endDate">End Date</label>
                    <input type="date" name = "endDate">
                </div>
            </div>
            <input  style="float: left" class="button button1" type="submit" name = "checkAvailable" value = "Check" >

    </form>

</div>
<?php
include "../case1/FBS.php";
//include "..\menu\menu.php";
if(isSet($_POST['checkAvailable'])) {

    //getUserName();
    echo "<br><b>".$_SESSION['name']."</b>";

    $_SESSION['startDate'] = $_POST['startDate'];
    $_SESSION['endDate'] = $_POST['endDate'];
    displayAvailableList();
}
displayHeaderCustomer();
?>
<?php

function displayAvailableList() {
    $listOfFacility = checkAvailable();

    echo "<b>, There are ". mysqli_num_rows($listOfFacility). ' record : </b><br>';


    if(mysqli_num_rows($listOfFacility) > 0)
        displayTableHeader();

    $count=1;
    while($row = mysqli_fetch_assoc($listOfFacility))
    {

        echo'<tr>';
        echo '<td>'.$count.'</td>';
        echo '<td>'.strtoupper($row['category']).'</td>';
        echo '<td>'.$row['capacity'].'</td>';
        echo '<td>'.strtoupper($row['facilityDetail']).'</td>';
        echo '<td>'.$row['ratePerDay'].'</td>';
        echo '<td>'.strtoupper($row['status']).'</td>';
        $facilityId = $row['facilityId'];

        echo '<td>';//booking option
        echo'<form action="StudentBookingHistory.php" method="POST">';
        echo'<input type="hidden" name="bookFacilityId" value = "'.$row["facilityId"].'">';
        echo'<input class="button2 button5" type="submit" name="bookFacilityButton" value="Book">';
        echo'</form>';
        echo'</td>';
        echo'</tr>';
        $count++;


    }
    echo'</table>';


}

?>

<?php
function displaySearchPanel()
{

    echo'<div>';
    echo'<form action="" method="POST">';
    echo'<fieldset><legend>Search facility:</legend>';
    echo'Search Key: ';
    echo'<input type="text" name="searchKey">';
    echo'<br><input type="submit" name="searchByFacilityId" value="By Facility Id">';
    echo'<input type="submit" name="searchByName" value="By Name">';
    echo'<input type="submit" name="searchByCategory" value="By Category">';
    echo'<input type="submit" name="displayAll" value="Display All">';
    echo'</fieldset>';
    echo'</form>';
    echo'</div>';

}
function displayTableHeader()
{
    echo'<table class="w3-table w3-striped w3-border">';
    echo'<br><tr style="background-color: #008080; color:white;">
                <th>Bil</th>
                <th>Category</th>
                <th>Capacity</th>
                <th>Facility Detail</th>
                <th>Price Per Day</th>
                <th>Status</th>
                <th>Book</th>
				</div>
                </tr>';

}

echo '</div>';
echo '<br>';

?>



</body>
</html>

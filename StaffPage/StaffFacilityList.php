<!DOCTYPE html>
<html>
<?php
session_start(); 
?>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UTMKL Staff Facility Booking</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="StaffPagePicture/UTM-LOGO.png">

    <!-- CSS
	============================================ -->
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/vendor/muli-font.css">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    <style>
        .checkAvailableBox {
            background-color: pink;
        }
        body{
            background: url(StaffPagePicture/building.jpg);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            animation: backwards;
        }

        .chkbutton {
        border-radius: 100px;
        background-color: #154360;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 14px;
        padding: 15px;
        width: 170px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 4px 330px;
        }

        .chkbutton span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .chkbutton span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .chkbutton:hover span {
        padding-right: 25px;
        }

        .button:hover span:after {
        opacity: 1;
        right: 0;
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
            align-items: center;
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

<body>
<br><br><div class="w3-container" style="width:70%;margin:auto">'

<br><br>

<form action=" " method ="POST">
    <div class="w3-container" style="background-color:#265887; color:red; border-radius:20px">
    <h2>CHECK FACILITY</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16" style=" border-radius:20px">
        <div class="w3-row-padding" style="margin:20px; justify-content:center">
            <div class="w3-half w3-margin-bottom">
                <label for="startDate">Start Date</label>
                <input type="date" name = "startDate">
            </div>
            <div class="w3-half w3-margin-bottom">
                <label for="endDate">End Date</label>
                <input type="date" name = "endDate">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name = "checkAvailable" value = "Check"><span></span>Check</button>
        
</form><br><br>

<form>


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
displayHeaderStaff();
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
        echo 'Test';
        echo '<td>';//booking option
        echo'<form action="StaffBookingHistory.php" method="POST">';
        echo'<input type="hidden" name="bookFacilityId" value = "'.$row["facilityId"].'">';
        //echo'<input class="button2 button5" type="submit" name="bookFacilityButton" value="Book">';
        echo'</form>';
        echo '<form action= "..\Test_stripe\index.php" method="POST">';
        echo'<input type="hidden" name="FacilityId" value = "'.$row["facilityId"].'">';
        echo'<input class="button2 button5" type="submit" name="" value="Payment">';
        echo '</form>';
        echo'</td>';
        echo '<td style="text-align: center;"><button style="text-align: center;" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal1"><i class="bi bi-check-circle"></i></button></td>';
                    echo '
                  </button>
                  <div class="modal fade" id="basicModal1" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Approve Verification</h5>
                          <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are u sure wanna <b>Delete</b> this facility record?
                        </div>
                        <div class="modal-footer">';
                          //<button type="submit" name= "gobackVerify" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          //<button type="submit" name="deleteFacility" class="btn btn-primary">Save changes</button>
                        echo '</div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->';
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
    echo'<br><tr style="background-color: #265887; color:white; justify-content:centre; align-itms:centre">
                <th>Bil</th>
                <th>Category</th>
                <th>Capacity</th>
                <th>Facility Detail</th>
                <th>Price Per Day</th>
                <th>Status</th>
                <th>Payment</th>
                <th>Picture</th>
				</div>
                </tr>';

}

echo '</div>';
echo '<br>';

?>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>

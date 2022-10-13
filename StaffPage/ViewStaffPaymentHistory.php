<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Staff Booking History</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="StaffPagePicture/UTM-LOGO.png">

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
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <style>
        tr:nth-child(odd)
        {
            background-color: #A6D5B8;
            color:black;
        }
        body{
            background: url(StaffPagePicture/CampusUTMKL.png);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

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

    </style>

</head>
<?php
session_start();
?>
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
<body>


<?php
include "../case1/FBS.php";
if(isSet($_POST['case3']) || isSet($_POST['bookFacilityButton'])){
    //    displayHeaderCustomer();
    //include "..\menu\menu.php";
}
else if(isSet($_POST['Scase3']) || isSet($_POST['searchKey'])){
    // displayHeaderStaff();
    include "..\menu\menuStaff.php";
    displaySearchPanel();
}
displayHeaderStaff();
?>

<br><br><br><br><b><h1 style="text-align: center">Payment Booking</h1></b>
<?php
displayPaymentHistoryCustomer();
?>


<?php

function displayPaymentHistoryCustomer() {

    $PaymentHistory = PaymentHistory();
    echo "<b>&nbsp;&nbsp;&nbsp;There are ". mysqli_num_rows($PaymentHistory). ' record</b>';

    if(mysqli_num_rows($PaymentHistory) > 0)
        displayTableHeaderCustomer();

    $count=1;
    while($row = mysqli_fetch_assoc($PaymentHistory))
    {
        echo'<tr>';
        echo '<td>'.$count.'</td>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.strtoupper($row['product']).'</td>';
        echo '<td>'.strtoupper($row['amount']).'</td>';
        echo '<td>'.strtoupper($row['currency']).'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo '<td>'.strtoupper($row['created_at']).'</td>';

        $count++;

    }
    echo'</table>';
    echo'</div>';
    echo'<br><br>';
}

function displayBookingHistoryStaff($listOfFacility) {

    echo "<b>&nbsp;There are ". mysqli_num_rows($listOfFacility). ' record</b>';

    if(mysqli_num_rows($listOfFacility) > 0)
        displayTableHeaderStaff();

    $count=1;
    while($row = mysqli_fetch_assoc($listOfFacility))
    {
        echo'<tr>';
        echo '<td>'.$count.'</td>';
        echo '<td>'.strtoupper($row['date_reserved']).'</td>';
        echo '<td>'.strtoupper($row['reserved_by']).'</td>';
        echo '<td>'.strtoupper($row['userId']).'</td>';
        echo '<td>'.strtoupper($row['name']).'</td>';
        echo '<td>'.strtoupper($row['category']).'</td>';
        echo '<td>'.$row['ratePerDay'].'</td>';
        echo '<td>'.strtoupper($row['date_rent_start']).'</td>';
        echo '<td>'.strtoupper($row['date_rent_end']).'</td>';
        echo '<td>'.$row['total_price'].'</td>';

        $count++;

    }
    echo'</table>';
    echo'</div>';

}

function displayTableHeaderCustomer()
{
    echo '<div class="w3-container">';
    echo '<table table class="w3-table w3-striped w3-border">';
    echo '<tr style="background-color: #008B8B">
    <th>Bil</th>
                <th>Transaction ID</th>
                <th>Facility Name</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Payment Date</th>
                </tr>';
    echo '</div>';
}

function displayTableHeaderStaff()
{
    echo'<br><br><table class="w3-table w3-striped w3-border">';
    echo'<tr style="background-color: #578E6C ; color:white;">
                <th>Bil</th>
                <th>Date Reserved</th>
                <th>Reserved By</th>
                <th>User ID</th>
                <th>Facility Name</th>
                <th>Category</th>
                <th>Rate Per Day</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Total Price</th>
                </tr>';
}

function displaySearchPanel()
{
    echo'<div>';
    echo'<form action="" method="POST">';
    echo'<br><br><fieldset style="text-align:center; font-size:20px;"><legend><b>Search booking:</b></legend>';
    echo'<b>User ID: </b><br>';
    echo'<input type="text" name="searchKey">';
    echo'<br><br><input class="button button3" type="submit" name="searchByFacilityId" value="By Facility Id">';
    echo'<input class="button button3" type="submit" name="searchByFacilityName" value="By Facility Name">';
    echo'<input class="button button3" type="submit" name="searchByUserId" value="By User ID">';
    echo'<input class="button button3" type="submit" name="searchByUserName" value="By User Name">';
    echo'<input class="button button3" type="submit" name="showAll" value="Show All">';
    echo'</fieldset>';
    echo'</form>';
    echo'</div>';

}

//bagi boleh search by userId dekat part booking history
?>

</body>

</body>
</html>
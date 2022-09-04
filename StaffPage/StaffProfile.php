<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Staff Profile</title>
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
    body {
        background-image: url("StaffPagePicture/CampusUTMKL.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<?php
include "..\case1\FBS.php";
//include "..\menu\menu.php";
echo'<div class="w3-container" style="width:80%;margin:auto">';
//displayHeaderCustomer();
echo'<br>';

session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
    header ("Location:index.html");
}

$userId = $_SESSION['username'];
$listOfUser = getListOfUserStaff($userId);

//echo "<b style='font-size: 25px;'>There are ". mysqli_num_rows($listOfUser). ' record</b><br><br>';
echo"<br>";
echo"<br>";
echo"<br>";
if(mysqli_num_rows($listOfUser) > 0)
    displayTableHeader();

$count=1;
while($row = mysqli_fetch_assoc($listOfUser))
{
    $listOfPassword = getListOfpassword($row['userId']);
    $row2 = mysqli_fetch_assoc($listOfPassword);

    echo'<tr>';
    echo '<td>'.$count.'</td>';
    echo '<td>'.strtoupper($row['MatricNum']).'</td>';
    echo '<td>'.strtoupper($row['name']).'</td>';
    echo '<td>'.($row2['userId']).'</td>';
    echo '<td>'.($row2['password']).'</td>';
    echo '<td>'.$row['phoneNum'].'</td>';

    $userId = $row2['userId'];

    echo '<td>';//update option
    echo '<form action="updateStaffProfileForm.php" method="POST">';
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
            <th>Matric Number</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Password</th>
            <th>Phone Number</th>
           
            <th>Update</th>
            <th>Detail</th>

            </tr>';
}

?>
<body>
<!-- Header Section Start -->
<div class="header-section header-transparent sticky-header section">
    <div class="header-inner">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-auto order-0">
                    <div class="header-logo">
                        <a href="index.html">
                            <img class="dark-logo" src="StaffPagePicture/UTM-LOGO1.png" width = "100" height="90" alt="UTM Logo">
                        </a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Main Menu Start -->
                <div
                        class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
                    <div class="menu-column-area d-none d-xl-block position-static">
                        <nav class="site-main-menu">
                            <ul>
                                <li>
                                    <a href="index.html"><span
                                                class="menu-text">Homepage</span></a>
                                </li>
                                <li>
                                    <a href="about.html"><span class="menu-text">About Us</span></a>
                                </li>
                                <li>
                                    <a href="service.html"><span class="menu-text">Services</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="work.html"><span class="menu-text">Work</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="work.html"><span class="menu-text">Work</span></a></li>
                                        <li><a href="work-details.html"><span class="menu-text">Work
                                                            Details</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>
                                </li>
                                <li class="has-children">
                                    <a class="active" href="StaffProfile.php"><span class="menu-text">Profile</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="..\LoginSignupPage\index.php"><span class="menu-text">Logout</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Search Start -->
                    <div class="header-search-area ml-xl-7 ml-0">

                        <!-- Header Login Start -->
                        <div class="header-search">
                            <a href="javascript:void(0)" class="header-search-toggle"><i
                                        class="pe-7s-search pe-2x pe-va"></i></a>
                        </div>
                        <!-- Header Login End -->
                    </div>
                    <!-- Header Search End -->

                    <!-- Header Mobile Menu Toggle Start -->
                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                        <button class="toggle">
                            <i class="icon-top"></i>
                            <i class="icon-middle"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                    <!-- Header Mobile Menu Toggle End -->
                </div>
                <!-- Header Main Menu End -->

                <!-- Header Right Start -->
                <div class="col-xl-2 col d-none d-sm-flex justify-content-end order-1 order-xl-2">
                    <a href="contact-us.html" class="btn btn-light btn-hover-primary">Contact Us</a>
                </div>
                <!-- Header Right End -->

            </div>
        </div>
    </div>
</div>
<!-- Header Section End -->
</body>
</html>

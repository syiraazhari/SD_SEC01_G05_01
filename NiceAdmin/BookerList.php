<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Booker List - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/UTM-LOGO.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.3.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<?php
include "..\case1\FBS.php";
session_start();
//$email = $_SESSION['username'];


$userId = $_SESSION['username'];
$listOfStudent = getListOfUserStaff($userId);

//if(mysqli_num_rows($listOfStudent) > 0)
$row = mysqli_fetch_assoc($listOfStudent);
$email =  $row['userId'];
$listOfPassword = getListOfpassword($email);
$row2 = mysqli_fetch_assoc($listOfPassword);

$matricNum = $row['staffId'];
$name = $row['name'];

$phoneNum = $row['phoneNum'];
$image =   $row['Image'];
$password = $row2['password'];
$userType = $row2['userType'];
$vkey = $row2['vkey'];
$verified = $row2['verified'];

?>
<body>


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="homepage.php" class="logo d-flex align-items-center">
            <img src="assets/img/UTM-LOGO.png" alt="">
            <span class="d-none d-lg-block">Admin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Maria Hudson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>Anna Nelson</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>6 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="message-item">
                        <a href="#">
                            <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                            <div>
                                <h4>David Muldon</h4>
                                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                <p>8 hrs. ago</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="../img/<?php echo $image; ?>" width = 40 height = 40 title="<?php echo $image; ?>" class="rounded-circle">
                    <?php
                    echo '<span class="d-none d-md-block dropdown-toggle ps-2">'.$email.'</span>';
                    ?>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <?php
                        echo '<h6>'.$email.'</h6>';
                        echo '<span>'.$userType.'</span>';
                        ?>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="http://webprogramming/MASTER%20PROJECT%20-%20UBS%20FACILITY%20BOOKING/LoginSignupPage/index.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="homepage.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Facilities</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="AdminFacilityList.php">
                        <i class="bi bi-circle"></i><span>View Facility</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href="components-badges.html">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href="components-breadcrumbs.html">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href="components-buttons.html">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href="components-list-group.html">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href="components-modal.html">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href="components-tabs.html">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href="components-pagination.html">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href="components-progress.html">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="components-spinners.html">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href="components-tooltips.html">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html" class="active">
                        <i class="bi bi-circle"></i><span>Verify Account</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed "  href="verifyAccount.php">
                <i class="bi bi-layout-text-window-reverse"></i><span>Verify Account</span>
            </a>
        </li><!-- End Verify Account Nav -->
        <li class="nav-item">
            <a class="nav-link "  href="BookerList.php">
                <i class="bi bi-layout-text-window-reverse"></i><span>Booker List</span>
            </a>
        </li><!-- End Booker List Nav -->


    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Booker List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Booker List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <?php

    displaySearchPanel();

    $listOfUser = getListOfBooker();

    if(isSet($_POST['searchByPhoneNum']))
    {
        $listOfUser = searchByPhoneNum();
    }
    else if (isSet($_POST['searchByName']))
    {
        $listOfUser = searchByNameUser();
    }
    else if (isSet($_POST['searchByMatricNum']))
    {
        $listOfUser = searchByMatricNum();
    }
    else if (isSet($_POST['searchByUserType']))
    {
        $listOfUser = searchByUserType();
    }
    else if (isSet($_POST['searchByEmail']))
    {
        $listOfUser = searchByEmail();
    }
    else
    {
        $listOfUser = getListOfBooker();
    }
    echo "<br><b>There are ". mysqli_num_rows($listOfUser). ' record</b>';
    function displaySearchPanel()
    {
        echo'<div>';
        echo'<form action="" method="POST">';
        echo'<fieldset style="text-align: center; font-size: 20px;"><legend><b>Search booker:</b></legend>';
        echo'<b>Search Key: </b>';
        echo'<br><input type="text" name="searchKeyUser">';
        echo'<br><br><div class="btn-group" role="group" aria-label="Basic outlined example"><input class="btn btn-outline-secondary" type="submit" name="searchByEmail" value="By Email">';
        echo'<input class="btn btn-outline-secondary" type="submit" name="searchByName" value="By Name">';
        echo'<input class="btn btn-outline-secondary" type="submit" name="searchByMatricNum" value="By Matric Number">';
        echo'<input class="btn btn-outline-secondary" type="submit" name="searchByPhoneNum" value="By Phone Number">';
        echo'<input class="btn btn-outline-secondary" type="submit" name="searchByUserType" value="By User Type">';
        echo'<input class="btn btn-outline-secondary" type="submit" name="displayAll" value="Display All">';
        echo'</div>';
        echo'</fieldset>';
        echo'</form>';
        echo'</div>';



    }
    ?>
    <section class="section">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Booker List</h5>
                    <?php
                    
                    if(mysqli_num_rows($listOfUser) > 0) {
                        $count = 1;
                        echo '<table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col" style="text-align: center;">Bil</th>
                      <th scope="col"style="text-align: center;"> Email</th>
                      <th scope="col" style="text-align: center;">Name</th>
                      <th scope="col" style="text-align: center;">Matric Number/Staff Id</th>
                      <th scope="col" style="text-align: center;">Phone Number</th>
                      <th scope="col" style="text-align: center;">User Type</th>
                      <th scope="col" style="text-align: center;">Info</th>
                    </tr>
                  </thead>';
                        while ($acc = mysqli_fetch_assoc($listOfUser)) {
                            echo '<form action= "..\case1\processFBS.php" method="POST">';
                                echo '<tr>';
                                echo '<th scope ="row" style="text-align: center;">' . $count . '</th>';
                                echo '<td style="text-align: center;"><input type="hidden" name="email" value=' . ($acc['userId']) . ' placeholder="Your Email" autocomplete="off">' . ($acc['userId']) . '</td>';
                                echo '<td style="text-align: center;" name = "name" >' . ($acc['name']) . '</td>';
                                echo '<td style="text-align: center;" name = "matricNum" >' . ($acc['MatricNum']) . '</td>';
                                echo '<td style="text-align: center;" name = "phoneNum" >' . ($acc['phoneNum']) . '</td>';
                                echo '<td style="text-align: center;" name = "userType" >' . ($acc['UserType']) . '</td>';
                            echo '<td style="text-align: center;"><button style="text-align: center;" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#basicModal1"><i class="bi bi-info-circle"></i></button></td>';
                            echo '

                  </button>
                  <div class="modal fade" id="basicModal1" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Booker Info</h5>
                          <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">';

                         echo' <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../img/<?php echo $image; ?>" width = 200 height = 119 title="<?php echo $image; ?>" class="rounded-circle">';

              echo '<h2>'.$email.'</h2>';
              echo '<h2>'.$userType.'</h2>'


                  echo '  <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                        </li>



                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>';

                                echo '<div class="col-lg-9 col-md-8">'.$name.'</div>'


                       echo'         <!--<div class="col-lg-9 col-md-8">Sarah Asley</div>-->
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Matric Number</div>';

                                echo '<div class="col-lg-9 col-md-8">'.$matricNum.'</div>

                                
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone Number</div>';

                                echo '<div class="col-lg-9 col-md-8">'.$phoneNum.'</div>';


                           echo' </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>';

                                echo '<div class="col-lg-9 col-md-8">'.$email.'</div>

                                
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">password</div>
                                
                                echo '<div class="col-lg-9 col-md-8">'.$password.'</div>'

                                
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">User Category</div>
                                <?php
                                echo '<div class="col-lg-9 col-md-8">'.$userType.'</div>'

                                
                            </div>

                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <form class="form" id = "form" action="..\case1\processFBS.php" enctype="multipart/form-data" method="post">
                                        <div class="pt-2 ">
                                            <img src="../img/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>"  class="rounded-circle">
                                            <div class="round">
                                                <input type="hidden" name="userId" value="<?php echo $email; ?>">
                                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">

                                                <input type="submit" value="Upload" class="btn btn-info" name="upload">

                                            </div>
                                        </div>
                                        </from>
                                </div>
                            </div>




                            <!-- Profile Edit Form -->
                            <form action= "..\case1\processFBS.php" method="POST">


                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<input name="name" type="text" class="form-control" id="fullName" value="'.$name.'">';
                                        

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Matric Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<div class="col-lg-9 col-md-8">'.$matricNum.'</div>';
                                        echo '<input name="matricNum" type="hidden" class="form-control" id="fullName" value="'.$matricNum.'">';
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Job" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<input name="phoneNum" type="text" class="form-control" id="fullName" value="'.$phoneNum.' ">';
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">E-mail Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<div class="col-lg-9 col-md-8">'.$email.'</div>';
                                        echo '<input name="email" type="hidden" class="form-control" id="fullName" value="'.$email.'"readonly>';
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<div class="col-lg-9 col-md-8">'.$password.'</div>';
                                        echo '<input name="password" type="hidden" class="form-control" id="fullName"  style="color:red"value="'.$password.'"readonly>';
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">User Category</label>
                                    <div class="col-md-8 col-lg-9">
                                        
                                        echo '<div class="col-lg-9 col-md-8">'.$userType.'</div>';
                                        echo '<input name="userType" type="hidden" class="form-control" id="fullName" value="'.$userType.'">';
                                        
                                    </div>
                                </div>

                                <div class="text-center">

                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal1">Save Change</button>

                                    </button>
                                    <div class="modal fade" id="basicModal1" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Update Profile</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are u confirm to save changes?

                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" name="UpdateProfileAdmin" class="btn btn-primary">Confirm</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Basic Modal-->
                                </div>
                            </form><!-- End Profile Edit Form -->
                            <script type="text/javascript">
                                document.getElementById("image").onchange = function(){
                                    document.getElementById("UpdateProfileAdmin").submit();
                                };
                            </script>
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-settings">

                            <!-- Settings Form -->
                            <form>

                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                            <label class="form-check-label" for="changesMade">
                                                Changes made to your account
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                            <label class="form-check-label" for="newProducts">
                                                Information on new products and services
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="proOffers">
                                            <label class="form-check-label" for="proOffers">
                                                Marketing and promo offers
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                            <label class="form-check-label" for="securityNotify">
                                                Security alerts
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End settings Form -->

                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                                <div class="text-center">
                                    
                                    echo '<a href="..\ForgotPassword\resetpassword.php?email='.$email.'" class="btn btn-primary">Click Me to Change Password</a>';
                                    
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>


                    echo '
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name= "gobackVerify" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="approveVerify" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->';
                            echo '</tr>';
                                echo '</form>';
                            $count++;
                            }

                    }



                    ?>
                    <!-- Table with hoverable rows -->
                    </table>
                    <!-- End Table with hoverable rows -->

                </div>
            </div>

        </div>
    </section>


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

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
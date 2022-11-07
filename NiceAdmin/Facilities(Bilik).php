<!DOCTYPE html>
<html lang="en">


    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/UTM-LOGO.png" rel="icon">

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
    $image = $row['Image'];                       
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
            <img src="../img/<?php echo $image; ?>" width = 40 height = 40 alt="Profile" class="rounded-circle">
                <?php
                echo '<span class="d-none d-md-block dropdown-toggle ps-2">'.$email.'</span>';
                ?>
                
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                <?php
                echo '<h6>'.$email.'</h6>';
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
                <a class="dropdown-item d-flex align-items-center" href="../LoginSignupPage/index.php">
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
            <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-menu-button-wide"></i><span>Facilities</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
            <a href="AdminFacilityList.php">
              <i class="bi bi-circle"></i><span>View Facility</span>
            </a>
          </li>
          <li>
            <a href="Addfacility.php">
              <i class="bi bi-circle"></i><span>Add Facility</span>
            </a>
          </li>
          <li>
            <a href="Facilities(Dewan).php">
              <i class="bi bi-circle"></i><span>Hall</span>
            </a>
          </li>
          <li>
            <a href="Facilities(Bilik).php" class="active">
              <i class="bi bi-circle"></i><span>Room</span>
            </a>
          </li>
          <li>
            <a href="Facilities (Sports).php">
              <i class="bi bi-circle"></i><span>Sports</span>
            </a>
          </li>
            </ul>
        </li><!-- End Facilities Nav -->

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
                <a href="tables-general.html">
                <i class="bi bi-circle"></i><span>General Tables</span>
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
            <a class="nav-link collapsed" href="verifyAccount.php">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span>Verify Account</span>
            </a>
        </li>
            <li class="nav-item">
                <a class="nav-link collapsed"  href="BookerList.php">
                    <i class="bi bi-list-ol"></i><span>Booker List</span>
                </a>
            </li><!-- End Booker List Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="https://dashboard.tawk.to/#/inbox/63479eb437898912e96e5bc6/chats">
                    <i class="bi bi-chat-dots"></i>
                    <span>Chat with Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="AddAdminAccount.php">
                    <i class="bi bi-person-plus"></i>
                    <span>Add Admin Account</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

    <div class="pagetitle">
      <h1>Facilities</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Room</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
            <div class="row">
                <div justify-content = center class="col-24">

                            <div class="card">
                                <h5 class="card-title">Bilik Ilmuan 1</h5>
                                <img src="assets/img/Bilik-Ilmuan-1.PNG" alt="" class="rounded-circle">
                            </div>
                            <div>
                            <div class="card">
                                <h5 class="card-title">Bilik Ilmuan 2</h5>
                                <img src="assets/img/Bilik-Ilmuan-2.PNG" alt="" class="rounded-circle">
                            </div>
                            <div class="card">
                                <h5 class="card-title">Bilik Ilmuan 3</h5>
                                <img src="assets/img/Bilik-Ilmuan-1.PNG" alt="" class="rounded-circle">
                            </div>
                            <div class="card">
                                <h5 class="card-title">Bilik Bankuet</h5>
                                <img src="assets/img/Bilik-Bankuet.PNG" alt="" class="rounded-circle">
                            </div>
                </div>
            </div><!-- End Left side columns -->
        </div> 
      </div>
    </section>

  </main><!-- End #main -->





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
  
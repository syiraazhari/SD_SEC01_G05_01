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
<style>
    .search-box {
        border: solid 5px black;
        display: inline-block;
        position: relative;
        border-radius: 50px;
    }
    .search-box input[type="text"] {
        font-family: Raleway, sans-serif;
        font-size: 20px;
        font-weight: bold;
        width: 50px;
        height: 50px;
        padding: 5px 40px 5px 10px;
        border: none;
        box-sizing: border-box;
        border-radius: 50px;
        transition: width 800ms cubic-bezier(0.5, -0.5, 0.5, 0.5) 600ms;
    }
    .search-box input[type="text"]:focus {
        outline: none;
    }
    .search-box input[type="text"]:focus, .search-box input[type="text"]:not(:placeholder-shown) {
        width: 300px;
        transition: width 800ms cubic-bezier(0.5, -0.5, 0.5, 1.5);
    }
    .search-box input[type="text"]:focus + span, .search-box input[type="text"]:not(:placeholder-shown) + span {
        bottom: 13px;
        right: 10px;
        transition: bottom 300ms ease-out 800ms, right 300ms ease-out 800ms;
    }
    .search-box input[type="text"]:focus + span:after, .search-box input[type="text"]:not(:placeholder-shown) + span:after {
        top: 0;
        right: 10px;
        opacity: 1;
        transition: top 300ms ease-out 1100ms, right 300ms ease-out 1100ms, opacity 300ms ease 1100ms;
    }
    .search-box span {
        width: 25px;
        height: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: -13px;
        right: -15px;
        transition: bottom 300ms ease-out 300ms, right 300ms ease-out 300ms;
    }
    .search-box span:before, .search-box span:after {
        content: '';
        height: 25px;
        border-left: solid 5px black;
        position: absolute;
        transform: rotate(-45deg);
    }
    .search-box span:after {
        transform: rotate(45deg);
        opacity: 0;
        top: -20px;
        right: -10px;
        transition: top 300ms ease-out, right 300ms ease-out, opacity 300ms ease-out;
    }
</style>
<?php
  include "..\StudentPage\case1\FBS.php";
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
          <img src="../StudentPage/img/<?php echo $image; ?>" width = 40 height = 40 alt="Profile" class="rounded-circle">
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
            <a class="dropdown-item d-flex align-items-center" href="../StudentPage/LoginSignupPage/index.php">
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
        <ul id="components-nav" class="nav-content collapse show " data-bs-parent="#sidebar-nav">
        <li>
            <a href="AdminFacilityList.php" class="active">
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
            <a href="Facilities(Bilik).php">
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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Facilities</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

      <?php

      displaySearchPanel();

      $listOfFacility = getListOfFacility();

      if(isSet($_POST['searchByFacilityId']))
      {
          $listOfFacility = searchByFacilityId();
      }
      else if (isSet($_POST['searchByFacilityName']))
      {
          $listOfFacility = searchByFacilityName();
      }
      else if (isSet($_POST['searchByCategory']))
      {
          $listOfFacility = searchByCategory();
      }
      else if (isSet($_POST['searchByRatePerDay']))
      {
          $listOfFacility = searchByRatePerDay();
      }
      else if (isSet($_POST['searchByCapacity']))
      {
          $listOfFacility = searchByCapacity();
      }
      else if (isSet($_POST['searchByStatus']))
      {
          $listOfFacility = searchByStatus();
      }

      else
      {
          $listOfFacility = getListOfFacility();
      }
      echo "<br><b>There are ". mysqli_num_rows($listOfFacility). ' record</b>';
      function displaySearchPanel()
      {
          echo'<div>';
          echo'<form action="" method="POST">';
          echo'<fieldset style="text-align: center; font-size: 20px;"><legend><b>Search facilities:</b></legend>';
          //echo'<b>Search Key: </b><br>';
          echo'<div class="search-box">
             <input type="text" placeholder="Search" name="searchKey"/><span></span>
               </div>';
          //echo'<br><input type="text" name="searchKeyUser">';
          echo'<br><br><div class="btn-group" role="group" aria-label="Basic outlined example"><input class="btn btn-outline-secondary" type="submit" name="searchByFacilityId" value="By Facility Id">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="searchByFacilityName" value="By Name">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="searchByCategory" value="By Category">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="searchByCapacity" value="By Capacity">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="searchByRatePerDay" value="By Rate Per Day">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="searchByStatus" value="By Status">';
          echo'<input class="btn btn-outline-secondary" type="submit" name="displayAll" value="Display All">';
          echo '</form>';
          echo'</div>';
          echo'</fieldset>';
          echo'</div>';



      }
      ?>
    <section class="section">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Facilities</h5>
              <?php
                if(mysqli_num_rows($listOfFacility) > 0){
                  //displayTableHeader();
                $count=1;
                  echo '<table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col" style="text-align: center;">Facility ID</th>
                      <th scope="col"style="text-align: center;">Name</th>
                      <th scope="col" style="text-align: center;">Category</th>
                      <th scope="col" style="text-align: center;">Capacity</th>
                      <th scope="col" style="text-align: center;">Facility Detail</th>
                      <th scope="col" style="text-align: center;">Rate Per Day(RM)</th>
                      <th scope="col" style="text-align: center;">Status</th>
                      <th scope="col" style="text-align: center;">Update</th>
                      <th scope="col" style="text-align: center;">Delete</th>
                    </tr>
                  </thead>';
                while($facility = mysqli_fetch_assoc($listOfFacility))
                {
                    //$listOfPassword = getListOfpassword($row['userId']);
                   // $row2 = mysqli_fetch_assoc($listOfPassword);
                  
                   echo '<form action= "..\NiceAdmin\UpdateFacility.php" method="POST">';
                    echo'<tr>';
                    echo '<th scope ="row"style="text-align: center;">'.($facility['facilityId']).'</th>';
                    echo '<input type="hidden" name="facilityId" value='.($facility['facilityId']).'>';
                    echo '<td style="text-align: center;">'.($facility['name']).'</td>';
                    echo '<td style="text-align: center;">'.($facility['category']).'</td>';
                    echo '<td style="text-align: center;">'.($facility['capacity']).'</td>';
                    echo '<td style="text-align: center;">'.($facility['facilityDetail']).'</td>';
                    echo '<td style="text-align: center;">'.($facility['ratePerDay']).'</td>';
                    echo '<td style="text-align: center;">'.($facility['status']).'</td>';
                    
                    echo '<td><a href="..\NiceAdmin\UpdateFacility.php"><button style="position: relative; left: 28%;"" type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i></button></td>';
                    echo '</form>';
                    echo '<form action= "..\StudentPage\case1\processFBS.php" method="POST">';
                    echo '<input type="hidden" name="facilityId2" value='.($facility['facilityId']).'>';
                    echo '<td style="text-align: center;"><button style="text-align: center;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal1"><i class="bi bi-x-circle"></i></button></td>';
                    echo '
                  </button>
                  <div class="modal fade" id="basicModal1" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Delete Facility</h5>
                          <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are u sure wanna <b>Delete</b> this facility record?
                        </div>
                        <div class="modal-footer">
                          
                          <button type="submit" name="deleteFacility" class="btn btn-primary">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->';
                    echo'</tr>';
                    echo '</form>';

                    
                    
                    $count++;
                }
                }else{
                  echo "Error table";
                }
              ?>
              <!-- Table with hoverable rows -->
              </table>
              <!-- End Table with hoverable rows -->

            </div>
          </div>
          
        </div>
    </section>
      <form action="..\NiceAdmin\FPDF\pdfFacilityList.php" method="POST">
      <button type="submit" class="btn btn-success" name="FacilityListPDF">Generate PDF</button>
      </form>

  </main><!-- End #main -->


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
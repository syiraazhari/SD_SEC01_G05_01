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
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="BookerList.php">
                <i class="bi bi-list-ol"></i>
                <span>Booker List</span>
            </a>
        </li>
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
          <li class="breadcrumb-item active">Update Facility</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <?php
        $facilityId = $_POST['facilityId'];
        $recordfacilityId=getFacilityInformation($facilityId);
        $detailfacility = mysqli_fetch_assoc($recordfacilityId);
        ?>

              <h5 class="card-title">Update Facility</h5>

              <!-- General Form Elements -->
            
            
              
        <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Facility Details</h5>

              <form action= "..\StudentPage\case1\processFBS.php" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label" >Facility ID</label>
                  <div class="col-sm-10">
                    <?php
                      echo '<input type="text" name="facilityId" class="form-control"  value ="'.$detailfacility['facilityId'].'" readonly>';
                    ?>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    
                    <?php
                      echo '<input type="text" name="name" class="form-control" value ="'.$detailfacility['name'].'">';
                    ?>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword"  class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="category" aria-label="Default select example">
                      
                      <?php
                      echo '<option selected>'.$detailfacility['category'].'</option>'
                    ?>
                      <option value="FOYER">FOYER</option>
                      <option value="ROOM">ROOM</option>
                      <option value="OPEN AREA">OPEN AREA</option>
                      <option value="HALL">HALL</option>
                      <option value="SPORT">SPORT</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Capacity</label>
                  <div class="col-sm-10">
                  <?php
                      echo '<input type="number" name="capacity" class="form-control" value ="'.$detailfacility['capacity'].'">';
                    ?>
                  </div>
                </div>
                <div class="row mb-3">
                  
                  <label for="inputPassword" class="col-sm-2 col-form-label">Facility Details</label>
                  <div class="col-sm-10">
                    
                    <?php
                      echo '<input type="text" style="height: 100px" name="facilityDetail" class="form-control" value ="'.$detailfacility['facilityDetail'].'">';
                    ?>
                  </div>
                
                </div>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Rate Per Day(RM)</label>
                  <div class="col-sm-10">
                  <?php
                      echo '<input type="number" name="ratePerDay" class="form-control" value ="'.$detailfacility['ratePerDay'].'">';
                    ?>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="status" aria-label="Default select example">
                      
                      <?php
                      echo '<option selected>'.$detailfacility['status'].'</option>'
                    ?>
                      <option value="AVAILABLE">AVAILABLE</option>
                      <option value="NOT AVAILABLE">NOT AVAILABLE</option>
                      <option value="UNDER MAINTENANCE">UNDER MAINTENANCE</option>
                    </select>
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"  name="updateFacilityButton">Update</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Facility Picture</h5>
              <div class="col-md-8 col-lg-9">
                      <form class="form" id = "form" action="..\StudentPage\Facility\processFacility.php" enctype="multipart/form-data" method="post">                      
                            <div class="pt-2 ">
                              <img style="text-align: center;"src="..\StudentPage\Facility\imgFacility\<?php echo $detailfacility['Image']; ?>" width = 590 height = 450 title="<?php echo $detailfacility['Image']; ?>" >
                              
                              <!--<img src="../img/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>" class="rounded-circle">-->
                              <div class="round"style="text-align: center;">
                                <br>
                                <input type="hidden" name="facilityId" value="<?php echo $detailfacility['facilityId']; ?>">
                                <input type="hidden" name="facilityName" value="<?php echo $detailfacility['name']; ?>">
                                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
                                
                                <input type="submit" value="Upload" class="btn btn-primary" >
                              </div>
                            </div>
                      </form>
                      </div>
              
            </div>
          </div>

        </div>
      </div>
    </section>


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
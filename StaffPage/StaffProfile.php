<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile - Staff Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/StudentPagephoto/UTM-LOGO.png">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/css/vendor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/css/vendor/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/ProfileStyle.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/StudentPagephoto/UTM-LOGO.png">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
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
  <!-- Header Section Start -->
  <div id="page" class="section">
        <!-- Header Section Start -->
        <div class="header-section header-transparent sticky-header section">
            <div class="header-inner">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-auto order-0">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="assets/images/StudentPagephoto/UTM-LOGO1.png" width = "100" height="90" alt="UTM Logo">
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
                                                    class="menu-text" style="color:whitesmoke">Homepage</span></a>
                                        </li>
                                        <li>
                                            <a href="about.html"><span class="menu-text" style="color:whitesmoke">About Us</span></a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html"><span class="menu-text" style="color:whitesmoke">Contact Us</span></a>
                                        </li>
                                        <li>
                                            <a href="ViewStaffBookingHistory.php"><span class="menu-text" style="color:whitesmoke">Booking History</span></a>
                                        </li>
                                        <li>
                                            <a href="ViewStaffPaymentHistory.php"><span class="menu-text" style="color:whitesmoke">Payment History</span></a>
                                        </li>
                                        <li class="has-children">
                                            <a  class="active" href="#"><span class="menu-text" style="color:whitesmoke">Profile</span></a>
                                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="StaffProfile.php"><span class="menu-text" >View Profile</span></a></li>
                                                <li><a href="..\LoginSignupPage\index.php"><span class="menu-text">Logout</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

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

    <div id="site-main-mobile-menu" class="site-main-mobile-menu">
        <div class="site-main-mobile-menu-inner">
            <div class="mobile-menu-header">
                <div class="mobile-menu-logo">
                    <a href="index.html"><img src="assets/images/logo/light-logo.png" alt=""></a>
                </div>
                <div class="mobile-menu-close">
                    <button class="toggle">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-menu-content">
                <nav class="site-mobile-menu">
                    <ul>
                        <li>
                            <a href="index.html"><span class="menu-text">Homepage</span></a>
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
                                <li><a href="work-details.html"><span class="menu-text">Work Details</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#"><span class="menu-text">Blog</span></a>
                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                            <ul class="sub-menu">
                                <li><a href="blog-classic.html"><span class="menu-text">Blog Classic</span></a></li>
                                <li><a href="blog-details.html"><span class="menu-text">Blog Details</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
  <main id="main" class="main">

    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="../img/<?php echo $image; ?>" width = 200 height = 119 alt="Profile" class="rounded-circle">
            <?php
              echo '<h2>'.$email.'</h2>';
              echo '<h2>'.$userType.'</h2>'
            ?>
              <div class="social-links mt-2">
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
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Profile Details</h5>
                
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$name.'</div>'

                    ?>
                    <!--<div class="col-lg-9 col-md-8">Sarah Asley</div>-->
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Matric Number</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$matricNum.'</div>'

                    ?>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone Number</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$phoneNum.'</div>'

                    ?>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$email.'</div>'

                    ?>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">password</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$password.'</div>'

                    ?>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">User Category</div>
                    <?php
                    echo '<div class="col-lg-9 col-md-8">'.$userType.'</div>'

                    ?>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <form class="form" id = "form" action="..\case1\processFBS.php" enctype="multipart/form-data" method="post">                      
                            <div class="pt-2 ">
                              <img src="../img/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>" class="rounded-circle">
                              <div class="round">
                                <input type="hidden" name="userId" value="<?php echo $email; ?>">
                                <input type="hidden" name="name" value="<?php echo $name; ?>">
                                <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
                                
                                <input type="submit" value="Upload" class="btn btn-primary" name="upload">
                              </div>
                            </div>
                      </form>
                      </div>
                    </div>
                  <!-- Profile Edit Form -->
                  <form action= "..\case1\processFBS.php" method="POST">
                    

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo '<input name="name" type="text" class="form-control" id="fullName" value="'.$name.'">';
                        ?>
                        
                      </div>
                    </div>

                  
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Matric Number</label>
                      <div class="col-md-8 col-lg-9">
                      <?php
                          echo '<div class="col-lg-9 col-md-8">'.$matricNum.'</div>';
                          echo '<input name="matricNum" type="hidden" class="form-control" id="fullName" value="'.$matricNum.'">';
                        ?>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
                      <div class="col-md-8 col-lg-9">
                      <?php
                          echo '<input name="phoneNum" type="text" class="form-control" id="fullName" value="'.$phoneNum.' ">';
                        ?>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">E-mail Address</label>
                      <div class="col-md-8 col-lg-9">
                      <?php
                         echo '<div class="col-lg-9 col-md-8">'.$email.'</div>';
                          echo '<input name="email" type="hidden" class="form-control" id="fullName" value="'.$email.'"readonly>';
                        ?>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Password</label>
                      <div class="col-md-8 col-lg-9">
                      <?php
                          echo '<div class="col-lg-9 col-md-8">'.$password.'</div>';
                          echo '<input name="password" type="hidden" class="form-control" id="fullName"  style="color:red"value="'.$password.'"readonly>';
                        ?>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">User Category</label>
                      <div class="col-md-8 col-lg-9">
                      <?php
                          echo '<div class="col-lg-9 col-md-8">'.$userType.'</div>';
                          echo '<input name="userType" type="hidden" class="form-control" id="fullName" value="'.$userType.'">';
                        ?>
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
                          
                          <button type="submit" name="UpdateProfileStaff" class="btn btn-primary">Confirm</button>
                          
                        </div>
                      </div>
                    </div>
                  </div><!-- End Basic Modal-->
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form>
                  
                    <div class="text-center">
                      <?php
                      echo '<a href="..\ForgotPassword\resetpassword.php?email='.$email.'" class="btn btn-primary">Click Me to Change Password</a>';
                      ?>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- Vendor JS Filescss/vendor/ -->
  <script src="assets/css/vendor/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/css/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/css/vendor/vendor/chart.js/chart.min.js"></script>
  <script src="assets/css/vendor/vendor/echarts/echarts.min.js"></script>
  <script src="assets/css/vendor/vendor/quill/quill.min.js"></script>
  <script src="assets/css/vendor/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/css/vendor/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/css/vendor/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
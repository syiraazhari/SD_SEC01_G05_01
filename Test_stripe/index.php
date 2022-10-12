<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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


  <title>Payment</title>
</head>
<body>
  <div class="container">
    <?php
      include "..\case1\FBS.php";
      session_start(); 

      $email = $_SESSION['username'];
      $bookingfacilityId = $_POST["FacilityId"];

      $FacilityInformation = getFacilityInformation($bookingfacilityId);
      $row = mysqli_fetch_assoc($FacilityInformation);

      
        $recordfacilityId=getFacilityInformation($bookingfacilityId);
        $detailfacility = mysqli_fetch_assoc($recordfacilityId);

      echo '<h2 class="my-4 text-center">'.$row['name'].'</h2>';
    ?>
    <form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
      <div class="row mb-3">
         
            <div class="card-body">

              <!-- Slides only carousel -->
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img style="text-align: center;" src="..\Facility\imgFacility\<?php echo $detailfacility['Image']; ?>" width = 1300 height = 700 title="<?php echo $detailfacility['Image']; ?>" >
                  </div>
                  
                </div>
              </div><!-- End Slides only carousel-->
                      
                      </div>
                    </div>  

                    
                   
                    
       
  </div>
  <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Facility Details</h5>
              
              <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Facility Id</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="FacilityId" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["facilityId"].'" readonly>';
                        ?>
                      </div>
                    </div>
              <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Name</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="name" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["name"].'" readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Category</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="category" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["category"].'"readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Capacity</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="capacity" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["capacity"].'"readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Detail</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="facilityDetail" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["facilityDetail"].'"readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Rate Per Day</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="ratePerDay" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["ratePerDay"].'"readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Status</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          echo'<input type="text" name="status" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["status"].'"readonly>';
                        ?>
                      </div>
                    </div>

              <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                           echo '<input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" value = "'.$email.'" readonly>';
                        ?>
                      </div>
                    </div>
              
            </div>
          </div>

        </div>
      <?php
      $dateRentStart = $_SESSION['startDate'];
      $dateRentEnd = $_SESSION['endDate'];
      
      $totalPrice = getTotalPrice($dateRentStart, $dateRentEnd, $bookingfacilityId);
      ?>
        <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking Details</h5>
              <div class="row mb-3">
                
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Date Rent Start</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                           echo '<input type="text" name="startDate" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$dateRentStart.'" readonly>';
                        ?>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Date Rent End</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                           echo '<input type="text" name="endDate" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$dateRentEnd.'" readonly>';
                        ?>
                      </div>
                    </div>
              <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Total</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                           echo '<input type="text" name="totalPrice" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$totalPrice.'" readonly>';
                        ?>
                      </div>
                    </div>
              <!-- Bordered Table -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Payment</h5>
              
              <!-- Small tables -->
              <div class="col-md-8 col-lg-9">
              <?php
     
     //echo'<input type="text" name="name" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["name"].'">';
     //echo'<input type="text" name="category" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["category"].'">';
     //echo'<input type="text" name="capacity" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["capacity"].'">';
     //echo'<input type="text" name="facilityDetail" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["facilityDetail"].'">';
     //echo'<input type="text" name="ratePerDay" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["ratePerDay"].'">';
     //echo'<input type="text" name="status" class="form-control mb-3 StripeElement StripeElement--empty" value = "'.$row["status"].'">';
     echo '<input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
     <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">';
     ?>
     
      <div id="card-element" class="form-control">
        <!-- a Stripe Element will be inserted here. -->
      </div>
      
      <!-- Used to display form errors -->
      <div id="card-errors" role="alert"></div>
    </div>
    
    <?php
      echo '<input type="hidden" name="bookFacilityId" value = "'.$row["facilityId"].'">';
    ?>
    <button style="height:40px;width:600px" type="submit" name="completePayment" class="btn btn-primary">Pay</button>
  </form>

  <form action= "..\case1\processFBS.php" method="POST">
  <br>
  <button style="height:40px;width:600px" type="submit" name="cancelPayment" class="btn btn-primary">Cancel Payment</button>
  </form>
                      </div>
              
            </div>
          </div>
            
        </div>
      </div>
              <!-- End small tables -->

            </div>
          </div>

    </section>















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>

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
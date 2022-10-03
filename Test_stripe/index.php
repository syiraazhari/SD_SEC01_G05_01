<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Pay Page</title>
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

      echo $row['facilityId'];
      echo $row['name'];
      echo $row['category'];
      echo $row['capacity'];
      echo $row['facilityDetail'];
      echo $row['ratePerDay'];
      echo $row['status'];
      echo $bookingfacilityId ;
      echo '<h2 class="my-4 text-center">'.$row['name'].'</h2>';
    ?>
    <form action="./charge.php" method="post" id="payment-form">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
       <?php
       echo'<input type="hidden" name="FacilityId" value = "'.$row["facilityId"].'">';
       echo'<input type="hidden" name="name" value = "'.$row["name"].'">';
       echo'<input type="hidden" name="category" value = "'.$row["category"].'">';
       echo'<input type="hidden" name="capacity" value = "'.$row["capacity"].'">';
       echo'<input type="hidden" name="facilityDetail" value = "'.$row["facilityDetail"].'">';
       echo'<input type="hidden" name="ratePerDay" value = "'.$row["ratePerDay"].'">';
       echo'<input type="hidden" name="status" value = "'.$row["status"].'">';
        echo '<input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" value = "'.$email.'" readonly>';
       ?>
       
        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>
        
        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>
      

      <button>Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>
</body>
</html>
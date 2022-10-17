<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UTMKL Student Facility Booking</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Agench is an elegant design, 100% responsive Bootstrap 5 template. It is best for agency websites and marketing companies.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../StudentPage/assets/images/StudentPagephoto/UTM-LOGO.png">

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
    
<?php
session_start();
?>

    <style>
        .checkAvailableBox {
            background-color: pink;
        }
        body{
            background: url(../StudentPage/assets/images/StudentPagephoto/CampusUTMKL.png);
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(../StudentPage/assets/images/StudentPagephoto/CampusUTMKL.png);
        }

        .background body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #222;
            margin-top: 5%;
        }
        
        .background-border {
             --border-width: 3px;
             position: relative;
             display: flex;
             justify-content: center;
             align-items: center;
             width: 100px;
             height: 250px;
             font-family: Lato, sans-serif;
             font-size: 2.5rem;
             text-transform: uppercase;
             color: white;
             background: #222;
             border-radius: var(--border-width);
        }

        .background-border::after{
            position: absolute;
            content: "";
            top: calc(-1 * var(--border-width));
            left: calc(-1 * var(--border-width));
            z-index: -1;
            width: calc(100% + var(--border-width) * 2);
            height: calc(100% + var(--border-width) * 2);
            background: linear-gradient(60deg, #5f86f2, #a65ff2, #f25fd0, #f25f61, #f2cb5f, #abf25f, #5ff281, #5ff2f0);
            background-size: 300% 300%;
            background-position: 0 50%;
            border-radius: calc(2 * var(--border-width));
            animation: moveGradient 3s alternate infinite;
        }
        
        @keyframes moveGradient {
         50% {
           background-position: 100% 50%;
         }
        }


        .content body {
        	display: flex;
        	background: #000;
        	min-height: 100vh;
        	align-items: center;
        	justify-content: center;
        }

        .content {
        	position: relative;
        }

        .content h2 {
        	color: #fff;
        	font-size: 4em;
        	position: absolute;
        	transform: translate(-50%, -50%);
          margin-left: 38%;
        }

        .content h2:nth-child(1) {
        	color: transparent;
        	-webkit-text-stroke: 2px #03a9f4;
        }

        .content h2:nth-child(2) {
        	color: #03a9f4;
        	animation: animate 4s ease-in-out infinite;
        }

        @keyframes animate {
        	0%,
        	100% {
        		clip-path: polygon(
        			0% 45%,
        			16% 44%,
        			33% 50%,
        			54% 60%,
        			70% 61%,
        			84% 59%,
        			100% 52%,
        			100% 100%,
        			0% 100%
        		);
        	}
        
        	50% {
        		clip-path: polygon(
        			0% 60%,
        			15% 65%,
        			34% 66%,
        			51% 62%,
        			67% 50%,
        			84% 45%,
        			100% 46%,
        			100% 100%,
        			0% 100%
        		);
        	}
        }
        .btn1 body {
          height: 100vh;
          background: #eee;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .btn1 {
          width: 150px;
          height: 50px;
          border: 5px solid purple;
          font-family: 'Cinzel', serif;
          font-weight: 700;
          font-size: 20px;
          color: purple;
          cursor: pointer;
          -webkit-tap-highlight-color: transparent;
          display: flex;
          align-items: center;
          justify-content: center;
          position: relative;
          z-index: 0;
          transition: 1s;
          margin: auto;
          margin-bottom: 2%;
          margin-top: 2%;
          font-size:medium; 
          font-weight:900;
        }

        .btn1::before, .btn::after {
          position: absolute;
          background: #eee;
          z-index: -1;
          transition: 1s;
          content: '';
        }

        .btn1::before {
          height: 50px;
          width: 130px;
        }

        .btn1::after {
          width: 150px;
          height: 30px;
        }

        .noselect {
          -webkit-touch-callout: none;
            -webkit-user-select: none;
             -khtml-user-select: none;
               -moz-user-select: none;
                -ms-user-select: none;
                    user-select: none;
        }

        .btn1:hover::before {
          width: 0px;
          background: #fff;
        }

        .btn1:hover::after {
          height: 0px;
          background: #fff;
        }

        .btn1:hover {
          background: #fff;
        }

        tr:nth-child(odd)
        {
            background-color: #D4E6F1;
            color:black;
        }

        tr:nth-child(even)
        {
            background-color: #D4E6F1;
            color:black;
        }

        tr:hover :nth-child(even) {background-color: darkcyan;}

        tr:hover :nth-child(odd) {background-color: darkgoldenrod;}

        th {
             background-color: #03a9f4;
             color: white;
             pointer-events: none;
        }           

    </style>
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

<br><br><br>
<body>
<br><br><br>
<div class="content" style="margin-left: 20%;">
    <h2>SEARCH FACILITY</h2>
    <h2>SEARCH FACILITY</h2>
</div>
<br><br><br>
<div class="background-border" style="width:50%;margin:auto; border-radius:20px">
<form action=" " method ="POST">
            <div class="w3-half w3-margin-bottom">
                <label style="color:white; font-size:medium; font-weight:900" for="startDate">Start Date</label>
                <br><input type="date" style="margin-left: 5%;font-size:25px;text-transform:uppercase; text-align:center" name = "startDate">
            </div>
            <div class="w3-half w3-margin-bottom">
                <label style="margin-left: 5%;color:white; font-size:medium; font-weight:900" for="endDate">End Date</label>
                <br><input type="date" style="margin-left: 15%;font-size: 25px;text-transform:uppercase; text-align:center" name = "endDate">
            </div >
            <button class="btn1" type="submit" name = "checkAvailable" value = "Check">
                <br><br>
                <span class="noselect">SEARCH</span>
            </button>
</form><br><br>
</div>
</body>

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
displayHeaderCustomer();
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
        echo '<td>'.strtoupper($row['name']).'</td>';
        echo '<td>'.strtoupper($row['category']).'</td>';
        echo '<td>'.$row['capacity'].'</td>';
        echo '<td>'.strtoupper($row['facilityDetail']).'</td>';
        echo '<td>'.$row['ratePerDay'].'</td>';
        echo '<td>'.strtoupper($row['status']).'</td>';
        $facilityId = $row['facilityId'];
        
        $recordfacilityId=getFacilityInformation($facilityId);
        $detailfacility = mysqli_fetch_assoc($recordfacilityId);
          
          echo '<td>';//booking option
        echo'<form action="StudentBookingHistory.php" method="POST">';
        echo'<input type="hidden" name="bookFacilityId" value = "'.$row["facilityId"].'">';
        //echo'<input class="button2 button5" type="submit" name="bookFacilityButton" value="Book">';
        echo'</form>';
        echo '<form action= "..\Test_stripe\index.php" method="POST">';
        echo'<input type="hidden" name="FacilityId" value = "'.$row["facilityId"].'">';
        echo'<input type="hidden" name="pictureCode" id= "pCode" value = "'.$detailfacility['Image'].'">';
        echo'<input class="button2 button5" type="submit" name="" value="View">';
        echo '</form>';
        echo'</td>';
        
        //echo '<td>'.$detailfacility['Image'].'</td>';
        //echo '<img class="img-fluid" src="../Facility/imgFacility/'.$detailfacility['Image'].'" title = "'.$detailfacility['Image'].'">';
        //echo '<img class="img-fluid" style="width:900px; height:650px;" src="..\Facility\imgFacility\"'.$detailfacility['Image'].'"" title = "'.$detailfacility['Image'].'">';
        
        echo'</tr>';
        $count++;
        
        //C:\wamp64\www\WebProgramming\www\MASTER PROJECT - UBS FACILITY BOOKING\StaffPage\StaffFacilityList.php
        //C:\wamp64\www\WebProgramming\www\MASTER PROJECT - UBS FACILITY BOOKING\Facility\imgFacility
        //style="width:900px; height:650px;"

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
                <th>Name</th>
                <th>Category</th>
                <th>Capacity</th>
                <th>Facility Detail</th>
                <th>Price Per Day</th>
                <th>Status</th>
                <th>View</th>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Admin - Main Page</title>

    <style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}


        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {font-size: 11px}
        }

        hr.new1 {
            border-top: 2px solid black;
        }

    </style>
</head>

<body>

    <?php
        session_start();
        include '..\menu\menuStaff.php';
    ?>

    <br><br>
    <div class="slideshow-container">

    <div class="mySlides fade" style="text-align:center">
    <div class="numbertext">1 / 3</div>
    <img src="bg1.png" style="width:90%">
    </div> 

    <!--<div class="mySlides fade" style="text-align:center">
    <div class="numbertext">2 / 3</div>
    <img src="bg2.png" style="width:80%">
    </div> -->

    <div class="mySlides fade" style="text-align:center">
    <div class="numbertext">3 / 3</div>
    <img src="bg3.png" style="width:90%">
    </div>

    <div class="mySlides fade" style="text-align:center">
    <div class="numbertext">3 / 3</div>
    <img src="bg4.png" style="width:90%">
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    
    
    <?php

            include '..\case1\FBS.php';

            // displayHeaderStaff();
            // displayLogoutHeader();

            // session_start();

        if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
            header ("Location:..\Login\login.php");
        }
        
        $userId = $_SESSION['username'];
        $curTime = $_SESSION['curTime'];
        //echo 'TIME:'. date('G:i:sa');
        
        //echo 'TIME:'.$_SESSION['curTime'];
        $customerInfoRow = getListOfUserCustomer($userId);
        $currentUser = mysqli_fetch_assoc($customerInfoRow);
        
        echo '<h1><center>Welcome to Staff Home Page</center></h1>';
        echo "<h4><center>Email:".$userId."</center></h4>";
        echo "<h5><center>Welcome back  </h5></center><h4><center>".$currentUser['name'].'</center></h4>';
        echo "<hr><h4><center>Log in time:".$curTime."</center></h4>";

    ?>
    
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>
</html>
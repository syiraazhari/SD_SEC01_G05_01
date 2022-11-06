<?php

function addFacility()
{
    $facilityId = $_POST['facilityId'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $capacity = $_POST['capacity'];
    $facilityDetail = $_POST['facilityDetail'];
    $ratePerDay = $_POST['ratePerDay'];
    $status = $_POST['status'];
    $con = mysqli_connect('localhost','projectsd','projectsd','projectsd');

    $sql="INSERT INTO facility(facilityId, name, category, capacity, facilityDetail, ratePerDay, status)
    VALUES ('$facilityId', '$name', '$category', '$capacity', '$facilityDetail', '$ratePerDay', '$status')";
    $qry = mysqli_query($con,$sql);
    echo $sql;
    if(!$qry) {
        echo 'Error adding record';
        return false;
    }else{
        echo 'Record added';
        return true;
    }

}
function getListOfFacility()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility order by facilityId';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function deleteFacility()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $facilityIdToDelete = $_POST['facilityId2'];
    $sql = "delete from facility where facilityId ='".$facilityIdToDelete."'";
    echo $sql;
    $qry = mysqli_query($con, $sql);
    return $qry;

}
function updateFacilityInformation()
{

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $facilityId = $_POST['facilityId'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $capacity = $_POST['capacity'];
    $facilityDetail = $_POST['facilityDetail'];
    $ratePerDay = $_POST['ratePerDay'];
    $status = $_POST['status'];

    $sql = 'update facility set ';
    $sql .= 'name= "' . $name . '",category="' . $category . '", capacity="' . $capacity . '"
    , facilityDetail="' . $facilityDetail . '", ratePerDay="' . $ratePerDay . '", status="' . $status . '"';
    $sql .= 'where facilityId = "' . $facilityId . '"';

    echo $sql;
    $qry = mysqli_query($con, $sql);
    //return $qry;

    if(!$qry){
        echo 'Record adding error 1';
        
    }else{
        echo 'Record added';
        
    }
    return $qry;

}

function searchByFacilityId()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where facilityId = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByFacilityName()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where name = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByCategory()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where category = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByCapacity()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where capacity = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByRatePerDay()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where ratePerDay = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByStatus()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from facility ';
    $sql .= 'where status = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByName()
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo ';
    $sql .= 'where name = "'.$_POST['searchKey'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function getFacilityInformation($facilityId)
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'select * from facility ';
    $sql .= 'where facilityId = "'.$facilityId.'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function addRegisterStaff(){
    session_start(); 
    $_SESSION['username']=$_POST['name']; 
    $_SESSION['email']=$_POST['userId'];
    

    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $userId =$_POST['userId'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];
    

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    $mysqli = new MySQLi("localhost", "projectsd", "projectsd", "projectsd");
    
    if(mysqli_connect_errno()){
        echo 'fail to connect to mysql'.mysqli_connect_error();
        exit;
    }else{
        echo 'connected to mysql';
    }
    $name = $mysqli->real_escape_string($name);
    $vkey = md5(time().$name);
    //$password = md5($password);

    $sql = "insert into user(userId, password, userType,vkey)
    values('$userId','$password','Staff','$vkey')";
    $sql2 ="insert into userinfoStaff(staffId,name, userId,phoneNum) 
    values('$MatricNum','$name','$userId','$phoneNum')";
    $sql3 ="insert into bookerlist(MatricNum,name, userId,phoneNum,userType) 
    values('$MatricNum','$name','$userId','$phoneNum','Staff')";

    echo $sql;
    echo $sql2;
    echo $sql3;
    $qry =mysqli_query($con,$sql);//execute query
    $qry2 =mysqli_query($con,$sql2);
    $qry3 =mysqli_query($con,$sql3);
      if(!$qry){
          echo 'Record adding error 1';
          
      }else{
          echo 'Record added';
          
      }

      echo $sql2;
      if(!$qry2){
        echo 'Record adding error';
        
    }else{
        echo 'Record added';
        
    }
    if(!$qry3){
        echo 'Record adding error';

    }else{
        echo 'Record added';

    }
    echo "we in email";
    $email = $userId;
    //echo $email;
    //echo $username;
    $subject = "Email Verification";
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: cheesen987@gmail.com';

    $message = ' ';
    $message .= "<a href=http://52.77.215.21/SD_SEC01_G05_01/LoginSignupPage/verify.php?vkey='".$vkey."'>Register Account<a/>";
    //$message .= '<a href ="'. $url.'">'.$url.'</a></p>';

    //if (mail($email,$subject,$message)) {

    if (mail($email,$subject,$message,$headers)) {
            echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
    } else {
            echo "<h4>Can't send email to $email</h4>";
    }

}

function addAdminAccount()
{

    $name = $_POST['name'];
    $staffId= $_POST['staffId'];
    $userId =$_POST['email'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];
    $userType = $_POST['userType'];

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    $mysqli = new MySQLi("localhost", "projectsd", "projectsd", "projectsd");

    if(mysqli_connect_errno()){
        echo 'fail to connect to mysql'.mysqli_connect_error();
        exit;
    }else{
        echo 'connected to mysql';
    }
    $name = $mysqli->real_escape_string($name);
    $vkey = md5(time().$name);


    $sql = "insert into user(userId, password, userType,vkey, verified)
    values('$userId','$password','$userType','$vkey','1')";
    $sql2 ="insert into userinfoStaff(staffId,name, userId,phoneNum) 
    values('$staffId','$name','$userId','$phoneNum')";
    $sql3 ="insert into bookerlist(MatricNum,name, userId,phoneNum,userType) 
    values('$staffId','$name','$userId','$phoneNum','$userType')";
    echo $sql;
    echo $sql2;
    echo $sql3;
    $qry =mysqli_query($con,$sql);//execute query
    $qry2 =mysqli_query($con,$sql2);
    $qry3 =mysqli_query($con,$sql3);
}
function addRegister(){
    session_start(); 
    $_SESSION['username']=$_POST['name']; 
    $_SESSION['email']=$_POST['userId'];
    

    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $userId =$_POST['userId'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    $mysqli = new MySQLi("localhost", "projectsd", "projectsd", "projectsd");

    if(mysqli_connect_errno()){
        echo 'fail to connect to mysql'.mysqli_connect_error();
        exit;
    }else{
        echo 'connected to mysql';
    }
    $name = $mysqli->real_escape_string($name);
    $vkey = md5(time().$name);


    $sql = "insert into user(userId, password, userType,vkey)
    values('$userId','$password','Student','$vkey')";
    $sql2 ="insert into userinfo(MatricNum,name, userId,phoneNum) 
    values('$MatricNum','$name','$userId','$phoneNum')";
    $sql3 ="insert into bookerlist(MatricNum,name, userId,phoneNum,userType) 
    values('$MatricNum','$name','$userId','$phoneNum','Student')";
    echo $sql;
    echo $sql2;
    echo $sql3;
    $qry =mysqli_query($con,$sql);//execute query
    $qry2 =mysqli_query($con,$sql2);
    $qry3 =mysqli_query($con,$sql3);
      if(!$qry){
          echo 'Record adding error 1';
          
      }else{
          echo 'Record added';
          
      }

      echo $sql2;
      if(!$qry2){
        echo 'Record adding error';
        
    }else{
        echo 'Record added';
        
    }
    if(!$qry3){
        echo 'Record adding error';

    }else{
        echo 'Record added';

    }
    echo "we in email";
    $email = $userId;
    //echo $email;
    //echo $username;
    $subject = "Email Verification";
    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: cheesen987@gmail.com';

    $message = ' ';
    $message .= "<a href=http://52.77.215.21/SD_SEC01_G05_01/LoginSignupPage/verify.php?vkey='".$vkey."'>Register Account<a/>";
    //$message .= '<a href ="'. $url.'">'.$url.'</a></p>';

    //if (mail($email,$subject,$message)) {

    if (mail($email,$subject,$message,$headers)) {
            echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
    } else {
            echo "<h4>Can't send email to $email</h4>";
    }

}


function userLogin($userId){
    $userName =$_POST['username'];
    $password =$_POST['password'];
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    echo 'in login';
    if(mysqli_connect_errno()){
        echo 'fail to connect to mysql'.mysqli_connect_error();
        exit;
    }else{
        echo 'connected to mysql';
    }
    
    $sql = 'select * from user ';
    $sql .= 'where userId = "'.$userId.'"';
    $qry = mysqli_query($con, $sql);
    return $qry;

}
function displayLogoutHeader(){
    echo '
    <h2 style="text-align: center"> HOME PAGE Customer </h2>
            <form action= "..\case1\processFBS.php" method="POST">
                <input type="submit" value="Logout" name="logout">
                
                
            </form>';
}

function displayHeaderCustomer(){


    echo'
    <!-- Header Section Start -->
        <div class="header-section header-transparent sticky-header section">
            <div class="header-inner">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-auto order-0">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="../StudentPage/assets/images/StudentPagephoto/UTM-LOGO1.png" width = "100" height="90" alt="UTM Logo">
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
                                            <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>

                                        </li>
                                        <li>
                                            <a href="ViewStudentBookingHistory.php"><span class="menu-text">Booking History</span></a>
                                        </li>
                                        <li>
                                            <a href="ViewStudentPaymentHistory.php"><span class="menu-text">Payment History</span></a></li>
                                        </li>
                                        <li class="has-children">
                                            <a href="#"><span class="menu-text">Profile</span></a>
                                            <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                            <ul class="sub-menu">
                                                <li><a href="StudentProfile.php"><span class="menu-text" >View Profile</span></a></li>
                                                <li><a href="..\LoginSignupPage\index.php"><span class="menu-text">Logout</span></a></li>
                                            </ul>
                                        </li>
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
        <!-- Header Section End -->';
}

function displayHeaderStaff(){

    echo '
    <!-- Header Section Start -->
        <div class="header-section header-transparent sticky-header section">
            <div class="header-inner">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-auto order-0">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img class="dark-logo" src="assets/images/StudentPagephoto/UTM-LOGO1.png" width = "120" height="90" alt="UTM Logo">
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
                                            <a href="contact-us.html"><span class="menu-text">Contact Us</span></a>

                                        </li>
                                        <li>
                                            <a href="ViewStaffBookingHistory.php"><span class="menu-text">Booking History</span></a>
                                        </li>
                                        <li>
                                            <a href="ViewStaffPaymentHistory.php"><span class="menu-text">Payment History</span></a></li>
                                        </li>
                                        <li class="has-children">
                                            <a href="#"><span class="menu-text">Profile</span></a>
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
        <!-- Header Section End -->';
}

function getListOfUser(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo order by userId';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function getListOfBooker(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist order by userId';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function getListOfAccount(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'SELECT * FROM user order by verified, userType';
    $qry = mysqli_query($con, $sql);
    return $qry;
}



function searchByPhoneNum(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist ';
    $sql .= 'where phoneNum = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function searchByNameUser(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist ';
    $sql .= 'where name = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function searchByEmail(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist ';
    $sql .= 'where userId = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function searchByUserType(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist ';
    $sql .= 'where UserType = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function searchByMatricNum(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from bookerlist ';
    $sql .= 'where MatricNum = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function deleteUser($email,$userType){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $userIdToDelete = $email;
    $sql = "delete from bookerlist where userId ='".$userIdToDelete."'";
    $qry = mysqli_query($con, $sql);

     
    if($userType == "Student"){

        $sql2 = "delete from user where userId ='".$userIdToDelete."'";
        $qry2 = mysqli_query($con, $sql2);
        $sql3 = "delete from userinfo where userId ='".$userIdToDelete."'";
        $qry3 = mysqli_query($con, $sql3);

    }else if($userType == "Staff"){
        $sql4 = "delete from user where userId ='".$userIdToDelete."'";
        $qry4 = mysqli_query($con, $sql4);
        $sql5 = "delete from userinfo where userId ='".$userIdToDelete."'";
        $qry5 = mysqli_query($con, $sql5);


    }


    return $qry;
}

function updateStaffProfile(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $name = $_POST['name'];
    $MatricNum = $_POST['matricNum'];
    $phoneNum =$_POST['phoneNum'];
    $userId =$_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    
    $_SESSION['username']=$userId;  
    $_SESSION['password']=$password; 
    
    $sql = 'update userinfostaff set ';
    $sql .= 'staffId= "' . $MatricNum . '",name="' . $name . '", userId="' . $userId . '"
    , phoneNum="' . $phoneNum . '"';
    $sql .= 'where userId = "' . $userId . '"';
    
    $sql2 = 'update user set ';
    $sql2 .= 'userId= "' . $userId . '",password="' . $password . '",userType="' . $userType . '"';
    $sql2 .= 'where userId = "' . $userId . '"';

    $sql3 = 'update bookerlist set ';
    $sql3 .= 'userId= "' . $userId . '",MatricNum="' . $MatricNum . '",UserType="' . $userType . '",phoneNum="' . $phoneNum . '",name="' . $name . '"';
    $sql3 .= 'where userId = "' . $userId . '"';
    

    //echo $sql;
    //echo'<br>'.$sql2;
    $qry = mysqli_query($con, $sql);
    $qry2 = mysqli_query($con, $sql2);
    $qry3 = mysqli_query($con, $sql3);
    echo $qry3;
    if((!$qry) && (!$qry2)){
        echo 'Record adding error';
        
    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }

    if((!$qry3)){
        echo 'Record adding error at qry3';
        
    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }
}

function updateStudentProfile(){
    session_start();


    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $name = $_POST['name'];
    $MatricNum = $_POST['matricNum'];
    $phoneNum =$_POST['phoneNum'];
    $userId =$_POST['email'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    
    $_SESSION['username']=$userId;  
    $_SESSION['password']=$password; 
    
    $sql = 'update userinfo set ';
    $sql .= 'MatricNum= "' . $MatricNum . '",name="' . $name . '", userId="' . $userId . '"
    , phoneNum="' . $phoneNum . '"';
    $sql .= 'where userId = "' . $userId . '"';

    $sql2 = 'update user set ';
    $sql2 .= 'userId= "' . $userId . '",password="' . $password . '",userType="' . $userType . '"';
    $sql2 .= 'where userId = "' . $userId . '"';

    $sql3 = 'update bookerlist set ';
    $sql3 .= 'userId= "' . $userId . '",MatricNum="' . $MatricNum . '",UserType="' . $userType . '",phoneNum="' . $phoneNum . '",name="' . $name . '"';
    $sql3 .= 'where userId = "' . $userId . '"';
    echo $sql3;
    //echo $sql;
    //echo'<br>'.$sql2;
    $qry = mysqli_query($con, $sql);
    $qry2 = mysqli_query($con, $sql2);
    $qry3 = mysqli_query($con, $sql3);

    
    if((!$qry) && (!$qry2)){
        echo 'Record adding error';
        
    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }

    if((!$qry3)){
        echo 'Record adding error at qry3';
        
    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }
}

function updateUserInformation(){

    session_start();


    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $phoneNum =$_POST['phoneNum'];
    $userId =$_POST['userId'];
    $password = $_POST['password'];
    
    $_SESSION['username']=$userId;  
    $_SESSION['password']=$password; 
    
    $sql = 'update userinfo set ';
    $sql .= 'MatricNum= "' . $MatricNum . '",name="' . $name . '"
    , phoneNum="' . $phoneNum . '"';
    $sql .= 'where MatricNum = "' . $MatricNum . '"';
    
    $sql2 = 'update user set ';
    $sql2 .= 'userId= "' . $userId . '",password="' . $password . '"';
    $sql2 .= 'where userId = "' . $userId . '"';

    //echo $sql;
    //echo'<br>'.$sql2;
    $qry = mysqli_query($con, $sql);
    $qry2 = mysqli_query($con, $sql2);

    echo $_SESSION['username'];

    if((!$qry) && (!$qry2)){
        echo 'Record adding error';
        
    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }


    //return $qry2;
}

function updateDisapproveVerifyStatus($email){

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = "update user set verified = 0 WHERE  userId = '$email'";

    echo $sql;
    $qry = mysqli_query($con, $sql);
    //$qry2 = mysqli_query($con, $sql2);

    //echo $_SESSION['username'];

    if((!$qry)){
        echo 'Record adding error';

    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }

}



function updateApproveVerifyStatus($email){

    
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = "update user set verified = 1 WHERE  userId = '$email'";

    echo $sql;
    $qry = mysqli_query($con, $sql);
    //$qry2 = mysqli_query($con, $sql2);

    //echo $_SESSION['username'];

    if((!$qry)){
        echo 'Record adding error';

    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }

}

function getUserInformation($userId)
{
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'select * from userinfostaff ';
    $sql .= 'where userId = "'.$userId.'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function getListOfUserCustomer($userId){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo where userId = "'.$userId.'"';
    
    $qry = mysqli_query($con, $sql);
    return $qry;
}
function getListOfUserStaff($userId){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfostaff where userId = "'.$userId.'"';

    $qry = mysqli_query($con, $sql);
    return $qry;
}


function getListOfpassword($userId){

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from user where userId = "'.$userId.'"';
    
    $qry = mysqli_query($con, $sql);
    return $qry;

}

// AZAF ////////////////////////////////////////////

function getUserName(){
    session_start();
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = "SELECT name FROM userinfo WHERE userId = \"".$_SESSION['username']."\"";
    $qry = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_row($qry)) {
        $_SESSION['name'] = $row[0];
    }

    mysqli_close($con);
}

function getTotalPrice($startDate, $endDate, $facilityId) {

    $start = date_create($startDate);
    $end = date_create($endDate);
    $totalDiff = date_diff($start, $end); 

    $totalDayBook = $totalDiff->format("%a");

    $getListOfFacility = getListOfFacility();
    while ($getFacilityDetail = mysqli_fetch_assoc($getListOfFacility)){
        if($getFacilityDetail['facilityId'] == $facilityId) {
            $totalPrice = $totalDayBook * $getFacilityDetail['ratePerDay'];
        }
    }

    return $totalPrice;
}

function bookFacility() {

    session_start();

    $userId = $_SESSION['username'];
    $dateReserved = date("Y-m-d");
    $reservedBy = $_SESSION['name'];
    $dateRentStart = $_SESSION['startDate'];
    $dateRentEnd = $_SESSION['endDate'];
    $facilityId = $_POST['bookFacilityId'];
    $totalPrice = getTotalPrice($dateRentStart, $dateRentEnd, $facilityId);


    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = "INSERT INTO rent(userId, date_reserved, reserved_by, date_rent_start, date_rent_end, facilityId, total_price)
    VALUES('$userId', '$dateReserved', '$reservedBy', '$dateRentStart', '$dateRentEnd', '$facilityId', $totalPrice) ";

    $qry = mysqli_query($con, $sql);
    if(!$qry) {
        echo 'Error adding record <br>';
        return false;
    }else{
        return true;
    }
}

function checkAvailable() {
    // session_start();
    $dateRentStart = $_SESSION['startDate'];
    $dateRentEnd = $_SESSION['endDate'];

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facilityId, name, category, capacity,facilityDetail,ratePerDay,status FROM facility ';

    // $sql .= 'WHERE status = "Available" AND facilityId NOT IN((SELECT DISTINCT facilityId FROM rent WHERE date_rent_start BETWEEN "'.$dateRentStart.'" AND "'.$dateRentEnd.'" OR date_rent_end BETWEEN "'.$dateRentStart.'" AND "'.$dateRentEnd.'")) AND status = "Available"';

    $sql .= 'WHERE status = "Available" AND facilityId NOT IN((SELECT DISTINCT facilityId FROM rent WHERE "'.$dateRentStart.'" BETWEEN date_rent_start AND date_rent_end OR "'.$dateRentEnd.'" BETWEEN date_rent_start AND date_rent_end)) AND status = "Available"';

    $qry = mysqli_query($con, $sql);

    return $qry;

}

function PaymentHistory() {
    // session_start();
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT * FROM `transactions` WHERE email = "'.$_SESSION['username'].'" ORDER BY created_at';
    

    $qry = mysqli_query($con, $sql);
    
    return $qry;
    
}

function bookingHistory() {
    // session_start();
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM facility
    LEFT JOIN rent
    ON facility.facilityId = rent.facilityId
    WHERE rent.userId = "'.$_SESSION['username'].'"
    ORDER BY rent.date_rent_start ASC';
    

    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function bookingHistoryStaff() {
    // session_start();
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM rent
    LEFT JOIN facility
    ON rent.facilityId = facility.facilityId
    ORDER BY rent.date_rent_start ASC';


    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function bookingHistoryByFacilityId($facilityId) {
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM facility
    LEFT JOIN rent
    ON facility.facilityId = rent.facilityId
    WHERE facility.facilityId = "'.$facilityId.'"
    ORDER BY rent.date_rent_start ASC';

    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function bookingHistoryByFacilityName($facilityName) {
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM facility
    LEFT JOIN rent
    ON facility.facilityId = rent.facilityId
    WHERE facility.name = "'.$facilityName.'"
    ORDER BY rent.date_rent_start ASC';

    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function bookingHistoryByUserId($userId) {
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM facility
    LEFT JOIN rent
    ON facility.facilityId = rent.facilityId
    WHERE rent.userId = "'.$userId.'"
    ORDER BY rent.date_rent_start ASC';

    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function bookingHistoryByUserName($userName) {
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }

    $sql = 'SELECT facility.facilityId, facility.name, facility.category, facility.ratePerDay, rent.userId, rent.date_reserved, rent.reserved_by, rent.date_rent_start, rent.date_rent_end, rent.total_price
    FROM facility
    LEFT JOIN rent
    ON facility.facilityId = rent.facilityId
    WHERE rent.reserved_by = "'.$userName.'"
    ORDER BY rent.date_rent_start ASC';

    $qry = mysqli_query($con, $sql);

    return $qry;
    
}

function send_password_reset($get_email,$token){
    $email = $get_email;
    //echo $email;
    //echo $username;
    $subject = 'Reset your password for UTMKL Facility account';



    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: tansen@graduate.utm.my';


    $message = '<p>We received a password reset request. The link to reset your password</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= "<a href=http://52.77.215.21/SD_SEC01_G05_01/ForgotPassword/create-new-password.php?vkey=$token&email=$get_email&statusReset=normal>Reset<a/>";
    //$message .= "<a href=http://localhost/masterprofile/SD_SEC01_G05_01/LoginSignupPage/verify.php?vkey='".$vkey."'>Register Account<a/>";
    //C:\wamp64\www\masterprofile\SD_SEC01_G05_01\ForgotPassword\create-new-password.php

    //if (mail($email,$subject,$message)) {

    if (mail($email,$subject,$message,$headers)) {
            echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
    } else {
            echo "<h4>Can't send email to $email</h4>";
    }
}

function sendMail(){

$receiver = "tancheesen123@Hotmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:cheesen987@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
}
?>
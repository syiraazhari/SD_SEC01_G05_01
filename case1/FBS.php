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
    $facilityIdToDelete = $_POST['facilityIdToDelete'];
    $sql = "delete from facility where facilityId ='".$facilityIdToDelete."'";
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
    $qry = mysqli_query($con, $sql);
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

function searchByName()
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
    $sql2 ="insert into userinfoStaff(MatricNum,name, userId,phoneNum) 
    values('$MatricNum','$name','$userId','$phoneNum')";

    echo $sql;
    echo $sql2;
    $qry =mysqli_query($con,$sql);//execute query
    $qry2 =mysqli_query($con,$sql2);
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
    $message .= "<a href=http://localhost/masterprofile/SD_SEC01_G05_01/LoginSignupPage/verify.php?vkey='".$vkey."'>Register Account<a/>";
    //$message .= '<a href ="'. $url.'">'.$url.'</a></p>';

    //if (mail($email,$subject,$message)) {

    if (mail($email,$subject,$message,$headers)) {
            echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
    } else {
            echo "<h4>Can't send email to $email</h4>";
    }

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
    $sql2 ="insert into userinfoStaff(MatricNum,name, userId,phoneNum) 
    values('$MatricNum','$name','$userId','$phoneNum')";
    echo $sql;
    echo $sql2;
    $qry =mysqli_query($con,$sql);//execute query
    $qry2 =mysqli_query($con,$sql2);
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
    $message .= "<a href=http://localhost/masterprofile/SD_SEC01_G05_01/LoginSignupPage/verify.php?vkey='$vkey'>Register Account<a/>";
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

    
    echo '
    <h2 style="text-align: center"> HOME PAGE Customer </h2>
            <form action= "..\case1\processFBS.php" method="POST">
                <input type="submit" value="Home" name="home">
                <input type="submit" value="Booking Facility Form" name="booking">
                <input type="submit" value="Search Facility" name="case1">
                <input type="submit" value="Update Profile " name="case2">  
            </form>';
}

function displayHeaderStaff(){

    echo '
    <h2 style="text-align: center"> HOME PAGE staff </h2>
            <form action= "..\case1\processFBS.php" method="POST">
                <input type="submit" value="Home" name="Shome">
                <input type="submit" value="show List of Customer By Facility" name="Sbooking">
                <input type="submit" value="Search Facility" name="Scase1">
                <input type="submit" value="Search Facility User " name="Scase2">
                <input type="submit" value="Add Facility Record" name="addFacility">
            </form>
            <form action= "..\rent\historyBooking.php" method="POST">
                <input type="submit" value="Booking History " name="Scase3">
            </form>';
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

function searchByIcNum(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo ';
    $sql .= 'where icNum = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function searchByNameUser(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo ';
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
    $sql = 'select * from userinfo ';
    $sql .= 'where userId = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function searchByState(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $sql = 'select * from userinfo ';
    $sql .= 'where state = "'.$_POST['searchKeyUser'].'"';
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function deleteUser(){
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $userIdToDelete = $_POST['userIdToDelete'];
    $sql = "delete from user where userId ='".$userIdToDelete."'";
    $qry = mysqli_query($con, $sql);
    return $qry;
}

function updateUserInformation(){

    session_start();


    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $name = $_POST['name'];
    $icNum = $_POST['icNum'];
    $phoneNum =$_POST['phoneNum'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $postcode = $_POST['postcode'];
    $userId =$_POST['userId'];
    $password = $_POST['password'];
    
    $_SESSION['username']=$userId;  
    $_SESSION['password']=$password; 
    
    $sql = 'update userinfo set ';
    $sql .= 'icNum= "' . $icNum . '",name="' . $name . '"
    , phoneNum="' . $phoneNum . '", address1="' . $address1 . '", address2="' . $address2 . '", state="' . $state . '", district="' . $district . '", postcode="' . $postcode . '", dateOfBirth="' . $dateOfBirth . '"';
    $sql .= 'where icNum = "' . $icNum . '"';
    
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

    // session_start();

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
        echo 'Record added<br>';
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

    $sql = 'SELECT facilityId, category, capacity,facilityDetail,ratePerDay,status FROM facility ';

    // $sql .= 'WHERE status = "Available" AND facilityId NOT IN((SELECT DISTINCT facilityId FROM rent WHERE date_rent_start BETWEEN "'.$dateRentStart.'" AND "'.$dateRentEnd.'" OR date_rent_end BETWEEN "'.$dateRentStart.'" AND "'.$dateRentEnd.'")) AND status = "Available"';

    $sql .= 'WHERE status = "Available" AND facilityId NOT IN((SELECT DISTINCT facilityId FROM rent WHERE "'.$dateRentStart.'" BETWEEN date_rent_start AND date_rent_end OR "'.$dateRentEnd.'" BETWEEN date_rent_start AND date_rent_end)) AND status = "Available"';

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


?>
<?php

include "FBS.php";
//include "../email/email.php";
//echo'your in processFBS';


if(isSet($_POST['addFacilityButton']))
{
    $success = addFacility();
    header('Location:..\case1\staffFacilityList.php');

}
else if(isSet($_POST['deleteFacilityButton'])) {

    $success=deleteFacility();
    if($success)
    {
        echo'<script>';
        echo'alert("Record has been deleted")';
        echo'</script>';
    }
    else
    {
        echo'<script>';
        echo'alert("Delete Error")';
        echo'</script>';
    }
    header("Refresh:1;url=..\case1\staffFacilityList.php");

}
else if(isSet($_POST['updateFacilityButton'])) {
    updateFacilityInformation();
    header("Refresh:1;url=..\case1\staffFacilityList.php");

}else if(isSet($_POST['deleteUserButton'])) {

    $success=deleteUser();
    if($success)
    {
        echo'<script>';
        echo'alert("Record has been deleted")';
        echo'</script>';
    }
    else
    {
        echo'<script>';
        echo'alert("Delete Error")';
        echo'</script>';
    }
    header("Refresh:1;url=..\userFacility\staffUserFacilityList.php");

}else if(isSet($_POST['updateUserButton'])) {

    updateUserInformation();
    header("Location:..\userFacility\staffUserFacilityList.php");

}else if(isSet($_POST['updateCustomerUserButton'])) {

    updateUserInformation();
    header("Location:..\userFacility\customerUserFacilityList.php");
}else if(isSet($_POST['updateStaffProfileButton'])) {

    updateStaffProfile();
    header("Location:..\StaffPage\StaffProfile.php");

}else if(isSet($_POST['forgotpassword'])){
    echo 'in forgotpassword';////////////////////////////////////////////////////////////////////////////////////
    
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/masterprofile/SD_SEC01_G05_01/ForgotPassword/create-new-password.php?selector=" .$selector . "&validator=". bin2hex($token);
    $expires = date("U") + 1800;

    $userEmail = $_POST["userEmail"];
    //print_r($_POST);
    echo $userEmail;

            $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit;
            }else{
                echo "Connected to database";
            }

            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo 'Error :D';
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"s",$userEmail);
                mysqli_stmt_execute($stmt);
            }

            $sql2 = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?);";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql2)){
                echo 'Error :D';
                exit();
            }else{
                $hashedToken = password_hash($token,PASSWORD_DEFAULT);
                echo "this is the hashed token : <br>".$hashedToken;
                mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
                mysqli_stmt_execute($stmt);
            }

            mysqli_stmt_close($stmt);
            mysqli_close($con);

            //sendBookEmailToCustomer();


                    $email = $userEmail;
                    //echo $email;
                    //echo $username;
                    $subject = 'Reset your password for UTMKL Facility account';



                    // To send HTML mail, the Content-type header must be set
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From: cheesen987@gmail.com';


                    $message = '<p>We received a password reset request. The link to reset your password</p>';
                    $message .= '<p>Here is your password reset link: </br>';
                    $message .= '<a href ="'. $url.'">'.$url.'</a></p>';

                    //if (mail($email,$subject,$message)) {

                    if (mail($email,$subject,$message,$headers)) {
                            echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
                    } else {
                            echo "<h4>Can't send email to $email</h4>";
                    }

            header('Location:..\ForgotPassword\forgotpassword.php?reset=success');
    //sendConfirmationEmail();
    //header('Location:..\StudentPage');
}
else if(isSet($_POST['register'])){
    //echo 'in register STUDENTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT';////////////////////////////////////////////////////////////////////////////////////
    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $userId =$_POST['userId'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];
    
    if(empty($name) || empty($MatricNum) ||empty($userId) ||empty($password) ||empty($phoneNum)){
        
        header("Location:../LoginSignupPage/Signup.php?error=emptyfields&userId=".$userId."&password=".$password);
        exit();
    }else if(!filter_var($userId,FILTER_VALIDATE_EMAIL)){
        header("Location:../LoginSignupPage/Signup.php?error=invalidmail&userId=".$userId."&password=".$password);
        exit();
    }else{
        addRegister();
        //sendConfirmationEmail($userId);
        header('Location:..\LoginSignupPage\Thankyoupage.php');
    }

    
    //addRegister();
    //sendConfirmationEmail();
    //header('Location:..\StudentPage');
}else if(isSet($_POST['gobackLogin'])){
    header('Location:..\LoginSignupPage\index.php');


}else if(isSet($_POST['registerstaff'])){
    //echo 'in register';///////////////////////////////////A20Dw1114/////////////////////////////////////////////////
    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $userId =$_POST['userId'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];


    if(empty($name) || empty($MatricNum) ||empty($userId) ||empty($password) ||empty($phoneNum)){
        header("Location:../LoginSignupPage/Signup.php?error=emptyfields&userId=".$userId."&password=".$password);
        exit();
    }else{
        addRegisterStaff();
        //sendConfirmationEmail($userId,$vkey);
        //header('Location:..\LoginSignupPage\Thankyoupage.php');
    }
    //addRegisterStaff();
    //sendConfirmationEmail();
    header('Location:..\StaffPage');
}else if(isSet($_POST['registerbutton'])){
    
    
    header('Location:..\Login\register.php');
}else if(isSet($_POST['logout'])){
    
    
    header('Location:..\Login\index.php');
}else if(isSet($_POST['login1'])){
    
    
    session_start(); 

    $_SESSION['username']=$_POST['username'];  
    $_SESSION['password']=$_POST['password'];  
    $_SESSION['curTime']=date('G:i:sA',strtotime('+8 hours'));//GMT 8

    $userId = $_POST['username'];

        //echo $userRecord['userId'];
    $userQry = userLogin($userId);
    $userRecord =mysqli_fetch_assoc($userQry);
    $userEmail = $_POST['username'];
    
    $userInfoQry = getListOfUserCustomer($userEmail);
    $userInfoRecord =mysqli_fetch_assoc($userInfoQry);
    
    print_r($_POST);
    if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Student')&& ($userRecord['verified'] == 1)){

        header('Location:..\StudentPage');
    }else if (($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Admin')&& ($userRecord['verified'] == 1)){

        header('Location:..\Bootstrap\NiceAdmin');
        
    }else if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Staff')&& ($userRecord['verified'] == 1)){
        header('Location:..\StaffPage');
    }else if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] != $userRecord['password'])){
        
        header('Location:..\LoginSignupPage\index.php?error=falseemailorpassword');
    }else if($userRecord['verified'] == 0){
        
        header('Location:..\LoginSignupPage\index.php?error=noverify');
    }else{

        header('Location:..\LoginSignupPage\index.php');
        
    }
    
}else if(isSet($_POST['home'])){  //CUSTOMER HEADERRRRRRRRRRRRRRRRRRRR

    header('Location:..\Login\customerHome.php');

}else if(isSet($_POST['booking'])){

    header('Location:..\Rent\bookingFacility.php');

}else if(isSet($_POST['case1'])){

    header('Location:..\case1\customerFacilityList.php');
    
}else if(isSet($_POST['case2'])){
    /////////////////////////////////////////////////////////

    header('Location:..\userFacility\customerUserFacilityList.php');

}
else if(isSet($_POST['case3'])){
    
    header('Location:..\Rent\historyBooking.php');

}
else if(isSet($_POST['Shome'])){ //STAFF HEADERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR

    header('Location:..\Login\staffHome.php');

}else if(isSet($_POST['Sbooking'])){

    header('Location:staffFacilityList.php');

}else if(isSet($_POST['Scase1'])){

    header('Location:staffFacilityList.php');
    
}else if(isSet($_POST['Scase2'])){
    
    header('Location:..\userFacility\staffUserFacilityList.php');

}
else if(isSet($_POST['Scase3'])){
    
    header('Location:..\Rent\historyBooking.php');

}else if(isSet($_POST['addFacility'])){
    
    header('Location:facilityBookingForm.php');

}

if(isSet($_POST['reset-password-submit'])){
    
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if(empty($password) || empty($passwordRepeat)){
        echo 'could not validate your request';
        header('Location:..\ForgotPassword\create-new-password.php?newpwd=empty');
        exit();
    }else if($password != $passwordRepeat){

        header('Location:..\ForgotPassword\create-new-password.php?newpwd=pwdnotsame');
        exit();
    }

    $currentDate = date("U");

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if(mysqli_connect_errno()){
        echo 'fail to connect to mysql'.mysqli_connect_error();
        exit;
    }else{
        echo 'connected to mysql';
    }

    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
    $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo 'Error database:D 1';
                exit();
            }else{
                mysqli_stmt_bind_param($stmt,"s",$selector);
                mysqli_stmt_execute($stmt);

                $result = mysqli_stmt_get_result($stmt);
                if(!$row = mysqli_fetch_assoc($result)){
                    echo "You need to re-submit your reset request.";
                    exit();
                }else{
                    $tokenBin = hex2bin($validator);
                    $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

                    if ($tokenCheck === false){
                        echo "Your need to re-submit your reset request";
                        exit();
                    }else if($tokenCheck === true){
                        $tokenEmail = $row['pwdResetEmail'];
                        $sql = "SELECT * FROM user WHERE userId =?;";
                        $stmt = mysqli_stmt_init($con);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            echo 'Error database:D 2';
                            exit();
                        }else{
                            mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            if(!$row = mysqli_fetch_assoc($result)){
                                echo "There was an error";
                                exit();
                            }else{
                                $sql ="UPDATE user SET password=? WHERE userId=?";
                                $stmt = mysqli_stmt_init($con);
                                if(!mysqli_stmt_prepare($stmt,$sql)){
                                    echo 'Error database:D 3';
                                    exit();
                                }else{
                                    $newPwsHash = password_hash($password,PASSWORD_DEFAULT);
                                    mysqli_stmt_bind_param($stmt,"ss",$newPwsHash,$tokenEmail);
                                    mysqli_stmt_execute($stmt);

                                    $sql ="DELETE FROM pwdReset WHERE pwdResetEmail=?";
                                    $stmt = mysqli_stmt_init($con);
                                    if(!mysqli_stmt_prepare($stmt,$sql)){
                                        echo 'Error database:D 4';
                                        exit();
                                    }else{
                                        
                                        mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                                        mysqli_stmt_execute($stmt);
                                        header("Location: .. /LoginSignupPage/Signup.php?newpwd=passwordupdated");

                                        
                                         }
                                    
                                    }
                            }


                        }

                    }

                    }
                
                }
            }


function sendBookEmailToCustomer()
{
    //print_r($_POST);
    //session_start();
   // $name = $_SESSION['username'];
   // $email = $_SESSION['email'];
//$_SESSION['email'] = $_POST['email'];

$email = "tancheesen123@Hotmail.com";
$username = $_SESSION['name'];
//echo $email;
//echo $username;
$subject = "[Auto-Response][Successfully Booking] FACEIT TECHNOLOGY Website";



// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: cheesen987@gmail.com';


$message = ' ';
$message .= '

<html>

<body>
<center>
<h2>SUCCESSFUL BOOKING</h2>

  <div class="container">
    <h2>FACEIT TECHNOLOGY</h2>
    <h2>Hi '.$username.' THANK YOU FOR USING OUR WEBSITE,</h2>
  </div>
<center>
</body>
</html>
';

 //if (mail($email,$subject,$message)) {

 if (mail($email,$subject,$message,$headers)) {
         echo "<h4>Thank you for Booking. Please check your email at $email.</h4>";
 } else {
         echo "<h4>Can't send email to $email</h4>";
 }
 }
?>

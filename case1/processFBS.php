<?php

include "FBS.php";
//include "../email/email.php";
//echo'your in processFBS';


if(isSet($_POST['addFacilityButton']))
{
    $success = addFacility();
    header("Location:..\NiceAdmin\AdminFacilityList.php");

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

}else if(isSet($_POST['return'])){
    header("Location:..\NiceAdmin\Bookerlist.php");
}else if(isSet($_POST['returnToFacilityList'])){
    if($_POST['userType'] == "Student"){

        header("Location:..\StudentPage\StudentFacilityList.php");
        
    }else if($_POST['userType'] == "Staff"){

        header("Location:..\StaffPage\StaffFacilityList.php");
        
    }
    
}else if(isSet($_POST['UpdateProfile'])){
    updateStudentProfile();
    header("Location:..\StudentPage\StudentProfile.php");
}else if(isSet($_POST['info'])){
    
    header("Location:..\NiceAdmin\ViewStudentAccount.php");
}else if(isSet($_POST['UpdateProfileStaff'])){
        updateStaffProfile();
        header("Location:..\NiceAdmin\BookerList.php");

    
}else if(isSet($_POST['UpdateProfileAdmin'])){
    
    updateStaffProfile();
    header("Location:..\NiceAdmin\users-profile.php");
    
}
else if(isSet($_POST['returnBookerList'])){
   

    header("Location:..\NiceAdmin\BookerList.php");


}else if(isSet($_POST['test'])){
    //updateStaffProfile();/////////////////////////////////////////////////////////////////////////////////////////////
    if($_POST["userType"] == "Student"){
        echo "Student";
        updateStudentProfile();
        header("Location:..\NiceAdmin\BookerList.php");

    }else if($_POST["userType"] == "Staff"){
        echo "staff";
        updateStaffProfile();
        header("Location:..\NiceAdmin\BookerList.php");
    }

    //header("Location:..\NiceAdmin\BookerList.php");


}
else if(isSet($_POST['updateFacilityButton'])) {
    updateFacilityInformation();
    
    header("Location:..\NiceAdmin\AdminFacilityList.php");

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
    header("Refresh:1;url=..\userFacility\staffUserFacilityList.php");

}else if(isSet($_POST['updateCustomerUserButton'])) {

    updateUserInformation();
    header("Refresh:0;url=..\userFacility\customerUserFacilityList.php");
}else if(isSet($_POST['updateStaffProfileButton'])) {

    updateStaffProfile();
    header("location:..\StaffPage\StaffProfile.php");

}else if(isSet($_POST['forgotpassword'])){
    echo 'in forgotpassword';////////////////////////////////////////////////////////////////////////////////////
    session_start();
    //sendMail();
    $userEmail = $_POST["userEmail"];
    echo $userEmail;

            $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit;
            }else{
                echo "Connected to database";
            }
            
            $findEmail = mysqli_real_escape_string($con, $userEmail);
            $token = md5(rand());

            $check_email = "SELECT userId FROM user WHERE userId = '$findEmail' LIMIT 1 ";
            echo $check_email;
            $check_email_run = mysqli_query($con, $check_email);

            if(mysqli_num_rows($check_email_run) > 0){

                $row =  mysqli_fetch_array($check_email_run);
                $get_email = $row['userId'];

                $update_token = "UPDATE user SET vkey = '$token' WHERE userId = '$get_email' LIMIT 1";
                $update_token_run = mysqli_query($con, $update_token);

                if($update_token_run){

                    send_password_reset($get_email,$token);
                    //$_SESSION['statusEmail'] = "We emailed you a password reset link";
                    header("Location:../ForgotPassword/resetpassword.php?statusEmail=emailed");
                    exit(0);
                }else{
                    //$_SESSION['statusEmail'] = "Something went wrong. #1";
                    header("Location:../ForgotPassword/resetpassword.php?statusEmail=error");
                    
                    exit(0);
                }
            }else{
                //$_SESSION['statusEmail'] = "No Email Found";
                header("Location:../ForgotPassword/resetpassword.php?statusEmail=noEmail");
                exit(0);
            }

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
    }else if(strlen($password) >= 13 || strlen($password) <= 7){
        header("Location:../LoginSignupPage/Signup.php?error=passwordErrors&userId=".$userId."&password=".$password);
        exit();
    }else if(strlen($phoneNum) > 11 ||  strlen($phoneNum) < 10){
        header("Location:../LoginSignupPage/Signup.php?error=phoneNumErrors&userId=".$userId."&password=".$password);
        exit();

    }else{
        addRegister();
        //sendConfirmationEmail($userId);
        header('Location:..\LoginSignupPage\Thankyoupage.php');
    }

    
    //addRegister();
    //sendConfirmationEmail();
    //header('Location:..\StudentPage');
}else if(isSet($_POST['addAdminAccount'])){
    $name = $_POST['name'];
    $staffId= $_POST['staffId'];
    $userId =$_POST['email'];
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];
    $userType = $_POST['userType'];
    addAdminAccount();
    header('Location:..\NiceAdmin\AddAdminAccount.php');

}else if(isSet($_POST['DeleteAccount'])){
    $email = $_POST['userId'];
    $userType = $_POST['userType'];
    deleteUser($email,$userType);
    header('Location:..\NiceAdmin\BookerList.php');


}else if(isSet($_POST['gobackLogin'])){
    header('Location:..\LoginSignupPage\index.php');


}else if(isSet($_POST['registerstaff'])){
    //echo 'in register';///////////////////////////////////A20Dw1114/////////////////////////////////////////////////
    $name = $_POST['name'];
    $MatricNum = $_POST['MatricNum'];
    $userId =$_POST['userId']; // email
    $password =$_POST['password'];
    $phoneNum = $_POST['phoneNum'];


    if(empty($name) || empty($MatricNum) ||empty($userId) ||empty($password) ||empty($phoneNum)){
        header("Location:../LoginSignupPage/Signup.php?error=emptyfields&userId=".$userId."&password=".$password);
        exit();
    }else if(strlen($password) >= 13 || strlen($password) <= 7){
        header("Location:../LoginSignupPage/Signup.php?error=passwordErrors&userId=".$userId."&password=".$password);
        exit();
    }else if(strlen($phoneNum) > 11 ||  strlen($phoneNum) < 10){
        header("Location:../LoginSignupPage/Signup.php?error=phoneNumErrors&userId=".$userId."&password=".$password);
        exit();

    }else{
        //addRegisterStaff();
        //sendConfirmationEmail($userId,$vkey);
        //header('Location:..\LoginSignupPage\Thankyoupage.php');
        addRegisterStaff();
    //sendConfirmationEmail();
        header('Location:..\LoginSignupPage\Thankyoupage.php');
    }

}else if(isSet($_POST['registerbutton'])){
    
    
    header('Location:..\Login\register.php');
}else if(isSet($_POST['logout'])){
    
    
    header('Location:..\Login\index.php');
}else if(isSet($_POST['login1'])){
    
    
    session_start(); 

    $_SESSION['username']=$_POST['username'];  //username = email
    $_SESSION['password']=$_POST['password'];  

    $_SESSION['curTime']=date('G:i:sA',strtotime('+8 hours'));//GMT 8

    $userId = $_POST['username'];

        //echo $userRecord['userId'];
    $userQry = userLogin($userId);
    $userRecord =mysqli_fetch_assoc($userQry);
    $userEmail = $_POST['username'];
    echo $userEmail;


    if(($userRecord) > 0){
        print_r($_POST);
        if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Student')&& ($userRecord['verified'] == 1)){
            $userInfoQry = getListOfUserCustomer($userEmail);
            $userInfoRecord =mysqli_fetch_assoc($userInfoQry);
            $_SESSION['name'] =  $userInfoRecord['name']; 
            header('Location:..\StudentPage');
        }else if (($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Admin')&& ($userRecord['verified'] == 1)){

            header('Location:..\NiceAdmin\homepage.php');
            
        }else if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Staff')&& ($userRecord['verified'] == 1)){
            $staffInfoQry = getListOfUserStaff($userEmail);
            $staffInfoRecord =mysqli_fetch_assoc($staffInfoQry);
            $_SESSION['name'] =  $staffInfoRecord['name']; 
            echo $_SESSION['name'];
            header('Location:..\StaffPage');
        }else if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] != $userRecord['password'])){
            
            header('Location:..\LoginSignupPage\index.php?error=falseemailorpassword');
        }else if($userRecord['verified'] == 0){
            
            header('Location:..\LoginSignupPage\index.php?error=noverify');
        }else{

            header('Location:..\LoginSignupPage\index.php');
            
        }

    }else {

        header('Location:..\LoginSignupPage\index.php?error=noEmail');
    }
    
    
}else if(isSet($_POST['home'])){  //CUSTOMER HEADERRRRRRRRRRRRRRRRRRRR

    header('Location:..\Login\customerHome.php');

}else if(isSet($_POST['booking'])){

    header('Location:..\Rent\bookingFacility.php');

}else if(isSet($_POST['cancelPayment'])){
    session_start();
    $userId = $_SESSION['username'];
    $listOfAccount = getListOfpassword($userId);
    //if(mysqli_num_rows($listOfStudent) > 0)
    $row = mysqli_fetch_assoc($listOfAccount);
    $userType = $row['userType'];



    header('Location:..\StaffPage\StaffFacilityList.php');

    if($userType == "Staff"){
        header('Location:..\StaffPage\StaffFacilityList.php');
    }else if($userType == "Student"){
        header('Location:..\StudentPage\StudentFacilityList.php');
    }


}else if(isSet($_POST['deleteFacility'])){
    deleteFacility();
    header('Location:../NiceAdmin/AdminFacilityList.php');
    
}else if(isSet($_POST['updateFacility'])){

    header('Location:../NiceAdmin/UpdateFacility.php');
    
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

}else if(isSet($_POST['approveVerify'])){
    $email = $_POST['email'];
    echo 'email';
    updateApproveVerifyStatus($email);
    header('Location:../NiceAdmin/verifyAccount.php');


}else if(isSet($_POST['disapproveVerify'])){
    $email = $_POST['email'];
    echo $email;
    echo "in disapprove";
    updateDisapproveVerifyStatus($email);
    echo 'disapprove';
    header('Location:../NiceAdmin/verifyAccount.php');
}else if(isSet($_POST['gobackVerify'])){
    header('Location:../NiceAdmin/verifyAccount.php');
}

if(isSet($_POST['reset-password-submit'])){
    echo "in reset password";
    session_start(); 
   $email = $_POST['email'];
   $password = $_POST['password'];
   $repeatPassword = $_POST['re-password'];
   $token = $_POST['token'];
   echo $email;
   echo "<p></p>";
   echo $password;
   echo "<p></p>";
   echo $repeatPassword;
   echo "<p></p>";
   echo $token;

   $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $new_password = mysqli_real_escape_string($con,$_POST['password']);
    $confirm_password = mysqli_real_escape_string($con,$_POST['re-password']);
    $token = mysqli_real_escape_string($con,$_POST['token']);

    if(!empty($token)){

        if(!empty($email) && !empty($new_password) && !empty($confirm_password)){

            $check_token = "SELECT vkey FROM user WHERE vkey = '$token'";
            $check_token_run = mysqli_query($con,$check_token);
            if(mysqli_num_rows($check_token_run) > 0){
                
                if($new_password == $confirm_password){

                    if(strlen($new_password) >= 13 || strlen($new_password) <= 7){
                        $_SESSION['status'] = "Password's length must between 8 - 12";
                        header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=notEnoughLength");
                        exit(0);
                        
                        
                    }else{
                        $update_password = "UPDATE user SET password = '$new_password' WHERE vkey = '$token' LIMIT 1";
                        $update_password_run = mysqli_query($con,$update_password);

                            if($update_password_run){
                                $_SESSION['status'] = "New Password Successfully Update!";
                                header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=Success");
                                exit(0);

                            }else{
                                $_SESSION['status'] = "Fail to change the password";
                                header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=fail");
                                exit(0);
                        $_SESSION['status'] = "Password's length must between 8 - 12";
                        header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=notEnoughLength");
                        exit(0);
                    }
                }

                }else{
                    $_SESSION['status'] = "Password was not same!";
                    header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=passwordNotSame");
                    exit(0);
                    
                }


            }else{
                $_SESSION['status'] = "Invalid Token";
                header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=InvalidToken");
                exit(0);
                
            }

        }else{
            $_SESSION['status'] = "All field are mantedory";
            header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=MantedoryField");
            exit(0);
            
        }

    }else{
        $_SESSION['status'] = "Error Token";
        header("Location:..\ForgotPassword\create-new-password.php?vkey=$token&email=$email&statusReset=errorToken");
        exit(0);
        
    }
}

if(isset($_FILES["image"]["name"])){
    session_start(); 
    
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit;
  }
  $userId = $_SESSION['username'];
  $listOfPassword = getListOfpassword($userId);
    $row2 = mysqli_fetch_assoc($listOfPassword);
    $userType = $userType = $row2['userType'];
    
  if($userType == "Staff"){
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
    $userId = $_POST["userId"];
    $name = $_POST["name"];

    $imageName = $_FILES["image"]["name"];
    $imageSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    echo $userType;
    if (!in_array($imageExtension, $validImageExtension)){
        header("Location:..\StaffPage\StaffProfile.php?status=updateFail1");
      
    }elseif ($imageSize > 1200000){
        header("Location:..\StaffPage\StaffProfile.php?status=updateFail2");
    }else{
        
      $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
      $newImageName .= '.' . $imageExtension;
      $query = "UPDATE userinfostaff SET Image = '$newImageName' WHERE  userId = '$userId'";
      $query2 = "UPDATE userinfo SET Image = '$newImageName' WHERE  userId = '$userId'";
      $qry=mysqli_query($con, $query);
      $qry2=mysqli_query($con, $query2);
      move_uploaded_file($tmpName, '../img/' . $newImageName);
      if((!$qry)){
        echo 'Record adding error';

    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }
    header("Location:..\StaffPage\StaffProfile.php?status=success");
    }
    
    }else if($userType == "Admin"){
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
        $userId = $_POST["userId"];
        $name = $_POST["name"];
    
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
    
        // Image validation
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        echo $userType;
        if (!in_array($imageExtension, $validImageExtension)){
            header("Location:..\NiceAdmin\users-profile.php?status=sucess");
          
        }elseif ($imageSize > 1200000){
            header("Location:..\NiceAdmin\users-profile.php?status=sucess");
        }else{
            
          $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
          $newImageName .= '.' . $imageExtension;
          $query = "UPDATE userinfostaff SET Image = '$newImageName' WHERE  userId = '$userId'";
          $query2 = "UPDATE userinfo SET Image = '$newImageName' WHERE  userId = '$userId'";
          $qry=mysqli_query($con, $query);
          $qry2=mysqli_query($con, $query2);
          move_uploaded_file($tmpName, '../img/' . $newImageName);
          if((!$qry)){
            echo 'Record adding error';
    
        }else{
            echo '<script>';
            echo 'alert ("Successfully Update Profile")';
            echo '<script>';
        }
        header("Location:..\NiceAdmin\users-profile.php?status=sucess");
        }
    
    }else if($userType == "Student"){
        $userId = $_SESSION['username'];

        $listOfStudent = getListOfUserCustomer($userId);
    
                          //if(mysqli_num_rows($listOfStudent) > 0)
        $row = mysqli_fetch_assoc($listOfStudent);
        $email =  $row['userId'];
        $listOfPassword = getListOfpassword($email);
        $row2 = mysqli_fetch_assoc($listOfPassword);
    
        $matricNum = $row['MatricNum'];
        $name = $row['name'];
                          
        $phoneNum = $row['phoneNum'];
        $image = $row['Image'];                       
        $password = $row2['password'];
        $userType = $row2['userType'];
        $vkey = $row2['vkey'];
        $verified = $row2['verified'];
        $userId = $_POST["userId"];
        $name = $_POST["name"];
    
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
    
        // Image validation
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        echo $userType;
        if (!in_array($imageExtension, $validImageExtension)){

            header("Location:..\StudentPage\StudentProfile.php?status=sucess");
        }elseif ($imageSize > 1200000){
            header("Location:..\StudentPage\StudentProfile.php?status=sucess");
        }else{
            
          $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
          $newImageName .= '.' . $imageExtension;
          $query = "UPDATE userinfostaff SET Image = '$newImageName' WHERE  userId = '$userId'";
          $query2 = "UPDATE userinfo SET Image = '$newImageName' WHERE  userId = '$userId'";
          $qry=mysqli_query($con, $query);
          $qry2=mysqli_query($con, $query2);
          move_uploaded_file($tmpName, '../img/' . $newImageName);
          if((!$qry)){
            echo 'Record adding error';
    
        }else{
            echo '<script>';
            echo 'alert ("Successfully Update Profile")';
            echo '<script>';
        }
        header("Location:..\StudentPage\StudentProfile.php?status=sucess");
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

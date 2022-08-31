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
    header("Refresh:1;url=..\userFacility\staffUserFacilityList.php");

}else if(isSet($_POST['updateCustomerUserButton'])) {

    updateUserInformation();
    header("Refresh:1;url=..\userFacility\customerUserFacilityList.php");

}
else if(isSet($_POST['register'])){
    //echo 'in register';////////////////////////////////////////////////////////////////////////////////////
    
    addRegister();
    sendConfirmationEmail();
    header('Location:..\Login\index.php');
}else if(isSet($_POST['registerbutton'])){
    
    
    header('Location:..\Login\register.php');
}else if(isSet($_POST['logout'])){
    
    
    header('Location:..\Login\index.php');
}else if(isSet($_POST['login'])){
    session_start(); 

    $_SESSION['username']=$_POST['username'];  
    $_SESSION['password']=$_POST['password'];  
    $_SESSION['curTime']=date('G:i:sA',strtotime('+8 hours'));//GMT 8

    $userId = $_POST['username'];
    $userQry = userLogin($userId);
    $userRecord =mysqli_fetch_assoc($userQry);
    
    $userEmail = $_POST['username'];
    $userInfoQry = getListOfUserCustomer($userEmail);
    $userInfoRecord =mysqli_fetch_assoc($userInfoQry);
    $_SESSION['email'] = $userInfoRecord['userId'];
    $_SESSION['name'] = $userInfoRecord['name'];
    
    print_r($_POST);
    if(($_POST['username'] == $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Student')){

        header('Location:..\Bootstrap\StudentPage');
    }else if (($_POST['username'] = $userRecord['userId']) && ($_POST['password'] = $userRecord['password']) && ($userRecord['userType'] == 'Admin')){

        header('Location:..\Bootstrap\NiceAdmin');
    }else if(($_POST['username'] = $userRecord['userId']) && ($_POST['password'] == $userRecord['password']) && ($userRecord['userType'] == 'Staff')){

        header('Location:..\Bootstrap\StaffPage');
    }else{

        header('Location:..\Login\index.php');
        
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


?>

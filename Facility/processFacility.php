<?php

include "../case1/FBS.php";
//include "../email/email.php";
//echo'your in processFBS';
echo "in processFacility";

if(isset($_FILES["image"]["name"])){
    session_start(); 
    
    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit;
  }
  $facilityId = $_POST['facilityId'];
  $listOfFacility = getFacilityInformation($facilityId);
    $row = mysqli_fetch_assoc($listOfFacility);
    
    //$userType = $userType = $row2['userType'];
    
    $facilityId = $row['facilityId'];

    //$listOfStudent = getListOfUserStaff($userId);

                      //if(mysqli_num_rows($listOfStudent) > 0)
    //$row = mysqli_fetch_assoc($listOfStudent);
    //$email =  $row['userId'];
    //$listOfPassword = getListOfpassword($email);
    //$row2 = mysqli_fetch_assoc($listOfPassword);

    //$matricNum = $row['staffId'];
    $name = $row['name'];
                      
    //$phoneNum = $row['phoneNum'];
    //$image = $row['Image'];                       
    //$password = $row2['password'];
    //$userType = $row2['userType'];
    //$vkey = $row2['vkey'];
    //$verified = $row2['verified'];
    //$userId = $_POST["userId"];
    //$name = $_POST["name"];

    $imageName = $_FILES["image"]["name"];
    $imageSize = $_FILES["image"]["size"];
    echo $imageSize;
    $tmpName = $_FILES["image"]["tmp_name"];

    // Image validation
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));
    
    if (!in_array($imageExtension, $validImageExtension)){
        header("Location:..\StaffPage\StaffProfile.php?status=updateFail1");
      
    }else{
        
      $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
      $newImageName .= '.' . $imageExtension;
      $query = "UPDATE facility SET Image = '$newImageName' WHERE  facilityId = '$facilityId'";
      
      $qry=mysqli_query($con, $query);
      move_uploaded_file($tmpName, '../Facility/imgFacility/' . $newImageName);
      if((!$qry)){
        echo 'Record adding error';

    }else{
        echo '<script>';
        echo 'alert ("Successfully Update Profile")';
        echo '<script>';
    }
    header("Location:..\NiceAdmin\AdminFacilityList.php?status=success");
    
    }
  }
?>
?>
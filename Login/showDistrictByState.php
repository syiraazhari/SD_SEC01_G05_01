<!DOCTYPE html>
<html>
<body>
<?php
    $state = $_GET['state'];
    $con = mysqli_connect("localhost","g07sec38","g07sec38","g07s38fbsdb");
    if(!$con)
            {
                die('Could not connect: ' . mysqli_error($con));
            }
        else
            {
            //echo 'connected';
            //echo $_GET['state'];
            $sql='SELECT district FROM state_district WHERE state ="'.$_GET['state'].'"';
            

            //echo $sql;
            $qry=mysqli_query($con,$sql);
            echo '<div class="col-25">';
            echo '<label for="district">District</label>';
            echo '</div>';
            echo '<div class="col-75">';
                 echo '<select name = "district" class="form-control" id="district" placeholder="district" onchange="showPostCodeByDistrict(this.value)">';
                 while($row = mysqli_fetch_array($qry)) {
                    
                    echo '<option value="'.$row['district'].'">'.$row['district'].'</option>';
                }
                echo '<option value="OTHERS">Others</option>';
                echo '</select>';
            
                echo '</div>';
                
                mysqli_close($con);
        }
?>



</body>
</html>
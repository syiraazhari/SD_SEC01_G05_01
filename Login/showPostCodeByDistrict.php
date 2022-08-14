<!DOCTYPE html>
<html>
<body>
<?php
    $state = $_GET['district'];
    $con = mysqli_connect("localhost","g07sec38","g07sec38","g07s38fbsdb");
    if(!$con)
            {
                die('Could not connect: ' . mysqli_error($con));
            }
        else
            {
            //echo 'connected';
            $sql='select postcode from state_district where district ="'.$_GET['district'].'"';

            //echo $sql;
            $qry=mysqli_query($con,$sql);

            $row=mysqli_fetch_assoc($qry);
            echo '<div class="col-25">';
            echo '<label for="postcode">Postcode</label>';
            echo '</div>';
            echo '<div class="col-75">';
            echo '<input type="text" class="form-control" name="postcode" value="'.$row['postcode'].'">';
            echo '</div>';
                mysqli_close($con);
        }
?>



</body>
</html>
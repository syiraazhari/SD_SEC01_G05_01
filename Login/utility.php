<?php

function getListOfState()
{
    $con = mysqli_connect("localhost","g07sec38","g07sec38","g07s38fbsdb");
        if(!$con)
            {
            echo mysqli_error();
            }
        else
            {
            //echo 'connected';
            $sql='select distinct(state) from state_district order by state';

            //echo $sql;
            $qry=mysqli_query($con,$sql);
            return $qry;
        }


    }

?>
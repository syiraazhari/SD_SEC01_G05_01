<?php

    

    $con = mysqli_connect("localhost", "projectsd", "projectsd", "projectsd");

    $mysqli = new MySQLi("localhost", "projectsd", "projectsd", "projectsd");
    
    //$password = password_hash("tancheesen43", PASSWORD_DEFAULT);


    //$sql = 'update user set ';
    //$sql .= 'password= "' . $password . '"';
    //$sql .= 'where userId = "FalseEmail@gmail.com"';

    //echo $sql;
    //$qry = mysqli_query($con, $sql);
/////////////////
    $password = password_hash("543543", PASSWORD_DEFAULT);


    $sql = 'update user set ';
    $sql .= 'password= "' . $password . '"';
    $sql .= 'where userId = "FalseEmail@gmail.com"';

    echo $sql;
    $qry = mysqli_query($con, $sql);
////////////////////
    $password = password_hash("s", PASSWORD_DEFAULT);


    $sql2 = 'update user set ';
    $sql2 .= 'password= "' . $password . '"';
    $sql2 .= 'where userId = "shaoyuan0228@gmail.com"';

    echo $sql2;
    $qry2 = mysqli_query($con, $sql2);
//////////////////////////
    $password = password_hash("tancheesen1254", PASSWORD_DEFAULT);


    $sql3 = 'update user set ';
    $sql3 .= 'password= "' . $password . '"';
    $sql3 .= 'where userId = "tancheesen123@hotmail.com"';

    echo $sql3;
    $qry = mysqli_query($con, $sql3);
//////////////////////////////
    $password = password_hash("1234567897", PASSWORD_DEFAULT);


    $sql3 = 'update user set ';
    $sql3 .= 'password= "' . $password . '"';
    $sql3 .= 'where userId = "tansen@graduate.utm.my"';

    echo $sql3;
    $qry = mysqli_query($con, $sql3);



    ?>
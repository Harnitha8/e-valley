<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "e-valley";

    if(!$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){
        die("failed to connect");
    }
?>
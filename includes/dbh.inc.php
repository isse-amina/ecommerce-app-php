<?php 
    $dbServerName = "localhost";
    $dbUsername = "intraala_user";
    $dbPassword = "ctIPCIMC,]!Y";
    $dbName = "intraala_skincare";

    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);  

    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error()); 
    }
?>
<?php
    if (isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"]; 

        require_once("dbh.inc.php");
        require_once("functions.inc.php");

        if (emptyInputSignUp($fname, $lname, $email, $password) !== false) {
            header("location: ../signup-page.php?error=emptyinput"); 
            exit(); 
        }

        if (invalidEmail($email) !== false) {
            header("location: ../signup-page.php?error=invalidemail"); 
            exit(); 
        }

        if (emailExists($conn, $email) !== false) {
            header("location: ../signup-page.php?error=emailtaken"); 
            exit(); 
        }

        createUser($conn, $fname, $lname, $email, $password); 
    }
    else {
        header("location: ../signup-page.php"); 
        exit(); 
    }
?>
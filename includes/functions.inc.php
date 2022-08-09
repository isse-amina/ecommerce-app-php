<?php
session_start(); 
    function emptyInputSignUp($fname, $lname, $email, $password) {
        $result;
        if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result; 
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result; 
    }

    function emailExists($conn, $email) {
        $sql = "SELECT * FROM Users WHERE email = ?;"; 
        $stmt = mysqli_stmt_init($conn); 
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup-page.php?error=stmtfailed"); 
            exit(); 
        }

        mysqli_stmt_bind_param($stmt, "s", $email); 
        mysqli_stmt_execute($stmt); 

        $resultData = mysqli_stmt_get_result($stmt); 

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row; 
        }
        else {
            $result = false;
            return $result; 
        }

        mysqli_stmt_close($stmt); 
    }

    function createUser($conn, $fname, $lname, $email, $password) {
        $sql = "INSERT INTO Users (fname, lname, email, pwd) VALUES (?, ?, ?, ?);"; 
        $stmt = mysqli_stmt_init($conn); 
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup-page.php?error=stmtfailed"); 
            exit(); 
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT); 

        mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd); 
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt); 
        header("location: ../login-page.php?error=none"); 
        exit(); 
    }


    function emptyInputLogin($email, $password) {
        $result;
        if (empty($email) || empty($password)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result; 
    }

    function loginUser($conn, $email, $password) {
        $emailExists = emailExists($conn, $email); 

        if ($emailExists === false) {
            header("location: ../login-page.php?error=wrongemail"); 
            exit(); 
        }

        $pwdHashed = $emailExists["pwd"];
        $checkPwd = password_verify($password, $pwdHashed); 

        if ($checkPwd === false) {
            header("location: ../login-page.php?error=wrongpassword"); 
            exit(); 
        }
        else if ($checkPwd === true) {
            
            $_SESSION["fname"] = $emailExists["fname"]; 
            header("location: ../index.php"); 
            exit(); 
        }
    }
?>
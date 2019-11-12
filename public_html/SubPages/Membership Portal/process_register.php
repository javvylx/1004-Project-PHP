<?php

if (isset($_POST['signup-submit'])) {
    require '../Function.php';
    require 'dbconn.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $cfmpassword = $_POST['cpwd'];

    if (check_empty($firstname) || check_empty($lastname) || check_empty($email) || check_empty($password) || check_empty($cfmpassword)) {
        header("Location: Register.php?error=emptyfields&fname=".$firstname."&lname=".$lastname."&email=".$email);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        header("Location: Register.php?error=invalidfirstname&lname=".$lastname."$&email=".$email);
        $firstname = sanitize($_POST["firstname"]);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: Register.php?error=invalidlastname&fname=".$firstname."$&email=".$email);
        $lastname = sanitize($_POST["lastname"]);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: Register.php?error=invalidemail&fname".$firstname."&lname=".$lastname);
        $email = sanitize($_POST["email"]);
        exit();
    } elseif ($password !== $cfmpassword) {
        header("Location: Register.php?error=passwordcheck&fname=".$firstname."&lname=".$lastname."$&email=".$email);
        $password = sanitize($_POST["password"]);
        exit();
    } else {
        $sql = "SELECT email FROM wm_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: Register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: Register.php?error=emailtaken&email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO wm_users (fname, lname, email, password) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: Register.php?error=sqlinserror");
                    exit();
                } else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: Register.php?signup=success");

                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: Register.php");
    exit();
}

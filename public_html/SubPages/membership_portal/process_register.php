<?php

if (isset($_POST['signup-submit'])) {
    require '../function.php';
    require 'dbconn.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $cfmpassword = $_POST['cpwd'];

    if (check_empty($firstname) || check_empty($lastname) || check_empty($email) || check_empty($password) || check_empty($cfmpassword)) {
        header("Location: register.php?error=emptyfields&fname=".$firstname."&lname=".$lastname."&email=".$email);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        header("Location: register.php?error=invalidfirstname&lname=".$lastname."$&email=".$email);
        $firstname = sanitize($_POST["firstname"]);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: register.php?error=invalidlastname&fname=".$firstname."$&email=".$email);
        $lastname = sanitize($_POST["lastname"]);
        exit();
		
	//(?=.{8,}) #Ensure that string is of at least length 8 | (?=.*[A-Z]) #Match a single capital letter anywhere in string | (?=.*[a-z]) #Match a single small letter anywhere in string | (?=.*\d) #Match a single digit anywhere in string
		
	} elseif (!preg_match("/(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/", $password)) {
		header("Location: register.php?error=pwdrequirementsfalse&fname=".$firstname."&lname=".$lastname."$&email=".$email);
		$password = sanitize($_POST["password"]);
		exit();
		
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=invalidemail&fname".$firstname."&lname=".$lastname);
        $email = sanitize($_POST["email"]);
        exit();
    } elseif ($password !== $cfmpassword) {
        header("Location: register.php?error=passwordcheck&fname=".$firstname."&lname=".$lastname."$&email=".$email);
        $password = sanitize($_POST["password"]);
        exit();
    } else {
        $sql = "SELECT email FROM wm_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: register.php?error=emailtaken&email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO wm_users (fname, lname, email, password) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: register.php?error=sqlinserror");
                    exit();
                } else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: register.php?signup=success");

                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: register.php");
    exit();
}

<?php

if (isset($_POST['signup-submit'])) {
    require 'dbconn.php';
    include '../Function.php';

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $cfmpassword = $_POST['cpwd'];

    if (check_empty($firstname) || check_empty($lastname) || check_empty($email) || check_empty($password) || check_empty($cfmpassword)) {
        header("Location: Sign Up.php?error=emptyfields&fname=".$firstname."&lname=".$lastname."&email=".$email);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        header("Location: Sign Up.php?error=invalidfirstname&lname=".$lastname."$&email=".$email);
        $firstname = sanitize($_POST["firstname"]);
        exit();
    } elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: Sign Up.php?error=invalidlastname&fname=".$firstname."$&email=".$email);
        $lastname = sanitize($_POST["lastname"]);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: Sign Up.php?error=invalidemail&fname".$firstname."&lname=".$lastname);
        $email = sanitize($_POST["email"]);
        exit();
    } elseif ($password !== $cfmpassword) {
        header("Location: Sign Up.php?error=passwordcheck&fname=".$firstname."&lname=".$lastname."$&email=".$email);
        exit();
    } else {
        $sql = "SELECT email FROM wm_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: Sign Up.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: Sign Up.php?error=emailtaken&email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO wm_users (fname, lname, email, password) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: Sign Up.php?error=sqlinserror");
                    exit();
                } else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: Sign Up.php?signup=success");

                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: Sign Up.php");
    exit();
}
?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">

  <!-- Bootstrap -->
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Header-->
<?php include "../../header.php"; ?>

<!-- Start of Contents -->

                <div class ="container-fluid py-5 px-5">
                <?php
                if ($success = true) {
                    echo "<h2>Your registration is successful!</h2>";
                    echo "<h4 class='py-3'>Thanks for signing up " .$firstname.".</h4>";
                }
                ?>
                <input class="btn btn-primary" type="button" value="Log-in"
                onclick="window.location.href='Sign Up.php'" />
                <input class="btn btn-primary" type="button" value="Home"
                onclick="window.location.href='../../index.php'" />

				</div>

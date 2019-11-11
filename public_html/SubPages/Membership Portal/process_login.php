<?php

if (isset($_POST['login-submit'])) {
    require 'dbconn.php';
    include '../Function.php';

    $success = true;
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["pwd"]);

    if (check_empty($email) || check_empty($password)) {
        header("Location: Login Page.php?error=emptyfields&email=".$email);
        exit();
    } else {
        $sql = "SELECT * FROM wm_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: Login Page.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("Location: Login Page.php?error=wrongpwd&password");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['memberid'] = $row['user_id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION["loginflag"] =1;
                    $success = true;
                    header("Location: ../../index.php");
                    exit();
                }
            } else {
                header("Location: Login Page.php?error=wrongcred");
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: Login Page.php");
    exit();
}

<?php

include '../Function.php';


// First Name Validation
  $error="";
	$firstname = $errorMsg = "";
	$success = true;

    if (empty($_POST["firstname"])) {
        $errorMsg .= "First name is required.<br>";
        $success = false;
    } else if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        $errorname = "Only letters and white space allowed";
        $success = false;
    } else {
        $firstname = sanitize($_POST["firstname"]);
    }

    $error.=$errorMsg;

    // Last Name Validation
    $lastname = $errorMsg = "";
	$success = true;

    if (empty($_POST["lastname"])) {
        $errorMsg .= "Last name is required.<br>";
        $success = false;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
        $errorlast = "Only letters and white space allowed";
        $success = false;
    } else {
        $lastname = sanitize($_POST["lastname"]);
    }

    $error.=$errorMsg;

    // Email address Validation
    $email = $errorMsg = "";
    $success = true;

    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = sanitize($_POST["email"]);

// Additional check to make sure e-mail address is well-formed.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.";
            $success = false;
        }
    }
    $error.=$errorMsg;

    // Password Validation
    $password = $errorMsg = "";
    $success = true;
    if (empty($_POST["confirm_password"])) {
    $errorMsg .= "Confirm password field is required.<br>";
    $success = false;
	}
	if (($_POST["password"] != $_POST["confirm_password"]) && $success ){
		$errorMsg .= "The password entered does not match! Please confirm password again!<br>";
		$success = false;
	}
	else {
		$confirm_password = sanitize($_POST["confirm_password"]);
	}

    $error.=$errorMsg;
    $register='Sign Up.php';
    $home = '../../Watchme_Landing_Page.php';


    ?>

<!DOCTYPE html>
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
                if($success){
                echo "<h2>Your registration is successful!</h2>";
                echo "<h4 class='py-3'>Thanks for signing up " . $firstname . ".</h4>";

                ?>
                <input class="btn btn-primary" type="button" value="Log-in"
                onclick="window.location.href='Sign Up.php'" />
                <input class="btn btn-primary" type="button" value="Home"
                onclick="window.location.href='../../Watchme_Landing_Page.php'" />

                <?php }
                else{
                echo "<h2>Oops!</h2>";
                echo "<h4 class='py-3'>The following input errors were detected:</h4>";
                echo $error;
                ?>
                <div class="py-5">
                  <input class="btn btn-primary" type="button" value="Return to Sign up"
                  onclick="window.location.href='Sign Up.php'" />
                </div>
              <?php } ?>



            </div>

    <?php
    include "../../footer.php";
    ?>

    </body>
</html>

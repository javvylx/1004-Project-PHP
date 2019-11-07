<?php
include '../Function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$email = $password = "";
$errorMsg = "";
$success = true;
$email = sanitize($_POST["Email"]);
$password = sanitize($_POST["Password"]);

if (check_empty($email))
{
    $errorMsg .= "Email Required \n";
}
else {
  if (filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    $success *= true;
  }
  else {
    $success *= false;
    $errorMsg .= "Invalid email format. \n";
  }
}


if (check_empty($password)){
  $errorMsg .= "Password Required \n";
}

loginToDB();

if ($success){ // if everything is okay and log in,
  //insert session code here
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">

        <!-- Bootstrap -->
        <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css" />
        <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--  Custom CSS -->
        <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Header-->
        <?php include "../../header.php"; ?>
        <!-- Header-->

        <!-- Codes to be implemented [Content] -->
        <div class="container py-5">
          <?php if ($success):  ?>
            <h2>Login successful!</h2><br>
            <h3> Welcome back! </h3><br>
            <a href='../../Watchme_Landing_Page.php'><button type='button' class='btn btn-outline-secondary'>Return to Home</button></a>
          <?php else:  ?>
            <h2>Login was unsuccessful!</h2><br>
            <p> Please try again!</p><br>
            <a href='Login Page.php'><button type='button' class='btn btn-outline-secondary'>Return to Login</button></a>
          <?php endif; ?>

        </div>
        <!--footer-->
        <?php include "../../footer.php" ?>
        <!--footer-->


        <!--JS Plug In-->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap-4.3.1.js"></script>

    </body>

</html>

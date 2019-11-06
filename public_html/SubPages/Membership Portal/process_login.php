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
        <div class="container">
            <?php
            include '../Function.php';
            $Email = "";
            $Password = "";
            $errorMsg = "";
            $success = true;
            check_empty($_POST["Email"]);
            check_empty($_POST["Password"]);
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $errorMsg .= "Invalid email format.";
                $success = false;
            }
            $Email = sanitize_input($_POST["Email"]);

            $Password = sanitize_input($_POST["Password"]);

            if ($success) {
                echo "<h2>Login successful!</h2><br>";
                echo '<h3> Welcome back! </h3><br>';
                echo "<a href='Watchme_Landing_Page.php'><button type='button' class='btn btn-outline-secondary'>Return to Home</button></a> ";
            } else {
                echo "<h2>Login was unsuccessful!</h2><br>";
                echo '<p> Please try again!</p><br>';
                echo "<a href='Login Page.php'><button type='button' class='btn btn-outline-secondary'>Return to Login</button></a> ";
            }
            ?>
        </div>
        <!--footer-->
        <?php include "../../footer.php" ?>
        <!--footer-->


        <!--JS Plug In-->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap-4.3.1.js"></script>

    </body>

</html>


/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

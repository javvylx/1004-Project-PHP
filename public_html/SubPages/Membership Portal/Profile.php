<!DOCTYPE html>
<?php
include '../Function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");




$data = getUserData($_SESSION['memberid']);
?>
<html lang="en" dir="ltr">

<!-- Header-->
<?php include "../../header.php"; ?>

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
        <!-- Codes to be implemented [Content] -->
        <!--Start of Breadcrumb -->
        <div class="container-fluid-remove-paddings">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="Login Page.php">Membership Portal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <!--End of Breadcrumb -->
        <div class="container py-auto px-auto">

            <div class="container">
                <!-- Title of the the page-->
                <div class="jumbotron" id="jumboTron">
                    <h1>Profile Page</h1>
                </div>

            </div>
            <section class="container">
                <form action="process_Profile.php" method="POST">
                    <!--Email-->
                    <div class ="form-group">
                        <label for ="email">Email:</label>
                        <input type="text" class ="form-control" name="email" readonly="true" id="email" value="<?php
                        if ($data->num_rows > 0) {
                            $row = mysqli_fetch_array($data);
                            echo $row["email"];
                        }
                                ?>">
                            </div>

                            <!--First name-->
                            <div class ="form-group">
                                <label for ="firstname">First Name:</label>
                                <input type="text" class ="form-control" name="fname" readonly="true" id="fName" value="<?php
                                echo $row["fname"];
                                ?>">
                            </div>

                            <!--Last name-->
                            <div class ="form-group">
                                <label for ="lastname">Last Name:</label>
                                <input type="text" class ="form-control" name="lname" readonly="true" id="lName" value="<?php
                                echo $row["lname"];

                            ?>">
                        </div>


                        <!--Old Password-->
                        <div class ="form-group">
                            <label for ="oldpass">Old Password:</label>
                            <input type="password" class ="form-control" name="pwd" id="pwd">
                        </div>
                        <!--New Password-->
                        <div class ="form-group">
                            <label for ="newpass" >New Password:</label>
                            <input type="password" class ="form-control" name="npwd">
                        </div>
                        <!--Confirm Password-->
                        <div class ="form-group">
                            <label for ="confirmpass" >Confirm Password:</label>
                            <input type="password" class ="form-control" name="cpwd">
                        </div>

                        <a href="process_profile.php"><input type="submit" value="Update" class ="btn btn-primary btn-lg" name="update_profile"></a>
                        &nbsp; &nbsp;&nbsp; &nbsp;
                        <input type="reset" value="Clear" class ="btn btn-danger btn-lg" name="Clear">



                    </form>
                </section>
                <!--footer-->
                <?php include "../../footer.php"; ?>
            <!--footer-->


            <!--JS Plug In-->
            <script src="../../js/jquery-3.3.1.min.js"></script>
            <script src="../../js/bootstrap-4.3.1.js"></script>
            <script src="../../js/Membership Portal/Membership.js"></script>

    </body>

</html>

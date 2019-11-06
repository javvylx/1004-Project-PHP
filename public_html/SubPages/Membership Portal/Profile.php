<!DOCTYPE html>
<html lang="en">
    <!-- Webpage by Amitpaul Singh Sandhu -->

    <head>
        <meta name="Description" content="Watch.Me Profile">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
        <title>Profile</title>

        <!-- Bootstrap -->
        <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--  Custom CSS -->
        <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <?php
        include "../../header.php";
        ?>
        <!--Start of contents -->
        <form name="signup" action="demo_form.asp" onsubmit="return validateForm()" method="get" class="form">
            <div class="container-fluid" id="page2">
                <!-- Title of the page -->
                <div class="jumbotron" id="jumboTron"> 
                    <img src="../../images/Membership Portal/Profile Picture Placeholder.png"  height="150" width="150" alt="Profile Picture" title="Profile Picture"/>
                    <h2>Welcome, John Doe</h2>


                </div>
                <div class="row" >  
                    <div class="col-md-6">
                        <p>First Name: </p>
                        <input type="text" name="First Name" value="John" placeholder="First Name" readonly="readonly" />
                    </div>
                    <div class="col-md-6">
                        <p>Last Name: </p>
                        <input type="text" name="Last Name" value="Doe" placeholder="Last Name" readonly="readonly"/>
                    </div>
                </div>
                <div class="row"  >
                    <div class="col-md-6">
                        <p>Email Address: </p>
                        <input type="text" name="email" value="johndoe98@gmail.com" placeholder="Email Address" readonly="readonly"/>
                    </div>
                    <div class="col-md-6">
                        <p>Confirm Email Address: </p>
                        <input type="text" name="cemail" value="" placeholder="Confirm Email Address" disabled="disabled"/>
                    </div>

                </div>
                <div class="row" >
                    <div class="col-md-6">

                        <p>Gender: </p>
                        <input type="radio" name="Gender" value="Female" id="F" checked="checked" disabled="disabled"/>&nbsp; Female &nbsp;
                        <input type="radio" name="Gender" value="Male" id="M" disabled="disabled"/>&nbsp; Male
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" >

                        <p>Password: </p>
                        <input type="password" name="password" value="Johndo31" placeholder="Enter Password" id="p" readonly="readonly"/>

                    </div>
                    <div class="col-md-6">
                        <p>Confirm Password: </p>
                        <input type="password" name="cpassword" value="" placeholder="Confirm Password" id="cp" disabled="disabled"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>Phone Number: </p>
                        <input type="text" name="phone_num" value="95466258" placeholder="Enter Phone Number" readonly="readonly"/>
                    </div>
                    <div class="col-md-6">
                        <p>Confirm Phone Number: </p>
                        <input type="text" name="cphone_num" value="" placeholder="Confirm Phone Number" disabled="disabled"/>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-md-6 text-right">
                        <input type="submit" value="Submit" name="btn_submit"  id="btn_submit"/>


                    </div>
                </div>
            </div>
        </form>
        <!--End of contents -->

        <!--Start of footer-->
        <?php
        include "../../footer.php";
        ?>
        <!--End of footer-->


        <!--JS Plug In-->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap-4.3.1.js"></script>

    </body>
</html>
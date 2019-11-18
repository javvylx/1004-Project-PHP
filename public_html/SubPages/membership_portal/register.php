<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Amitpaul Singh Sandhu -->

<!-- PHP pack done by Lim Zheng Hao, Javier -->

<head>
  <meta name="Description" content="Sign Up">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon/favicon.png">
  <title>Sign Up</title>

  <!-- Bootstrap -->
  <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css" />
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">
</head>

<body>

  <!-- Header-->
  <?php include "../../header.php";
		if (isset($_SESSION["loginflag"])) {
			header("Location: ../../index.php");
		}
	  	?>
  <!-- Header-->


  <!--Start of Breadcrumb -->
  <div class="container-fluid-remove-paddings">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
      </ol>
    </nav>
  </div>
  <!--End of Breadcrumb -->

  <!--Start of contents -->


  <div class="container py-auto px-auto">

    <div class="container" id="page1">
      <!-- Title of the the page-->
      <div class="jumbotron" id="jumboTron">
        <h1>Sign Up</h1>
        <h2>Create your account</h2>
      </div>
    </div>
    <?php //Creates an error message on top of the form 
            if (isset($_GET["error"])) {
                if ($_GET['error'] == "emptyfields") {
                    echo "<p class='errormsg'> Error: Please fill in all the fields! </p>";
                } elseif ($_GET["error"] == "invalidfirstname") {
                    echo '<p class="errormsg"> Error: Invalid First Name! Only letters and white space allowed!</p>';
                } elseif ($_GET["error"] == "invalidlastname") {
                    echo '<p class="errormsg"> Error: Invalid Last Name! Only letters and white space allowed!</p>';
                } elseif ($_GET["error"] == "invalidemail") {
                    echo '<p class="errormsg"> Error: Invalid Email Address Format!</p>';

				} elseif ($_GET["error"] == "pwdrequirementsfalse") {
                    echo '<p class="errormsg"> Error: Your password must be more than 8 character and contain at least a number, lowercase and uppercase letter! </p>';

                } elseif ($_GET["error"] == "passwordcheck") {
                    echo '<p class="errormsg"> Error: Your password do not match!</p>';
					
                } elseif ($_GET["error"] == "emailtaken") {
                    echo '<p class="errormsg"> Error: Email address has already been taken! </p>';
                }
				// Creates an success message if the new user was created.
            	} elseif ($_GET["signup"] == "success") {
                echo "<p class='errormsg'>Thank you for signing up for Watch Me! Click here to return to <a href='login_page.php'><u>Login Page</u></a></p>";
            }
            ?>
    <section class="container">
      <form action="process_register.php" method="POST" name="Register" onsubmit="validateForm()">
        <!--First name-->
        <div class="form-group">
          <label for="firstname">First Name:</label>
          <input type="text" class="form-control" required name="fname">
        </div>

        <!--Last name-->
        <div class="form-group">
          <label for="lastname">Last Name:</label>
          <input type="text" class="form-control" required name="lname">
        </div>

        <!--Email-->
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" required name="email">
        </div>

        <!--Password-->
        <div class="form-group">
          <label for="pass">Password (MUST be more than 8 characters, contain a number, lowercase and uppercase letter):</label>
          <input type="password" class="form-control" name="pwd" minlength="8" required pattern=".{8,48}" title="Password must be more than 8 characters!">
        </div>
        <!--Confirm Password-->
        <div class="form-group">
          <label for="confirmpass">Confirm Password:</label>
          <input type="password" class="form-control" name="cpwd" required minlength="8" pattern=".{8,48}" title="Password must be more than 8 characters!">
        </div>

        <!--Agree to terms and conditions-->
        <div class="checkbox">
          <input type="checkbox" required name="terms">
          <a href="#" data-toggle="modal" data-target="#mymodal"><label for='checkbox' id="condition">Agree to terms and conditions</label></a>
        </div>

        <input type="submit" class="btn btn-primary btn-lg" name="signup-submit" id="register">
        &nbsp; &nbsp;&nbsp; &nbsp;
        <input type="reset" value="Clear" class="btn btn-danger btn-lg" name="Clear">

        <!--Pop Up -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="modal fade" id="mymodal">
                <div class="modal-dialog ">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1>Terms and Conditions</h1>
                    </div>
                    <div class="modal-body">
                      <h6>
                        Watch.me is an online service provided by Watch.Me Ptd Ltd.
                        <br>
                        You become a member of Watch.Me and be able to use all the services we provide.<br>
                        This Agreement takes effect as soon as you indicate your acceptance of these terms.<br>
                        By accepting the terms, you represent that you are at least the legal age of Singapore.<br>
                        Our products that you purchase can only be use for your own personal use.<br>
                        A violation of any of the Terms will result in an immediate termination of your Services
                      </h6>
                    </div>
                    <div class="modal-footer">
                      <input class="btn btn-primary" data-dismiss="modal" value="Close">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
  </div>
  <!--End of contents -->

  <!--footer-->
  <?php include "../../footer.php" ?>
  <!--footer-->


  <!--JS Plug In-->
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/bootstrap-4.3.1.js"></script>
  <script src="../../js/membership_portal/Membership.js"></script>
</body>

</html>

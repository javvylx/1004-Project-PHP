<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Amitpaul Singh Sandhu -->

<head>
<meta name="Description" content="Sign Up">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
<title>Sign Up</title>

<!-- Bootstrap -->
<link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--  Custom CSS -->
<link href="../../css/mainframe.css" rel="stylesheet" type="text/css">
</head>

<body>

  <!-- Header-->
	<?php include "../../header.php"; ?>
	<!-- Header-->


<!--Start of Breadcrumb -->
<div class="container-fluid-remove-paddings">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="Login Page.html">Membership Portal</a></li>
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

<div class=" container-fluid">
	<h5 class ="text-secondary"> For Existing Members, please go to <a class="text-secondary" href='Login Page.php'>Login Page.</a></h4>
</div>


  <section class="container">
	<form action="Process_Sign Up.php" method="POST">
		<div class ="form-group">
		  <label for ="firstname">First Name:</label>
		  <input type='text' class =' form-control'id='firstname'placeholder='Enter first name' name='firstname'  required pattern='[A-Za-z]{3,}'>
		</div>
		<!--required is used for HTML Validation, a pattern is included to check user input if they are using alphabets be it small or large case-->
		<div class ="form-group">
		  <!--Last name form box-->
		  <label for ="lastname">Last Name:</label>
		  <input type='text' class =' form-control'id='lastname'placeholder='Enter last name' name='lastname' required pattern='[A-Za-z]{3,}'>
		</div>
		<!--Email-->
		<div class ="form-group">
		  <label for ="email">Email:</label>
		  <input type='email' class =' form-control'id='email'placeholder='Enter email' name='email'required>
		</div>
		<!--Password, pattern: 8 or more characters; would include at least one number and one upper and lowercase letter-->
		<div class ="form-group">
		  <label for ="password">Password:</label>
		  <input type='password' class =' form-control' id='password' placeholder='Password' name='password'>
		</div>
		<!--Confirm password included a confirm password span message so that user can know that he type the same input-->
		<div class ="form-group">
		  <label for ="confirm_password">Confirm Password: <span id='message'></span></label>
		  <input type='password' class='form-control' id='confirm_password' placeholder='Confirm Password' name='confirm_password'>
		</div>

		<!--Agree to terms and conditions-->
		<div class="checkbox">
		  <input type="checkbox" name="checkbox"<?php if (isset($_POST['submit']) && isset($_POST['checkbox'])) echo"checked" ?>>
		  <label for = 'checkbox'>Agree to terms and conditions</label>
		</div>

		<input type="submit" class ="btn btn-primary btn-lg " value="Submit" name="submit"> &nbsp; &nbsp;&nbsp; &nbsp;<input type="reset" value="Clear" class ="btn btn-danger btn-lg" name="Clear">

	</form>
  </section>
</div>
<!--End of contents -->

<!--footer-->
<?php include "../../footer.php" ?>
<!--footter-->


<!--JS Plug In-->
<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../js/bootstrap-4.3.1.js"></script>
<script src="../../js/Membership Portal/Membership.js"></script>
</body>
</html>

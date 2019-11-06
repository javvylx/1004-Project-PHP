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
		<li class="breadcrumb-item"><a href="../../Watchme_Landing_Page.php">Home</a></li>
		  <li class="breadcrumb-item"><a href="Login Page.php">Membership Portal</a></li>
		<li class="breadcrumb-item active" aria-current="page">Sign Up</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->
	<div class="container py-auto px-auto">
		<form name="signup" action="demo_form.asp" onsubmit="return validateForm()" method="get" class="form">
			<div class="container" id="page1">
				<!-- Title of the the page-->
				<div class="jumbotron" id="jumboTron">

					<h1>Sign Up</h1>
					<h2>Create your account</h2>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="form-control form-rounded" name="First Name" value="" placeholder="First Name">
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control form-rounded" name="Last Name" value="" placeholder="Last Name">
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6 ">
						<br>
						<input type="text" class="form-control form-rounded" name="email" value="" placeholder="Email Address">
					</div>
					<div class="col-md-6">
						<br>
						<input type="text" name="cemail" class="form-control form-rounded" value="" placeholder="Confirm Email Address">
					</div>
				</div>
			</div>

			<div class="container my-3 py-1">
				<div class="row">
					<div class="col-md-6">
						<p>Gender: </p>
						<select>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
				</div>
			</div>

			<div class="container my-3">
				<div class="row">
					<div class="col-md-6">
						<input type="password" class="form-control form-rounded" name="password" value="" placeholder="Enter Password" id="p">
						<input type="checkbox" name="show_Password1" value="ON" onclick="show_password()" id="check1"> Show Password
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<input type="password" class="form-control form-rounded" name="cpassword" value="" placeholder="Confirm Password" id="cpw">
						<input type="checkbox" name="show_Password2" value="ON" onclick="show_password()" id="check2">Show Password
					</div>
				</div>
			</div>

			<div class="container my-4">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="phone_num" class="form-control form-rounded" value="" placeholder="Enter Phone Number" />
					</div>
				</div>
			</div>


			<div class="container my-3">
				<div class="row">
					<div class="col-md-6">
						<input type="text" name="cphone_num" class="form-control form-rounded" value="" placeholder="Confirm Phone Number" />
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<input type="submit" class ="btn btn-primary btn-lg " value="Submit" name="submit"> &nbsp; &nbsp;&nbsp; &nbsp;
						<a href="Profile.php"><input type="reset" value="Clear" class ="btn btn-danger btn-lg" name="Clear"></a>
					</div>
				</div>
			</div>
		</form>
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

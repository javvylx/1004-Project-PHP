<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Amitpaul Singh Sandhu -->

<head>
	<meta name="Description" content="Watch.Me Membership Portal">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
	<title>Membership Portal</title>

	<!-- Bootstrap -->
	<link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css" />
	<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--  Custom CSS -->
	<link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php
    include "../../header.php";
    ?>
<!--Start of Breadcrumb -->
  <div class="container-fluid-remove-paddings">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Membership Portal</li>
      </ol>
    </nav>
  </div>
  <!--End of Breadcrumb --><strong></strong>
	<!--Start of contents -->
	<div class="container-fluid form">
		<div class="row no-gutter">
			<!-- The creation of account side -->
			<div class="col-md-6 bg-light form">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-xl-7 mx-auto">
							<h3 class="display-4">Don't have an account?</h3>

							<p>
								<h5>Why join Watch.Me Club?</h5>
							</p>
							<ul>
								<li>Members have premium access to special offers</li>
								<li>Receive special access to new deals</li>
								<li>Review your previous purchases</li>
							</ul>
							<form>
								<a href="Register.php"> <input type="button" class="btn btn-primary btn-lg" value="Create Account" name="create_account" /></a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- The login side -->
			<div class="col-md-6 bg-light">
				<div class="login d-flex align-items-center py-5">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 col-xl-7 mx-auto">
								<h3 class="display-4">Watch.Me!</h3>
								<p class="text-muted mb-4">Sign in into your account</p>
							<?php
			
							if(isset($_GET["error"])){
								if($_GET['error'] == "emptyfields"){
									echo '<p class="errorloginmsg"> Error: Please fill in all the fields! </p>';
								}
								if($_GET['error'] == "wrongpwd"){
									echo '<p class="errorloginmsg"> Error: Password does not match! Please re-enter password! </p>';
									
								}
								if($_GET['error'] == "wrongcred"){
									echo '<p class="errorloginmsg"> Error: User Credientials not found! Please sign up! </p>';
								}
							}
							else if ($_GET["login"] == "success") {
				 			 	echo '<p class="loginsuccessmsg">Congratulations, you have signed in! </p>';
							}
							?>
								
								<form action="process_login.php" method="post">
									<div class="form-group mb-3">
										<input type="text" placeholder="Email address" class="form-control rounded-pill border-0 shadow-sm px-4" name="email">
									</div>
									<div class="form-group mb-3">
										<input type="password" placeholder="Password" class="form-control rounded-pill border-0 shadow-sm px-4" name="pwd">
									</div>
									<button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" name="login-submit">Sign in</button></a>
								</form>
							</div>
						</div>
					</div><!-- End -->

				</div>
			</div><!-- End -->

		</div>
	</div>
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

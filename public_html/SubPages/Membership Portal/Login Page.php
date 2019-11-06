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

	<!--Start of Navigation Bar-->
	<div class="container-fluid-remove-paddings">
		<nav class="navbar navbar-expand-lg navbar-light navbar bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../../Watchme_Landing_Page.html"><img src="../../images/HomePage/Navbar icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

							<div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../Product Overview/Casual Product Page.html">Casual Watches</a>
								<a class="dropdown-item" href="../Product Overview/Sports Product Page.html">Sports Watches</a>
							</div>
						</li>

						<li class="nav-item">
							<a href="../About Us/About Us.html" class="nav-link m-2 menu-item">About Us</a>
						</li>

						<li class="nav-item">
							<a href="../Contact Us/Contact Us.html" class="nav-link m-2 menu-item">Contact Us</a>
						</li>

						<li class="nav-item">
							<a href="Login Page.html" class="nav-link m-2 menu-item">Membership Portal</a>
						</li>

						<li class="nav-item">
							<a href="../Shopping Cart/Shopping Cart.html" class="nav-link m-2 menu-item">Shopping Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!--End of Navigation Bar-->

	<!--Start of Breadcrumb -->
	<div class="container-fluid-remove-paddings">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../../Watchme_Landing_Page.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Membership Portal</li>
			</ol>
		</nav>
	</div>
	<!--End of Breadcrumb -->


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
								<a href="Sign Up.html"> <input type="button" class="btn btn-primary btn-lg" value="Create Account" name="create_account" /></a>
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
								<form>
									<div class="form-group mb-3">
										<input id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
									</div>
									<div class="form-group mb-3">
										<input id="inputPassword" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
									</div>
									<div class="custom-control custom-checkbox mb-3">
										<input id="customCheck1" type="checkbox" checked class="custom-control-input">
										<label for="customCheck1" class="custom-control-label">Remember password</label>
									</div>
									<a href="Profile.html"> <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button></a>
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
	<section class="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Category</h5>
					<ul class="list-unstyled links">
						<li><a href="../Product Overview/Casual Product Page.html"><i class="fa fa-angle-double-right"></i>Casual Watches</a></li>
						<li><a href="../Product Overview/Sports Product Page.html"><i class="fa fa-angle-double-right"></i>Sport Watches</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Company</h5>
					<ul class="list-unstyled links">
						<li><a href="../About Us/About Us.html"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="../Contact Us/Contact Us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>NewsLetter</h5>
					<ul class="list-unstyled links">
						<div id="mc_embed_signup">
							<form target="_blank" action="javascript:void();" method="get" class="subscribe_form relative mail_part">
								<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
								<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">Subscribe</button>
							</form>
						</div>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline socialmedia text-center">
						<li class="list-inline-item"><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="http://www.instagram.com" target="_blank"> <i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="../../Watchme_Landing_Page.html">Watch.me Pte Ltd Corporation</a></u></p>
					<p class="h6">&copy All Rights Reversed.</p>
					<p class="h6">A huge thank you to <a href="https://shopino.com.ng/home" target="_blank"><u>Shopino</u></a> & <a href="https://www.watchshop.com" target="_blank"><u>Watch Shop</u></a> for the Website Design Inspiration & Watch Images </p>
				</div>
				<hr>
			</div>
		</div>
	</section>
	<!--End of footer-->


	<!--JS Plug In-->
	<script src="../../js/jquery-3.3.1.min.js"></script>
	<script src="../../js/bootstrap-4.3.1.js"></script>


</body>

</html>

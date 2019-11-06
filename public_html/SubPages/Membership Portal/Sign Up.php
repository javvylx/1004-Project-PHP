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

<!--Start of Navigation Bar-->
<div class="container-fluid-remove-paddings">	
	<nav class="navbar navbar-expand-lg navbar-light navbar bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="../../Watchme_Landing_Page.html"><img src="../../images/HomePage/Navbar icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
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
		  <li class="breadcrumb-item"><a href="Login Page.html">Membership Portal</a></li>
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
						<a href="Profile.html"><input type="reset" value="Clear" class ="btn btn-danger btn-lg" name="Clear"></a>
					</div>
				</div>
			</div>
		</form>
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
                            <form target="_blank"
                                action="javascript:void();"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">Subscribe</button>
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
	  <script src="../../js/Membership Portal/Membership.js"></script>
															 
</body>
</html>
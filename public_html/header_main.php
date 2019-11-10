<?php
error_reporting(0);
session_start();
if ($_SESSION["loginflag"]==1):  ?>

	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light navbar fixed-top bg-light">
			  <div class="container-fluid">
				<a class="navbar-brand" href="index.php"><img src="images/HomePage/Navbar icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

					  <div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="SubPages/Product Overview/Casual Product Page.php">Casual Watches</a>
						  <a class="dropdown-item" href="SubPages/Product Overview/Sports Product Page.php">Sports Watches</a>
					  </div>
					</li>

					  <li class="nav-item">
							<a href="SubPages/Shopping Cart/Shopping Cart.php" class="nav-link m-2 menu-item">Shopping Cart</a>
						</li>

						<li class="nav-item">
							<a href="SubPages/Membership Portal/process_logout.php" class="nav-link m-2 menu-item"  >Logout</a>
						</li>

				  </ul>
				</div>
			  </div>
		</nav>
<?php else: ?>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light navbar fixed-top bg-light">
		  <div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="images/HomePage/Navbar icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

				  <div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="SubPages/Product Overview/Casual Product Page.php">Casual Watches</a>
					  <a class="dropdown-item" href="SubPages/Product Overview/Sports Product Page.php">Sports Watches</a>
				  </div>
				</li>
				  <li class="nav-item">
						<a href="SubPages/About Us/About Us.php" class="nav-link m-2 menu-item">About Us</a>
					</li>

					<li class="nav-item">
						<a href="SubPages/Contact Us/Contact Us.php" class="nav-link m-2 menu-item">Contact Us</a>
					</li>

					<li class="nav-item">
						<a href="SubPages/Membership Portal/Login Page.php" class="nav-link m-2 menu-item">Membership Portal</a>
					</li>

			  </ul>
			</div>
		  </div>
	</nav>
<!--End of Navigation Bar-->
<?php endif;  ?>

<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Kyle Wong Kaige -->
<?php
include '../Function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$watchData = getWatchdata(4);
$row = $watchData->fetch_assoc();
?>
<head>
  <meta name="Description" content="Watch.Me Sports Casio SWV-58U-1AVE">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
  <title>Sports Casio SWV-58U-1AVEF</title>

  <!-- Bootstrap -->
  <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
	<link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<!-- Eventually only 1 product page will be used and all information will be drawn from a database -->

<body>

<!--Start of Navigation Bar-->
<div class="container-fluid-remove-paddings">
	<nav class="navbar navbar-expand-lg navbar-light navbar bg-light" >
		  <div class="container-fluid">
			<a class="navbar-brand" href="../../index.php"><img src="../../images/HomePage/Navbar icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
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
						<a href="../Membership Portal/Login Page.html" class="nav-link m-2 menu-item">Membership Portal</a>
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
		<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
		 <li class="breadcrumb-item"><a href="../Product Overview/Sports Product Page.html">Sports Watches</a></li>
		<li class="breadcrumb-item active" aria-current="page">Casio SWV-58U-1AVEF</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->

<!--Start of Carousel-->
<div class="block">
    <div class="row">
        <div class="col-lg-6">
            <section class="imageblock">
                <!--Start of Carousel-->
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: gray; border-radius:25px">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner ImgBox" role="listbox">
                        <!--
                            Hopefully capable of implementing a for loop for each image of the item into the carousel later on
                        -->
                        <div class="carousel-item carousel-product active">
                            <img class="d-block mx-auto" src="../../images/Sport Watches/2/Sports 2 Casio SGW-100-1VEF.jpg" alt="Casio SWV-58U-1AVEF Face" title="Casio SWV-58U-1AVEF Face">
                        </div>
                        <div class="carousel-item carousel-product">
                            <img class="d-block mx-auto" src="../../images/Sport Watches/2/Sports 2 Casio SGW-100-1VEF3 (2).jpg" alt="Sports Casio SWV-58U-1AVEF Strap" title="Casio SWV-58U-1AVEF Strap">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
				</section>
			</div>
<!--End of Carousel-->
        <div class="col-lg-6 detcol">
            <!--
                Extra information to be drawn from the database
            -->
            <div class="detailblock">
                <br>
                <h5><?php echo $row["product_name"] ?></h5>
                <h6><?php echo $row["brand"] ?></h6><br>
                <h5>$<?php echo $row["product_price"] ?></h5><br><hr>
                <h6><?php echo $row["quantity"] ?> in stock</h6><br><br>
                <form action="../Shopping Cart/process_addtocart.php" method="post">
                    <?php  
                    echo "<input type='hidden' name='p_id' value=" . $row["product_id"] . " />"
                    ?>
                    <button type="submit" class="btn btn-primary addCartbtn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div id="detailSect">
        <div class="card">
            <div class="card-header">
                <a data-toggle="collapse" href="#details">
                    <h5 class="colorh5">Details</h5>
                </a>
            </div>
            <div id="details" class="panel-collapse collapse insideInfo">
                <div class="row">
                    <div class="col-6">
                        <p>
                            <?php echo $row["product_desc"] ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>
                                <strong>Brand: </strong> <?php echo $row["brand"] ?>
                            </li>
                            <li>
                                <strong>Model Collection: </strong> <?php echo $row["model_coll"] ?>
                            </li>
                            <li>
                                <strong>Model Name: </strong> <?php echo $row["model_name"] ?>
                            </li>
                            <li>
                                <strong>Guarantee: </strong> <?php echo $row["guarantee"] ?> years
                            </li>
                            <li>
                                <strong>Packaging: </strong> <?php echo $row["packaging"] ?> Packaging
                            </li>
                            <li>
                                <strong>MPN: </strong> <?php echo $row["mpn"] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a data-toggle="collapse" href="#materials">
                    <h5 class="colorh5">Materials and Extra Info</h5>
                </a>
            </div>
            <div id="materials" class="panel-collapse collapse insideInfo">
                <ul>
                    <li>
                        <strong>Analogue/Digital: </strong> <?php echo $row["anadigi"] ?>
                    </li>
                    <li>
                        <strong>Primary Material: </strong> <?php echo $row["primary_mat"] ?>
                    </li>
                    <li>
                        <strong>Case Shape: </strong> <?php echo $row["case_shape"] ?>
                    </li>
                    <li>
                        <strong>Dial Color: </strong> <?php echo $row["dial_color"] ?>
                    </li>
                    <li>
                        <strong>Strap Color: </strong> <?php echo $row["strap_color"] ?>
                    </li>
                    <li>
                        <strong>Strap Type: </strong> <?php echo $row["strap_type"] ?>
                    </li>
                    <li>
                        <strong>Water Resistance: </strong> <?php echo $row["water_res_m"] ?> metres
                    </li>
                </ul>
            </div>
        </div>
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
					<p><u><a href="../../index.php">Watch.me Pte Ltd Corporation</a></u></p>
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

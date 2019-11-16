<!--
================ DISCLAIMER ================
This site contains copyrighted material the use of which has not always been specifically authorized by the copyrighted owner.
In accord with our nonprofit project, we are using these images as examples as to show how the project  web system would look 
like with actual products to display. We believe this constitutes a 'fair-use' of any copyrighted material as provided in 
Section 107 of the US Copyright Law. In Accordance with Title 17 U.S.C. Section 107, the materials on this site is distributed
without profit.

If you wish to use the copyrighted materials from this site for purposes of your own that go beyond fair use, you must obtain 
permission from the copyrighted owner.

-->
<!DOCTYPE html>
<html lang="en">
<!-- Website has been SEO-Optimized -->
<!-- Webpage, individual webpages compilation/organization & skeleton file done by Lim Zheng Hao, Javier -->

<head>
  <meta name="Description" content="Startup Company: Watch.Me! selling brands such as Hugo Boss, Casio & Pulsar Watches.">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.png">
  <title>Homepage</title>

  <!-- Bootstrap & online CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="css/mainframe.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<!-- Header-->
<?php include "header_main.php" ?>

<!-- Header-->

<!--Start of Carousel-->
	<div class="container carousel-nav-top">
		<div id="carouselExampleIndicators1" class="carousel slide carousel-top" data-ride="carousel">
		  <ol class="carousel-indicators"> <!--Setting Carousel-sliders part -->
             <!-- Loop for each image of the item into the carousel-->
			<li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="carousel-item active"><a href="subpages/product_overview/sports_product_page.php"><img class="d-block mx-auto" src="images/homepage/carousel_images/carousel_banner_0.jpg" alt="Discounted Sports Watches Slider 1" title="Discounted Sports Watches Slider"></a>
			</div>
			<div class="carousel-item"><a href="SubPages/Individual Product Pages/Sports Casio GBD-800UC-3.php"><img class="d-block mx-auto" src="images/homepage/carousel_images/carousel_banner_1.jpg" alt="Sports Watches Slider 2" title="Discounted Sports Watches Slider"></a>
			</div>
			<div class="carousel-item"><a href="SubPages/Individual Product Pages/Casual Pulsar Solar PZ6003X1.php"><img class="d-block mx-auto" src="images/homepage/carousel_images/carousel_banner_2.jpg" alt="Casual Watches Slider 3" title="Casual Watches Slider"></a>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next"
			href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
		</div>
	</div>
</div>
<!--End of Carousel-->

<!-- Start of promotion images -->
<div class="container-fluid text-center">
	<img class="promotion-images" src="images/homepage/banners/banner1.jpg" alt="Big Banner for Casual Watches" title="Big Banner for Casual Watches">
</div>


<div class="container-fluid text-center">
	<img class="promotion-images" src="images/homepage/banners/banner2.jpg" alt="Big Banner for Sports Watches" title="Big Banner for Sports Watches">
</div>

<div class="container-fluid opening-promo">
		<div class="centre text-center">
		<div class="col-lg-12 col-md-12 col-sm-12"><h4><b>🎆Opening Promotion🎆</b></h4></div>
		<div class="row">
			<div class="col-lg-6">
				<div class="textinimage">
				<img src="images/homepage/promotion_images/sunset_watch.jpg" alt="Casual Watches Banner" title="Casual Watch Banner">
				<div class="topcentered"><h5><b> Casual Watches Promotion <br></b></h5></div>
					<div class="centered"><h5>Shop our casual watches at <br> 10% discount</h5> </div>
					<button class="btn"><a href="subpages/product_overview/casual_product_page.php">Shop Now</a></button>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="textinimage">
				<img src="images/homepage/promotion_images/designer_watch_hands.jpg" alt="Sports Watches Banner" title="Sports Watches Banner">
				<div class="topcentered"><h5><b> Sports Watches Promotion <br></b></h5></div>
					<div class="centered"><h5>Shop our sports watches at <br> 8% discount</h5> </div>
					<button class="btn"><a href="subpages/product_overview/sports_product_page.php">Shop Now</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of promotion images -->

<!--Start of Delivery Section-->
<div class="text-center deliverysection">
			<h4><b><u> Why buy from us?</u></b></h4>
      <section class="deliverysection">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 justify-content-center">
                    <div class="iconshopping">
                        <img src="images/homepage/shipping_icon/icon_1.png" alt="Free Local Delivery" title="Free Local Delivery">
                        <h4>Free Local Delivery</h4>
						<p>Swift 1-business day delivery by trusted delivery partner: Ninja Van</p>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-center">
                    <div class="iconshopping">
                        <img src="images/homepage/shipping_icon/icon_2.png" alt="Best Price Guaranteed" title="Best Price Guaranteed">
                        <h4>Best Price Guaranteed</h4>
                        <p>Competitive price point among other retailers</p>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-center">
                    <div class="iconshopping">
                        <img src="images/homepage/shipping_icon/icon_3.png" alt="30 Days Return Policy" title="30 Days Return Policy">
                        <h4>30 Days Return Policy</h4>
                        <p>Unhappy with our product? Return it within 30 days for full refund</p>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-center">
                    <div class="iconshopping">
                        <img src="images/homepage/shipping_icon/icon_1.png" alt="Delicated Hotline" title="Delicated Hotline">
                        <h4>Dedicated Hotline</h4>
                        <p>24/7 phone hotline available for enqueries</p>
                    </div>
                </div>
            </div>
		</div>
    </section>
</div>
<!--End of Delivery Section-->

<!--Start of footer-->
<?php include "footer_main.php" ?>
<!--End of footer-->


<!--JS Plug In-->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap-4.3.1.js"></script>

</body>
</html>

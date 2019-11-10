<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Kyle Wong Kaige -->
<?php
include '../Function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$watchData = getWatchdata(1);
$row = $watchData->fetch_assoc();
?>
<head>
  <meta name="Description" content="Watch.Me Casual Hugo Boss Jump Watch">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
  <title>Casual Hugo Jump Watch</title>

  <!-- Bootstrap -->
  <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<!-- Eventually only 1 product page will be used and all information will be drawn from a database -->

<body>

  <!-- Header-->
  <?php include "../../header.php"; ?>
  <!-- Header-->

<!--Start of Breadcrumb -->
<div class="container-fluid-remove-paddings">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
		  <li class="breadcrumb-item"><a href="../Product Overview/Casual Product Page.php">Casual Watches</a></li>
		<li class="breadcrumb-item active" aria-current="page">Casual Hugo Boss Jump Watch</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->
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
                            <img class="d-block mx-auto" src="../../images/Casual Watches/2/Casual 2 Hugo Jump Watch 1530028.jpg" alt="Hugo Boss 1530028 Jump Watch Face" title="Hugo Boss 1530028 Jump Watch Face">
                        </div>
                        <div class="carousel-item carousel-product">
                            <img class="d-block mx-auto" src="../../images/Casual Watches/2/Casual 2 Hugo Jump Watch 1530028 (2).jpg" alt="Hugo Boss 1530028 Jump Watch Strap" title="Hugo Boss 1530028 Jump Watch Strap">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
<!--End of Carousel-->
            </section>
        </div>
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
                    <!--
                        Hard coded information... Not the best way to display.
                        Will eventually set up database of information
                    -->
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

<!--footer-->
<?php include "../../footer.php" ?>
<!--footer-->


<!--JS Plug In-->
      <script src="../../js/jquery-3.3.1.min.js"></script>
      <script src="../../js/bootstrap-4.3.1.js"></script>

</body>
</html>

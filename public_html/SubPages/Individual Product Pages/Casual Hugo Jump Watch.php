<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Kyle Wong Kaige -->

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
  <?php include "../..header.php"; ?>
  <!-- Header-->

<!--Start of Breadcrumb -->
<div class="container-fluid-remove-paddings">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="../../Watchme_Landing_Page.html">Home</a></li>
		  <li class="breadcrumb-item"><a href="../Product Overview/Casual Product Page.html">Casual Watches</a></li>
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
                <h5>Hugo Jump Watch HG1530028</h5>
                <h6>HUGO</h6><br>
                <h5>S$307.85</h5><br><hr>
                <h6>20 in stock</h6><br><br>

                <button type="button" class="btn btn-primary addCartbtn">Add to Cart</button>
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
                            HUGO Boss Jump 1530028 is a functional and special Gents watch from JUMP collection. Material of the case is Black Ion-plated Steel and the Black dial gives the watch that unique look. 30 metres water resistancy will protect the watch and allows it to be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. The watch is shipped with an original box and a guarantee from the manufacturer.
                        </p>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>
                                <strong>Brand:</strong> HUGO Boss
                            </li>
                            <li>
                                <strong>Model Collection:</strong> J1530028
                            </li>
                            <li>
                                <strong>Model Name:</strong> JUMP
                            </li>
                            <li>
                                <strong>Movement Source:</strong> Japanese
                            </li>
                            <li>
                                <strong>Guarantee:</strong> 2 years
                            </li>
                            <li>
                                <strong>Packaging:</strong> HUGO Packaging
                            </li>
                            <li>
                                <strong>MPN:</strong> 1530028
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
                        <strong>Analogue/Digital:</strong> Analogue
                    </li>
                    <li>
                        <strong>Primary Material: </strong>Black Ion-plated Steel
                    </li>
                    <li>
                        <strong>Case Shape:</strong> Circle
                    </li>
                    <li>
                        <strong>Dial Color:</strong> Black
                    </li>
                    <li>
                        <strong>Strap Color:</strong> Black
                    </li>
                    <li>
                        <strong>Strap Type:</strong> Metal Bracelet
                    </li>
                    <li>
                        <strong>Water Resistance:</strong> 30 metres
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--End of contents -->

<!--footer-->
<?php include "../..footer.php" ?>
<!--footer-->


<!--JS Plug In-->
      <script src="../../js/jquery-3.3.1.min.js"></script>
      <script src="../../js/bootstrap-4.3.1.js"></script>

</body>
</html>

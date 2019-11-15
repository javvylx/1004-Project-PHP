<!DOCTYPE html>
<html lang="en">
<!-- Webpage done by Lim Zheng Hao, Javier -->

<head>
  <meta name="Description" content="Watch.Me Casual Product Page that sells Sports Watches like Casio watches">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon/favicon.png">
  <title>Sports Watches</title>

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
		<li class="breadcrumb-item active" aria-current="page">Sports Watches</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->
<div class="container">
    <h3 class="h3 titlepadding"><u>Sports Watches</u></h3> <!--Title - Sports Watches -->
    <div class="row">

<!--Casual Product 1-->
        <div class="col-md-3 col-sm-6">
            <div class="productoverview">
                <div class="producthoverimage">
                    <a href="../product_pages/sports casio dw 5900-1er.php">
                        <img class="pic-1" src="../../images/sports_watches/1/sports_1_dw-5900-1er.jpg" alt="Casio DW-5900-1ER Watch Face" title="Casio DW-5900-1ER Watch Face"> <!--Image 1-->
                        <img class="pic-2" src="../../images/sports_watches/1/sports_1_dw-5900-1er(2).jpg" alt="Casio DW-5900-1ER Watch Strap" title="Casio DW-5900-1ER Watch Strap"> <!--Image 1-->
                    </a>
                    <form action="../shopping_cart/process_addtocart.php" method="post">
                        <?php  
                        echo "<input type='hidden' name='p_id' value=3 />"
                        ?>
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="../product_pages/sports casio dw 5900-1er.php">Casio DW-5900-1ER</a></h3>
                    <span class="price">$134.40</span>
                </div>
            </div>
        </div>
        

<!--Casual Product 2-->
        <div class="col-md-3 col-sm-6">
            <div class="productoverview">
                <div class="producthoverimage">
                    <a href="../product_pages/sports casio swv-58u-1avef.php">
                        <img class="pic-1" src="../../images/sports_watches/3/sports_3_casio_swv-58u-1avef(2).jpg" alt="Casio SWV-58U-1AVEF Watch Face" title="Casio SGW-100-1VEF Watch Face"> <!--Image 3-->
                        <img class="pic-2" src="../../images/sports_watches/3/sports 3_casio_swv-58u-1avef.jpg" alt="Casio SWV-58U-1AVEF Watch Strap" title="Casio SGW-100-1VEF Watch Strap"> <!--Image 3-->
                    </a>
                    <form action="../shopping_cart/process_addtocart.php" method="post">
                        <?php  
                        echo "<input type='hidden' name='p_id' value=4 />"
                        ?>
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="../product_pages/sports casio swv-58u-1avef.php">Casio SWV-58U-1AVEF</a></h3>
                    <span class="price">$96.67</span>
                </div>
            </div>
        </div>
<!--End Product List-->

    </div>
</div>
<!--End of contents -->

<!--footer-->
<?php include "../../footer.php" ?>
<!--footter-->


<!--JS Plug In-->
      <script src="../../js/jquery-3.3.1.min.js"></script>
      <script src="../../js/bootstrap-4.3.1.js"></script>


</body>
</html>

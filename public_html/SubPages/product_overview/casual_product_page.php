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
<!-- Webpage done by Lim Zheng Hao, Javier -->

<head>
  <meta name="Description" content="Watch.Me Casual Product Page that sells Casual Watches like Pulsar, Hugo Boss watches">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon/favicon.png">
  <title>Casual Watches</title>

  <!-- Bootstrap -->
  <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<body>

	<!-- Header-->
	<?php include "../../header.php"	?>
	<!-- Header-->

<!--Start of Breadcrumb -->
<div class="container-fluid-remove-paddings">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Casual Watches</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->
<div class="container">
    <h3 class="h3 titlepadding"><u>Casual Watches</u></h3> <!--Title - Casual Watches -->
    <div class="row">
		
<!--Casual Product 1-->
        <div class="col-md-3 col-sm-6">
            <div class="productoverview">
              <div class="producthoverimage">
                  <a href="../product_pages/casual_hugojump_watch.php">
                      <img class="pic-1" src="../../images/casual_watches/2/casual_2_hugo_jump_watch_1530028.jpg" alt="Hugo Jump Watch 1530028 Watch Face" title="Hugo Jump Watch 1530028 Watch Face"> <!--Image 2-->
                      <img class="pic-2" src="../../images/casual_watches/2/casual_2_hugo_jump_watch_1530028(2).jpg" alt="Hugo Jump Watch 1530028 Watch Strap" title="Hugo Jump Watch 1530028 Watch Strap"><!--Image 2-->
                  </a>
                    <form action="../shopping_cart/process_addtocart.php" method="post">
                        <?php  
                        echo "<input type='hidden' name='p_id' value=1 />"
                        ?>
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="../product_pages/casual_hugojump_watch.php">Hugo Jump Watch HG1530028</a></h3>
                    <span class="price">S$294.85</span>
                </div>
            </div>
        </div>

<!--Casual Product 2-->
		<div class="col-md-3 col-sm-6">
			<div class="productoverview">
				<div class="producthoverimage">
					<a href="../product_pages/casual_hugo_onyx_hb1513367.php">
						<img class="pic-1" src="../../images/casual_watches/4/casual_4_hugo_hugo_onyx_hb1513367.jpg" alt="Hugo Boss ONYX HB1513367 Watch Face" title="Hugo Boss ONYX HB1513367"> <!--Image 4-->
						<img class="pic-2" src="../../images/casual_watches/4/casual_4_hugo_hugo_onyx_hb1513367(2).jpg" alt="Hugo Boss ONYX HB1513367 Watch Strap " title="Hugo Boss ONYX HB1513367 Watch Strap">
						<!--Image 4-->
					</a>
                    <form action="../shopping_cart/process_addtocart.php" method="post">
                        <?php  
                        echo "<input type='hidden' name='p_id' value=2 />"
                        ?>
                        <button type="submit" class="add-to-cart">Add to Cart</button>
                    </form>
				</div>
				<div class="product-content">
					<h3 class="title"><a href="../product_pages/casual_hugo_onyx_hb1513367.php">Hugo ONYX Watch HG1513367</a></h3>
					<span class="price">S$124.79</span>
				</div>
			</div>
		</div>

<!--Casual Product 2-->
        
<!--End Product List-->

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
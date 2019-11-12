<!DOCTYPE html>
<?php
include '../Function.php';
error_reporting(0);
define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$data = getCartData($_SESSION['memberid']);



$total  = 0.00;
$tax = 0.00;
$shipping = 10.00;

?>
<html lang="en">
<!-- Webpage by Lim Keat Hui, Justin -->

<head>
  <meta name="Description" content="Watch.Me Shopping Cart">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
  <title>Shopping Cart</title>

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
		<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
	  </ol>
	</nav>
</div>
<!--End of Breadcrumb -->

<!--Start of contents -->
  <!-- Start of Shopping cart table -->
  <div class="container">
    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
      <div class="table-responsive">
        <!-- Start of table-->
        <table class="table">

          <!--Start of table head -->
          <thead>
            <tr>
              <th scope="col" class="border-0 bg-light">
                <div class="p-2 px-3 text-uppercase">Product</div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Price</div>
              </th>
              <th scope="col" class="border-0 bg-light">
                <div class="py-2 text-uppercase">Remove</div>
              </th>
            </tr>
          </thead>
          <!-- End of table head -->

          <!-- Start of the table body -->
          <tbody>

            <!-- Start of the table row 1 -->
            <?php
                if ($data->num_rows>0) {
                    while ($row = mysqli_fetch_assoc($data)) {
                        $total += $row["product_price"];

                        echo "<tr>";
                        echo    "<td scope='row'>";
                        echo        "<div class='p-2'>";
                        echo            "<div class='ml-3 d-inline-block align-middle'>";
                        echo            "<h5 class='mb-0'>" . $row["product_name"] . "</h5><span class='text-muted font-weight-normal font-italic d-block'>Category: ". $row["watch_type"] ."</span>";
                        echo            "</div>";
                        echo        "</div>";
                        echo    "</td>";
                        echo  "<td class='align-middle'><strong>$" . $row["product_price"] . "</strong></td>";
                        echo    "<form action='process_remove.php' method='post'>";
                        echo        "<td class='align-middle'>"
                                        . "<input type='hidden' name='p_id' value=" . $row["cart_item_id"] . " />" . "<button type='submit' class='btn btn-danger' name='Remove'>Remove</button>";
                        echo        "</td>";
                        echo    "</form>";
                        echo "</tr>";
                    }
                } else {
                }
            ?>
            <!-- End of table row 1 -->

          </tbody>
          <!-- End of the table body -->

        </table>
        <!-- End of the table-->

      </div>
    </div>
  </div>
  <!-- End of shopping cart table  -->

<!-- Start of Coupon, Special Instructions, Order Summary-->
  <div class="row py-5 p-4 bg-white">

    <!-- Start of Coupon and Specia Instruction Column -->
    <div class="col-lg-6">
      <!--Coupon Start-->
      <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
      <div class="p-4">
        <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
        <?php if ($_SESSION['$success'] == 1): ?>
          <form action="" method="">
              <h4><strong>Coupon Applied</strong></h4>

                <div class="input-group-append border-0">
                </div>
            </form>
        <?php else: ?>
        <form action="check_coupon.php" method="post">

          <div class="input-group mb-4 border rounded-pill p-2">
            <input type="text" name ="coupon" placeholder="Check Coupon" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button type="submit" name="submit" value="Apply Coupon" class="btn btn-dark px-4 rounded-pill">Apply Coupon</button>
            </div>
          </div>
        </form>
            <?php endif; ?>

      </div>

      <!--Coupon End-->

      <!-- Special Instruction Start -->
      <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
      <div class="p-4">
        <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
        <textarea name="message" cols="30" rows="2" class="form-control" placeholder="Special Instructions"></textarea>
      </div>
    </div>
    <!-- End of Special Instruction -->

    <!--Start of Order Summary-->
    <div class="col-lg-6">
      <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
      <div class="p-4">
        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
        <ul class="list-unstyled mb-4">
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$<?php echo $total ?></strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
            <h5 class="font-weight-bold">$<?php echo $cost = $total+$shipping+$tax ?></h5>
            <?php $_SESSION['cost'] = $cost; ?>
          </li>
        </ul>
        <form action="process_checkout.php" method="post">
            <button type="submit" value ="submit" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to checkout</button>
        </form>

      </div>
    </div>
  <!--End of Order Summary-->

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

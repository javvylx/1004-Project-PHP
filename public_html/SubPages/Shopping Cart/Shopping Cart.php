<!DOCTYPE html>
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
                <div class="py-2 text-uppercase">Quantity</div>
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
            <tr>
              <td scope="row"  class=" border-0">
                <div class="p-2">
<!--                  <img>-->
                  <!--Insert Image1-->
                  <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0">[Name of Product]</h5><span class="text-muted font-weight-normal font-italic d-block">Category: [Category Name]</span>
                  </div>
                </div>
              </td>
              <td class="border-0 align-middle"><strong>$79.00</strong></td>
              <td class="border-0 align-middle">
                <select>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                </select>
              </td>
              <td class="align-middle border-0"><button type="button" class="btn btn-danger" name="Remove">Remove</button></td>
            </tr>
            <!-- End of table row 1 -->

            <!-- Start of table row 2 -->
            <tr>
              <td scope="row">
                <div class="p-2">
<!--                  <img>-->
                  <!--Insert Image2-->
                  <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0">[Name of Product]</h5><span class="text-muted font-weight-normal font-italic d-block">Category: [Category Name]</span>
                  </div>
                </div>
              </td>
              <td class="align-middle"><strong>$79.00</strong></td>
              <td class="align-middle">
                <select>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </td>
              <td class="align-middle"><button type="button" class="btn btn-danger" name="Remove">Remove</button>
              </td>
            </tr>
            <!-- End of table row 2 -->

            <!-- Start of table row 3 -->
            <tr>
              <td scope="row">
                <div class="p-2">
<!--                  <img>-->
                  <!--Insert Image3-->
                  <div class="ml-3 d-inline-block align-middle">
                    <h5 class="mb-0">[Name of Product]</h5><span class="text-muted font-weight-normal font-italic d-block">Category: [Category Name]</span>
                  </div>
                </div>
              </td>
              <td class="align-middle"><strong>$79.00</strong></td>
              <td class="align-middle">
                <select>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </td>
              <td class="align-middle"><button type="button" class="btn btn-danger" name="Remove">Remove</button>
              </td>
            </tr>
            <!-- End of table row 3 -->

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
        <form action="process_coupon.php" method="post">

          <div class="input-group mb-4 border rounded-pill p-2">
            <input type="text" name ="coupon" placeholder="Apply Coupon" aria-describedby="button-addon3" class="form-control border-0">

            <div class="input-group-append border-0">
              <button type="submit" name="submit" value="Apply Coupon" class="btn btn-dark px-4 rounded-pill">Apply Coupon</button>
            </div>
          </div>
        </form>
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
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
          <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
            <h5 class="font-weight-bold">$400.00</h5>
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

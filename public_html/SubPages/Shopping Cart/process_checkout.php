<?php
require '../Function.php';
error_reporting(0);
define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

$data = getCartData($_SESSION['memberid']); // return the query result

$cost = $_SESSION['cost'];

if ($_SESSION['coupon'] == 1)
{
  // get coupon multiplier values
  $sql = "SELECT * FROM p5_7.wm_coupon WHERE p5_7.wm_coupon.coupon_code = '" .$_SESSION["couponcode"]. "';";
  $result = $conn ->query($sql);
  $row = $result -> fetch_assoc();
  $discount = $row ["coupon_dis"];
  $multiplier = (100 - $discount)/ 100;
  $finaltotal = $cost * $multiplier;
}
else{
    $finaltotal = $cost;
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">

  <!-- Bootstrap -->
  <link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css" />
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<body>
  <!-- Header-->
  <?php include "../../header.php"; ?>
  <!-- Header-->

<!-- Codes to be implemented [Content] -->
<div class="container col-lg-6 py-5">
  <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
    <ul class="list-unstyled">
      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total </strong><strong>$<?php echo $cost ?></strong></li>
      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Discount Multiplier</strong><strong><?php echo  $discount."%" ?></strong></li>
      <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Final Total Cost</strong><strong><?php echo '$'.number_format((float)$finaltotal,2,'.','') ?></strong>
      </li>
    </ul>
    <a href="payment.php" class=" mx-auto btn btn-outline-primary row d-flex justify-content-center"> Payment Page</a>
  </div>


  <!--footer-->
  <?php include "../../footer.php" ?>
  <!--footter-->


  <!--JS Plug In-->
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/bootstrap-4.3.1.js"></script>

</body>

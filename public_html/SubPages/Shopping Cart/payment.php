<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Javier Lim Zheng Hao -->

<head>
<meta name="Description" content="Sign Up">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
<title>Billing Information</title>

<!-- Bootstrap -->
<link href="../../css/bootstrap-css.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--  Custom CSS -->
<link href="../../css/mainframe.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- Header-->
<?php include "../../header.php"; 
	if (!isset($_SESSION["loginflag"])) {
		header("Location: ../../index.php");
	}
  ?>
<!-- Header-->

<div class="row">
  <div class="containercolumn-center">
    <div class="container">
      <div class="containerbox">
          <form action="process_transaction.php" method="post" name="paymentform" onsubmit="return validateForm();">
          <div class="row">
            <div class="containercolumn-half">
              <h3>Billing Information</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" name="fullname" id="paymentinfo" placeholder="Full Name">
				
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" name="email" id="paymentinfo" placeholder="Email Address">
				
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="address" id="paymentinfo" placeholder="Address">
				
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="city" id="paymentinfo" minlength="0" maxlength="48" placeholder="City">
              <div class="row">
                <div class="containercolumn-half">
                  <label for="state">State</label>
                  <input type="text" name="state" id="paymentinfo" minlength="0" maxlength="20" placeholder="Country State">
                </div>
                <div class="containercolumn-half">
                  <label for="zip">Postal Code</label>
                  <input type="text" name="postalcode" id="paymentinfo" minlength="0" maxlength="6" placeholder="6 digit number">
                </div>
              </div>
            </div>
            <div class="containercolumn-half">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container"> 
				  <i class="fa fa-cc-visa" style="color:navy;"></i> 
				  <i class="fa fa-cc-amex" style="color:blue;"></i> 
				  <i class="fa fa-cc-mastercard" style="color:red;"></i> 
				  <i class="fa fa-cc-paypal" style="color:deepskyblue;"></i> 
				  <i class="fa fa-cc-stripe" style="color:purple;"></i> 
				  <i class='fa fa-google-wallet' style="color:green;"></i> 
			  </div>
              <label for="cname">Name on Card</label>
              <input type="text" name="cname" id="paymentinfo" minlength="0" maxlength="45" placeholder="Name on Card">
              <label for="ccnum">Credit Card Number</label>
              <input type="text" name="ccnum" id="paymentinfo" minlength="0" maxlength="16" placeholder="16 digit number">
              <label for="expmonth">Expiry Month</label>
              <input type="text" name="expmonth" id="paymentinfo" minlength="0" maxlength="9" placeholder="Month needs to be typed out in full. Eg: September">	
              <div class="row">
                <div class="containercolumn-half">
                  <label for="expyear">Expiry Year</label>
                  <input type="text" name="expyear"  minlength="0" maxlength="4" id="paymentinfo" placeholder="Eg: 2019">
                </div>
                <div class="containercolumn-half">
                  <label for="cvv">CVV/CVC</label>
                  <input type="text" name="cvvcvc" minlength="0" maxlength="3" placeholder="3 digit code" id="paymentinfo">
                </div>
              </div>
            </div>
          </div>
          <label>
            <input type="checkbox" required name="sameadr">
            Acknowledge that shipping address is the same as billing address! </label>
          <input type="submit" class="btnbillinginfo" id="paymentinfo">
        </form>
      </div>
    </div>
  </div>
</div>

<!--footer-->
<?php include "../../footer.php" ?>
<!--footer--> 
	
<!--JS Plug In--> 

<script src="../../js/jquery-3.3.1.min.js"></script> 
<script src="../../js/bootstrap-4.3.1.js"></script> 
<script src="../../js/Shopping Cart/payment.js"></script>
	
</body>
</html>

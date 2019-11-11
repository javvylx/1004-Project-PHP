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
<?php include "../../header.php"; ?>
<!-- Header-->

<div class="row">
  <div class="containercolumn-center">
    <div class="container">
      <div class="containerbox">
        <form action="#" name="paymentform">
          <div class="row">
            <div class="containercolumn-half">
              <h3>Billing Information</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" name="fullname" id="paymentinfo" maxlength="85" pattern="^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$" title="Please enter your FULL name." required>
				
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" name="email" id="paymentinfo" required>
				
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="address" id="paymentinfo" required>
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="city" id="paymentinfo" required>
              <div class="row">
                <div class="containercolumn-half">
                  <label for="state">State</label>
                  <input type="text"  name="state" id="paymentinfo" required>
                </div>
                <div class="containercolumn-half">
                  <label for="zip">Postal Code</label>
                  <input type="text" name="postalcode" id="paymentinfo" required>
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
              <input type="text" name="cname" id="paymentinfo" required>
              <label for="ccnum">Credit Card Number</label>
              <input type="text" name="ccnum" id="paymentinfo" required>
              <label for="expmonth">Expiry Month</label>
              <input type="text" name="expmonth" id="paymentinfo" required>
              <div class="row">
                <div class="containercolumn-half">
                  <label for="expyear">Expiry Year</label>
                  <input type="text" name="expyear" id="paymentinfo" required>
                </div>
                <div class="containercolumn-half">
                  <label for="cvv">CVV/CVC</label>
                  <input type="text" name="cvvcvc" id="paymentinfo">
                </div>
              </div>
            </div>
          </div>
          <label>
            <input type="checkbox" required name="sameadr">
            Shipping Address same as billing </label>
          <input type="submit" value="Checkout" class="btnbillinginfo" id="paymentinfo">
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

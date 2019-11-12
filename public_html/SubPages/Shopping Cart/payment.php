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
        <form action="#" name="paymentform" onsubmit="return validateemail();">
          <div class="row">
            <div class="containercolumn-half">
              <h3>Billing Information</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" name="fullname" id="paymentinfo" oninput="OnlyLetters(this)" placeholder="Full Name" required>
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" name="email" id="paymentinfo" placeholder="Email Address" required>
				
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" name="address" id="paymentinfo" oninput="OnlyNumbersLetters(this)" placeholder="Address"required>
				
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" name="city" id="paymentinfo" minlength="0" maxlength="48" placeholder="City" oninput="OnlyLetters(this) " required>
              <div class="row">
                <div class="containercolumn-half">
                  <label for="state">State</label>
                  <input type="text" name="state" id="paymentinfo" minlength="0" maxlength="20" placeholder="Country State" oninput="OnlyLetters(this) " required>
                </div>
                <div class="containercolumn-half">
                  <label for="zip">Postal Code</label>
                  <input type="text" name="postalcode" id="paymentinfo" minlength="0" maxlength="6" placeholder="6 digit number" oninput="OnlyNumbers(this)" required>
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
              <input type="text" name="cname" id="paymentinfo" minlength="0" maxlength="45" placeholder="Name on Card" oninput="OnlyLetters(this)" required>
              <label for="ccnum">Credit Card Number</label>
              <input type="text" name="ccnum" id="paymentinfo" minlength="0" maxlength="16" placeholder="16 digit number" oninput="OnlyNumbers(this)" required>
              <label for="expmonth">Expiry Month</label>
              <input type="text" name="expmonth" id="paymentinfo" minlength="0" maxlength="9" placeholder="Month needs to be typed out in full. Eg: September" oninput="OnlyLetters(this)" required>	
              <div class="row">
                <div class="containercolumn-half">
                  <label for="expyear">Expiry Year</label>
                  <input type="text" name="expyear"  minlength="0" maxlength="4" id="paymentinfo" placeholder="Eg: 2019" oninput="OnlyNumbers(this)" required>
                </div>
                <div class="containercolumn-half">
                  <label for="cvv">CVV/CVC</label>
                  <input type="text" name="cvvcvc" minlength="0" maxlength="3" placeholder="3 digit code" title="Invalid CVC/CCC! Please only enter a 3 digit number." oninput="OnlyNumbers(this)" id="paymentinfo">
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

<script>
	
function OnlyLetters(inputtxt)
  {
   var regexletters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, \b])*$/;
   if(inputtxt.value.match(regexletters))
     {
      return true;
     }
   else
     {
     alert("Invalid Input! Only letters are allowed. Please do not enter illegal characters & numbers!");
     return false;
     }
  }
	
function OnlyNumbers(inputtxt)
  {
   var regexnumbers = /^[0-9]*$/;
   if(inputtxt.value.match(regexnumbers))
     {
      return true;
     }
   else
     {
     alert("Invalid Input! Only numbers are allowed. Please do not enter illegal characters & letters!");
     return false;
     }
  }
	
function OnlyNumbersLetters(inputtxt)
  {
   var regexletternum = /^([a-zA-Z0-9 ]+)$/;
   if(inputtxt.value.match(regexletternum))
     {
      return true;
     }
   else
     {
     alert("Invalid Input! Only numbers & letters are allowed. Please do not enter illegal characters!");
     return false;
     }
  }
	
function validateemail()
	{
		var email = document.forms["paymentform"]["email"].value;
		var emailValidator = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		if (!email.match(emailValidator))
		{
			alert("Please Enter a Valid Email Address!");
			return false;
		}
	}
	</script>

</script>	
	
<!--JS Plug In--> 

<script src="../../js/jquery-3.3.1.min.js"></script> 
<script src="../../js/bootstrap-4.3.1.js"></script> 
<script src="../../js/Shopping Cart/payment.js"></script>
	
</body>
</html>

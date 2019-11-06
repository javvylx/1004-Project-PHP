<?php

if (isset($_POST['submit']))
{
  include "../Function.php";
  $coupon = sanitize($_POST["coupon"]);
  if (check_empty($coupon))
  {
    // if the coupon is Empty
    $errorMsg .= "Sorry, you forgot to enter the coupon code";
  }
  else {
    // if it is not empty
      //check the coupon against the database
      // if it there, apply the Coupon
      //else invalid coupon
  }


}




?>

<?php if (isset($_POST['submit'])):  ?>
  <?php if ($success): ?>
        <script>
        alert(" Coupon Applied Successfully.");
        window.location.href = "Shopping Cart.php";
        </script>

      <?php else: ?>
        <script>
        let error = '<?php echo $errorMsg; ?>';
        alert ("The following error occured: " + error);
        window.location.href = "Shopping Cart.php";
        </script>
  <?php endif; ?>
<?php endif; ?>

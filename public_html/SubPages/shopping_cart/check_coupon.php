<?php
define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

if (isset($_POST['submit'])) {
    include "../function.php";
    $coupon = sanitize($_POST["coupon"]);
    if (check_empty($coupon)) {
        // if the coupon is Empty
        $errorMsg .= "Sorry, you forgot to enter the coupon code";
    } else {
        // Create Conn
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
        // Check Conn
        if ($conn->connect_error) {
            $errorMsg = "Connection failed: " . $conn->connect_error;
            $success = false;
        }
        else
        {
            $sql = "SELECT * FROM wm_coupon WHERE coupon_code ='" .$coupon. "';" ;
            $result = $conn->query($sql);
            if ($result->num_rows>0)
            {
                $success = true;
                $_SESSION ["coupon"] = true;
                $_SESSION ["couponcode"] = $coupon;
                $_SESSION['$success'] =1;
            }
            else
            {
              $success = false;
              $errorMsg .= "Invalid Code";
              $_SESSION ["coupon"] = false;
            }
        }
    }
}



?>

<?php if (isset($_POST['submit'])):  ?>
  <?php if ($success): ?>
        <script>
        let code = '<?php echo $coupon; ?>' ;
        alert("Coupon Code: " + code +  " is valid");
        window.location.href = "shopping_cart.php";
        </script>

      <?php else: ?>
        <script>
        let error = '<?php echo $errorMsg; ?>';
        alert ("The following error occured: " + error);
        window.location.href = "shopping_cart.php";
        </script>
  <?php endif; ?>
<?php endif; ?>

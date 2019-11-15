<?php
include '../function.php';
if (!isset($_SESSION["loginflag"])) {
    header("Location: ../membership_portal/login_page.php");
}
define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

$p_id = $_POST['p_id'];
$u_id = $_SESSION["memberid"];

// Create Conn
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
// Check Conn
if ($conn->connect_error) {
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
} else {
    $sql = "INSERT INTO wm_shoppingcart(user_id, product_id)VALUES(" . $u_id . ",". $p_id .");";
    $sql .= "UPDATE wm_products SET quantity = (quantity - 1) WHERE product_id=" . $p_id .";";

    if (mysqli_multi_query($conn, $sql) === true) {
        echo "<meta http-equiv='refresh' content='0;URL=shopping_cart.php' />";
    }
}

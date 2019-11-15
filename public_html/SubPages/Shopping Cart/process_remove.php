<?php

include '../Function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

if (!isset($_SESSION["loginflag"])) {
		header("Location: ../../index.php");
}

$p_id = $_POST['p_id'];
$u_id = $_SESSION["memberid"];

// Create Conn
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
// Check Conn
if ($conn->connect_error) {
    $errorMsg = "Connection failed: " . $conn->connect_error;
    $success = false;
} else {
    $sql = "DELETE FROM p5_7.wm_shoppingcart WHERE user_id=". $u_id ." AND cart_item_id=" . $p_id . ";";

    if ($conn->query($sql) === true) {
        echo "<meta http-equiv='refresh' content='0;URL=Shopping Cart.php' />";
    }
}

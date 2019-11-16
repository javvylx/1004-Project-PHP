<?php
include '../function.php';

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");

if (!isset($_SESSION["loginflag"])) {
		header("Location: ../../index.php");
}

$u_id = $_SESSION["memberid"];
$data = getCartData($_SESSION['memberid']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon/favicon.png">

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
  
  <main>
        <?php
            // Create Conn
            $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
            // Check Conn
            if ($conn->connect_error) {
                $transaction_msg = "Connection failed: " . $conn->connect_error;
            } else {
                if($data->num_rows>0){
                    $sql = "";
                    while ($row = mysqli_fetch_assoc($data)){
                        $sql .= "UPDATE wm_products SET quantity = (quantity - 1) WHERE product_id=".$row["product_id"]."; ";
                    }
                    $sql .= "DELETE FROM p5_7.wm_shoppingcart WHERE user_id=". $u_id . ";";
                    $redirect_msg = "Redirecting back to home page...";
                    if (mysqli_multi_query($conn, $sql) === true) {
                        $transaction_msg = "Transaction Complete!";
                    }
                    else{
                        $transaction_msg = "Unable to perform transaction.";
                    }
                }
            }
            echo "<meta http-equiv='refresh' content='3;URL=../../index.php' />";
        ?>
      <div class="container">
            <div class="jumbotron" id="jumboTron">
                <h2>
                    <?php echo $transaction_msg ?>
                </h2>

                <h3>
                    <?php echo $redirect_msg ?>
                </h3>
            </div>
        </div>
  </main>

  <!--footer-->
  <?php include "../../footer.php" ?>
  <!--footer-->


  <!--JS Plug In-->
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/bootstrap-4.3.1.js"></script>

</body>
</html>


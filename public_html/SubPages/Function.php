<?php
session_start();
//Global variables
$errorMsg = "";
$success = true;
$loginflag=0;

# Check_empty Function
function check_empty($data)
{
  global $errorMsg, $success;
  if (empty($data)) // if it is empty
    {
     $success *= false;
     return true;
    }
  else // if it is not empty
  {
    $success *= true;
    return false;
  }
}

# Sanitize Function to prevent XSS attack
function sanitize($data)
{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
 return $data;
}

function getCartData($id){
    $user_id = $id;

    // Create Conn
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check Conn
    if($conn->connect_error){
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    }
    else{
        $sql = "SELECT * FROM p5_7.wm_shoppingcart
                    INNER JOIN p5_7.wm_products on p5_7.wm_shoppingcart.product_id=p5_7.wm_products.product_id
                WHERE p5_7.wm_shoppingcart.user_id=" . $user_id . ";";
        // Execute query
        $result = $conn->query($sql);
        return $result;
        if($result->num_rows>0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["product_id"] . " - " . $row["product_name"] . " - " . $row["product_price"] . " - " . $row["quantity"] . "<br>";
            }
        }
        else{
            $errorMsg = "No data found.";
            $success = false;

            echo "<h4>Oops!</h4>";
            echo "<h2>The following input errors were detected:</h2>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<a href='login.php'><button type='button' class='btn btn-default'>Return to Login</button></a>";
        }

        $result->free_result();
    }
    $conn->close();
}

function getWatchdata($id){
    $p_id = $id;

    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check Conn
    if($conn->connect_error){
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    }
    else{
        $sql = "SELECT * FROM wm_products WHERE product_id=". $p_id .";";
        $result = $conn->query($sql);
        return $result;
    }
}
 ?>

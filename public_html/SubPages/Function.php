<?php
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

function dbconn()
{
	$servername = "161.117.122.252";
	$dbusername = "p5_7";
	$dbpassword = "Q2Zp6mlCeq";
	$dbname = "p5_7";

	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

	if (!$conn){
		die("Connection Failed: " .mysqli_connect_error());
	}
	echo "Connected successfully";

}

# Sanitize Function to prevent XSS attack
function sanitize($data)
{
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
 return $data;
}


function loginToDB(){
    global $email, $pwd;
    // Create Conn
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    // Check Conn
    if($conn->connect_error){
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    }
    else{
        $sql = "SELECT * FROM wm_users WHERE ";
        $sql .= "email='$email' AND password='$pwd'";
        // Execute query
        $result = $conn->query($sql);
        if($result->num_rows>0){
            $succcess = true;
        }
        else{
            $errorMsg = "Email not found or password doesn't match...";
            $success = false;

//            echo "<h4>Oops!</h4>";
//            echo "<h2>The following input errors were detected:</h2>";
//            echo "<p>" . $errorMsg . "</p>";
//            echo "<a href='login.php'><button type='button' class='btn btn-default'>Return to Login</button></a>";
        }
        $result->free_result();
    }
    $conn->close();
}

function saveMemberToDB(){
    global $firstname, $lastname, $email, $confirm_password, $errorMsg, $success;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    // Check connection
    if ($conn->connect_error){
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    }
    else{
        $sql = "INSERT INTO wm_users (fname, lname, email, password)";
        $sql .= " VALUES ('$firstname', '$lastname', '$email', '$confirm_password')";

        // Execute Query
        if (!$conn->query($sql)){
            $errorMsg = "Database error: " . $conn->errno;
            if($conn->errno ==1062){
                $errorMsg .= "<br>This email is already in use. "
                        . "Please use a different email or <a href='login.php'>login</a>.";
            }
            $success = false;
        }
    }
    $conn->close();
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

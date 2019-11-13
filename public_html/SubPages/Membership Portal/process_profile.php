<?php

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_7");
define("DBUSER", "p5_7");
define("DBPASS", "Q2Zp6mlCeq");
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
//if (isset($_POST['update_profile'])) {

require '../Function.php';

$data = getUserData($_SESSION['memberid']);
if ($data->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
        $databasepwd = $row["password"];
    }
}
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['npwd'];
$cfmpassword = $_POST['cpwd'];
$oldpassword = $_POST['pwd'];
$errorMsg = "";
$success = true;

$hash_old_pwd = password_hash($oldpassword, PASSWORD_DEFAULT);

if (check_empty($oldpassword) || check_empty($password) || check_empty($cfmpassword)) {


    $errorMsg .= "Password is required.";


    $success = false;
} else if ($hash_old_pwd == $databasepwd) {
    $errorMsg .= "Password matches current password.";
    $success = false;
} else if ($oldpassword == $password) {
    $errorMsg .= "Password does match. Do not use the same password";
    $success = false;

} else if ($password == $cfmpassword) {

    $password = sanitize($_POST["npwd"]);
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    $success = true;
}


if (success) {
    //check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection Failed: " . $conn->connect_error;
        $success = false;
    } else {
        $sql = "UPDATE wm_users  SET password=" . $hashedpwd . " WHERE userid=" . $_SESSION['memberid'];
        //Execute the query
        if (!$conn->query($sql)) {
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
        } else {
            $conn->commit();
        }
        mysqli_close($conn);
        $successMsg = "Password Updated Successfully";
        header("Location:Profile.php?success=" . $successMsg);
    }
} else {
    header("Location:Profile.php?error=" . $errorMsg);
}

//    } 
?>
<?php
# Global variables
$fname = $lname =  $email = $message = $subject= "";
$errorMsg = "";
$success = true;


// Calls the function file
include "../Function.php";

// Hold all the sanitize 0inputs
$fname = sanitize($_POST["fname"]);
$lname = sanitize($_POST["lname"]);
$email = sanitize($_POST["email"]);
$message = sanitize($_POST["message"]);
$subject = sanitize($_POST["subject"]);
$fname = filter_var ($fname,FILTER_SANITIZE_STRING);
$lname = filter_var ($lname,FILTER_SANITIZE_STRING);
$email = filter_var ($email,FILTER_SANITIZE_EMAIL);
$message = filter_var ($message,FILTER_SANITIZE_STRING);
$subject = filter_var ($subject,FILTER_SANITIZE_STRING);

if (check_empty($fname))
{
    $errorMsg .= "First Name Required \n";
}



if (check_empty($email))
{
    $errorMsg .= "Email Required \n";
}
else {
  if (filter_var($email,FILTER_VALIDATE_EMAIL))
  {
    $success *= true;
  }
  else {
    $success *= false;
    $errorMsg .= "Invalid email format. \n";
  }
}

if (check_empty($subject))
{
    $errorMsg .= "Subject Required \n";
}


if (check_empty($message))
{
    $errorMsg .= "Message Required \n";
}

if (check_empty($subject))
{
    $errorMsg .= "Subject Required \n";
}

// if ($success) // if everything is okay
// {
//   //Send to email after all the sanitization
//   // $company_email = " ";//company email [doesn't require sanitization]
//   // $headers = "From: ".$email;
//   // mail($company_email,$subject,$message,$headers);
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">

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

  <?php if ($success): ?>
    <script>
    alert(" Message has been successfully send.");
    window.location.href = "Contact Us.php";
    </script>



  <?php else: ?>
    <div class="my-3">
      <h2>Oops!</h2>
      <?php echo "<h5>The following input errors were detected:</h5>";  ?>
      <?php echo "<p>" . $errorMsg . "</p>";  ?>
    </div>
    <script>
    document.onclick = function (){
    window.location.href = "Contact Us.php";
    }
    </script>
  <?php endif; ?>

  <!--footer-->
  <div class="fixed-bottom">
      <?php include "../../footer.php" ?>

  </div>

  <!--footer-->


  <!--JS Plug In-->
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/bootstrap-4.3.1.js"></script>

</body>

</html>

<?php
error_reporting(0);
# Global variables
$fname = $lname =  $email = $message = $subject= "";
$errorMsg = "";
$success = true;

// Calls the function file
include "../function.php";

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

if (check_empty($fname) || check_empty($email) || check_empty($subject) || check_empty($message)) {
    header("Location: Contact Us.php?error=emptyfields");
    exit();
} elseif ((preg_match("/^[a-zA-Z]*$/", $fname) == false)) { // only characters are allowed
    header("Location: Contact Us.php?error=invalidfirstname");
    exit();
} elseif (preg_match("/<script>|<\/script>/", ($_POST["lname"]))) {
    header("Location: Contact Us.php?error=invalidlastname");
    exit();
} elseif (preg_match("/<script>|<\/script>/", ($_POST["subject"]))) { // if it contains <script>
    header("Location: Contact Us.php?error=invalidsubject");
    exit();
} elseif ((filter_var($email, FILTER_VALIDATE_EMAIL) == false)) { // if filter fail
    header("Location: Contact Us.php?error=invalidemail");
    exit();
} elseif (preg_match('/<script>|<\/script>/',($_POST["message"]))) { //if it contains <script>
    header("Location: Contact Us.php?error=invalidmessage");
    exit();
}
else{
  // Send to email after all the sanitization
  $company_email = "limkhj197@gmai.com";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: ".$email;

  $message = wordwrap($message,70); //n wordwrap if more than 70 char long
  $message = str_replace("\n.", "\n..", $message); // replace "." with ".."

  $body = '<h4>Message</h4><p>'. $message.'</p>';

  if (mail($company_email,$subject,$body,$headers))
  {
        $success *= true;
  }

  else {
    $success *= false;
  }
}
?>

<?php if ($success): ?>
  <script>
  alert("Good News! Message has been successfully send.");
    window.location.href = "Contact Us.php";
    </script>
<?php else:  ?>
  <script>
  alert("Error: Message was not sent successfully.");
  window.location.href = "Contact Us.php";
  </script>
<?php endif; ?>

<?php
//Global variables

$errorMsg = "";
$success = true;

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

 ?>

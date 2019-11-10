<?php

if (isset($_POST['login-submit'])){
	require 'dbconn.php';
	include '../Function.php';
	
	$success = true;
	$email = sanitize($_POST["email"]);
	$password = sanitize($_POST["pwd"]);
	
	if (check_empty($email) || check_empty($password)){
		header("Location: Login Page.php?error=emptyfields&email=".$email);
		exit();
	}
	else{
		$sql = "SELECT * FROM wm_users WHERE email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: Login Page.php?error=sqlerror");
			exit();
		}
		
		else{
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($password,$row['password']);
				if($pwdCheck == false){
					header("Location: Login Page.php?error=wrongpwd&password");
					exit();
				}
				else if($pwdCheck == true){
					session_start();
					$_SESSION['memberid'] = $row['member_id'];
					$_SESSION['email'] = $row['email'];
					$_SESSION["loginflag"] =1;
					$success = true;
					header("Location: Login Page.php?login=success");
					exit();
				}
			}
				
			else {
				header("Location: Login Page.php?error=wrongcred");
				exit();
				}
			}	
		} 
		mysqli_stmt_close($stmt);
  		mysqli_close($conn);
	}
else {
	header("Location: Login Page.php");
	exit();
}

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

        <!-- Codes to be implemented [Content] -->
        <div class="container py-5">
          <?php if ($success):  ?>
            <h2>Login successful!</h2><br>
            <h3> Welcome back! </h3><br>
            <a href='../../index.php'><button type='button' class='btn btn-outline-secondary'>Return to Home</button></a>
          <?php else:  ?>
            <h2>Login was unsuccessful!</h2><br>
            <p> Please try again!</p><br>
            <a href='Login Page.php'><button type='button' class='btn btn-outline-secondary'>Return to Login</button></a>
          <?php endif; ?>

        </div>
        <!--footer-->
        <?php include "../../footer.php" ?>
        <!--footer-->


        <!--JS Plug In-->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap-4.3.1.js"></script>

    </body>

</html>

<?php
// This checks whether the user got to this page by clicking the proper signup button.
if (isset($_POST['signup-submit'])) {
	
	// function php files that are required to make process_register.php functioning
    require '../function.php';
    require 'dbconn.php';
	
	// Data are being grabbed using $_POST from register.php
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $cfmpassword = $_POST['cpwd'];
	
	// Checking for user inputs to make sure that they are not empty.
    if (check_empty($firstname) || check_empty($lastname) || check_empty($email) || check_empty($password) || check_empty($cfmpassword)) {
        header("Location: register.php?error=emptyfields&fname=".$firstname."&lname=".$lastname."&email=".$email);
        exit();
		
	// Validation for first name to make sure user does not enter illegal characters.
    } elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
        header("Location: register.php?error=invalidfirstname&lname=".$lastname."$&email=".$email);
        $firstname = sanitize($_POST["firstname"]);
        exit();
		
	// Validation for last name to make sure user does not enter illegal characters
    } elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        header("Location: register.php?error=invalidlastname&fname=".$firstname."$&email=".$email);
        $lastname = sanitize($_POST["lastname"]);
        exit();
		
	//(?=.{8,}) #Ensure that string is of at least length 8 | (?=.*[A-Z]) #Match a single capital letter anywhere in string | (?=.*[a-z]) #Match a single small letter anywhere in string | (?=.*\d) #Match a single digit anywhere in string
		
	
	// Validation to make sure that user were to enter a validate password which is 8 character long, at least upper case and lower case.
	} elseif (!preg_match("/(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/", $password)) {
		header("Location: register.php?error=pwdrequirementsfalse&fname=".$firstname."&lname=".$lastname."$&email=".$email);
		$password = sanitize($_POST["password"]);
		exit();
	
	// Validation to make sure that user were to submit a proper email format
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=invalidemail&fname".$firstname."&lname=".$lastname);
        $email = sanitize($_POST["email"]);
        exit();
	// Validation to make sure password is the same as confirm password 
    } elseif ($password !== $cfmpassword) {
        header("Location: register.php?error=passwordcheck&fname=".$firstname."&lname=".$lastname."$&email=".$email);
        $password = sanitize($_POST["password"]);
        exit();
    } else {
        $sql = "SELECT email FROM wm_users WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: register.php?error=emailtaken&email=".$email);
                exit();
            } else {
				
				// This is a placeholder -> ? by sending the users data.
                $sql = "INSERT INTO wm_users (fname, lname, email, password) VALUES (?, ?, ?, ?);";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: register.php?error=sqlinserror");
                    exit();
                } else {
					// Hashing using Bcrypt which has one of the strongest encryption method 
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
					
					// Bind the type of parameters we expect to pass into the statement, and bind the data from the user.
                    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
					
					
                    header("Location: register.php?signup=success");

                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: register.php");
    exit();
}

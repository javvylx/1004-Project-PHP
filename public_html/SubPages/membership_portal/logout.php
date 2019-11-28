<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	<title>Logout Page</title>
    <!-- Webpage by Amitpaul Singh Sandhu -->
    
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
        <?php include "../../header.php";
		?>
		
        <!-- Header-->

        <!-- Codes to be implemented [Content] -->
		<p><p>
        <div class="container">
            <div class="jumbotron" id="jumboTron">
                <h2>
                    Congratulations!
                </h2>

                <h3>
                    You have successfully logged out.
                </h3>
			</div>
            <div class="row py-3">
            <div class="px-3">
                <a href="../../index.php"><button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Return Home</button> </a>
            </div>
            <div class="px-3">
                <a href="login_page.php"><button type='button' class='btn btn-outline-secondary btn-lg btn-block'>Return to Login</button> </a>
            </div>
            </div>


        </div>
        <!--footer-->
        <?php include "../../footer.php" ?>
        <!--footer-->


        <!--JS Plug In-->
        <script src="../../js/jquery-3.3.1.min.js"></script>
        <script src="../../js/bootstrap-4.3.1.js"></script>

    </body>

</html>

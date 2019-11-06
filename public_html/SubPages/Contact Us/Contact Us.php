<!DOCTYPE html>
<html lang="en">
<!-- Webpage by Lim Keat Hui, Justin -->

<head>
  <meta name="Description" content="Watch.Me Contact Us">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Favicon/favicon.png">
  <title>Contact Us</title>

  <!-- Bootstrap -->
  <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--  Custom CSS -->
  <link href="../../css/mainframe.css" rel="stylesheet" type="text/css">

</head>

<body>

  <!-- Header-->
  <?php include "../../header.php"; ?>
  <!-- Header-->

  <!--Start of Breadcrumb -->
  <div class="container-fluid-remove-paddings">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../Watchme_Landing_Page.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
  <!--End of Breadcrumb -->


  <!--Start of contents -->
  <div class="container-fluid padding">
    <h1 class="text-center padding1">Let's Start a Conversation</h1>

    <div class="center text-center">
      <h3>Get in Touch with our Expert</h3>
      <p>Please fill out the quick form and we will be in touch with you at lightning speed.</p>
    </div>

    <form action="process_contactus.php" method="post">
      <div>
        <input type="text" name="fname" class="form-control1 center" placeholder="Enter First Name" required pattern='(?=.*[a-z])(?=.*[A-Z]).{3,}'>
      </div>
      <br>
      <div>
        <input type="text" name="lname" class="form-control1 center" placeholder="Enter Last Name">
      </div>
      <br>
      <div>
        <input type="email" name="email" class="form-control1 center" placeholder="Enter Email" required>
      </div>
      <br>
      <div>
        <input type="text" name="subject" class="form-control1 center" placeholder="Enter Subject" required pattern='(?=.*[a-z])(?=.*[A-Z]).{1,}'>
      </div>
      <br>
      <div>
        <textarea name="message" class="form-control2 center" rows="5" placeholder="Message" required '(?=.*[a-z])(?=.*[A-Z]).{5,}'></textarea>
      </div>

      <input type="Submit" value="Submit" class="btn btn-danger padding2 center">

    </form>
  </div>
  <!--End of contents -->

  <!--footer-->
  <?php include "../../footer.php" ?>
  <!--footter-->

  <!--JS Plug In-->
  <script src="../../js/jquery-3.3.1.min.js"></script>
  <script src="../../js/bootstrap-4.3.1.js"></script>

</body>

</html>

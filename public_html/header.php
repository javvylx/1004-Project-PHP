<?php
error_reporting(0);
session_start();
if ($_SESSION["loginflag"] == 1):
    ?>

    <header class="container-fluid-remove-paddings">
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php"><img src="../../images/homepage/navbar_icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a href="../membership_portal/profile.php" class="nav-link m-2 menu-item">Profile</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

                            <div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../product_overview/casual_product_page.php">Casual Watches</a>
                                <a class="dropdown-item" href="../product_overview/sports_product_page.php">Sports Watches</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="../shopping_cart/shopping_cart.php" class="nav-link m-2 menu-item">Shopping Cart</a>
                        </li>

                        <li class="nav-item">
                            <a href="../contact_us/contactus.php" class="nav-link m-2 menu-item">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="../membership_portal/process_logout.php" class="nav-link m-2 menu-item">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php else: ?>

    <!--Start of Navigation Bar-->
    <header class="container-fluid-remove-paddings">
        <nav class="navbar navbar-expand-lg navbar-light navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php"><img src="../../images/homepage/navbar_icon.png" alt="Navbar Icon" title="Navbar Icon" width="150" height="80"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>

                            <div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../product_overview/casual_product_page.php">Casual Watches</a>
                                <a class="dropdown-item" href="../product_overview/sports_product_page.php">Sports Watches</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="../about_us/about_us.php" class="nav-link m-2 menu-item">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="../contact_us/contactus.php" class="nav-link m-2 menu-item">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a href="../membership_portal/login_page.php" class="nav-link m-2 menu-item">Login Portal</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--End of Navigation Bar-->

<?php endif; ?>

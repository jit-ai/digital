<!DOCTYPE html>
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<head>
    <!-- Page Title
    ======================================== -->
    <title>Digital Agencies</title>

    <!-- links for favicon
    ======================================== -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Icon fonts
    ======================================== -->
    <link rel="stylesheet" type="text/css" href="css/miniline.css">

    <!-- css links
    ======================================== -->
    <!-- Bootstrap link -->
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">

    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/vendor/slick.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/slick-theme.css">

    <!-- Magnific popup -->
    <link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">

    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Responsive styling -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body class="test-class">

    <!-- navbar starts
    ======================================= -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" style="color:#000"; <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?> href="index">
                <img src="images/brand-logo.png" alt="Brand Logo" class="img-fluid" style="height:60px ;"><span class="text-logo">Leading <br>Digital<br> Performance</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="custom-toggler-icon bar1"></span>
                <span class="custom-toggler-icon bar2"></span>
                <span class="custom-toggler-icon bar3"></span>
            </button>
            <!-- End of .navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-md-auto typo-color-c align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($currentPage == 'about-us.php') ? 'active' : ''; ?>" href="about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-btn btn-mid grad-style-cd <?php echo ($currentPage == 'contact.php') ? '' : ''; ?>" href="contact">Contact Us</a>
                    </li>
                </ul>

                <!-- End of .navbar-nav -->
            </div>
            <!-- End of .navbar-collapse -->
        </div>
        <!-- End of .container -->
    </nav>
    <!-- End of .navbar -->
     <style>
        .text-logo{
                font-size: 24px;
    line-height: 22px;
    font-weight: 500;
    margin-left: 2px;
        }
     </style>
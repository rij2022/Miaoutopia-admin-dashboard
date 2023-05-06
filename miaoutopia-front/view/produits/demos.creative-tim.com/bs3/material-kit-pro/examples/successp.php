<?php
session_start();
$_SESSION['cart'] = array();
var_dump($_SESSION['cart']);
 ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/account-verified.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Verified - Vetra | E-Commerce HTML Admin Dashboard Template</title>

    <!-- Favicon -->


    <!-- Themify icons -->
    <link rel="stylesheet" href="dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">

<!-- begin::preloader
<div class="preloader">
    <div class="preloader-icon"></div>
</div>-->
<!-- end::preloader -->


    <div class="form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card py-0 py-lg-4">
                        <div class="row">
                            <div class="col align-items-center justify-content-between flex-column text-center">
                                <figure class="mb-5">
                                    <img width="120" src="../assets/img/productscat/favicon.png" alt="logo">
                                </figure>
                                <div class="display-8 mb-4">Congratulations 😉</div>
                                <p class="mb-4">Your payment is receive . hope you enjoy the product.</p>
                                <div class="row my-5">
                                    <div class="col-3 m-auto">
                                        <img class="img-fluid" src="https://vetra.laborasyon.com/assets/svg/congratulations.svg" alt="...">
                                    </div>
                                </div>
                                <a href="../../../../../../email.php" class="btn btn-primary" >Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div><script
                src="" class="stripe-button"
                data-key="pk_test_51N3njIJErzrMoGLppG8km80C7hlLqVcwSVvZAxUGt3bY2QwqrBQoGYmsERoM8eGOfPNPSidwhHRq5gT242aVHrBB00Y8sVsCls"
                data-amount=<?php echo str_replace(",","",$_GET["price"]) * 100?>
                data-name="<?php echo $_GET["item_name"]?>"
                data-description="<?php echo $_GET["item_name"]?>"
                data-image="<?php echo $_GET["image"]?>"
                data-currency="inr"
                data-locale="auto">
                </script></div>
      </div> 
<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/account-verified.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:26 GMT -->
</html>

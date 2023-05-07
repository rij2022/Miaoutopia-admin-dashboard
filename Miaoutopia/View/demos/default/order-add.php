<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - Vetra | E-Commerce HTML Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png"/>

    <!-- Themify icons -->
    <link rel="stylesheet" href="../../dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="auth">

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->


    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="ltf-block-logo d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
                                </div>
                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">New Order</h1>
                                    <p class="text-muted">You can add your new order for </p><h2 class="display-8"><?php echo $_GET['name']?></h2>
                                </div>
                                <form class="mb-5 needs-validation " action="verificationadd.php" method="POST">
                               
                                <div class="mb-3">
                               
    <label for="validationCustom04" class="form-label"></label>
    <select class="form-select needs-validation " id="validationCustom04" name="status"  required>
      <option selected  name="status">processing</option>
      <option>shipped</option>
      <option>cancelled</option>
    </select>  </div>
     <div class="mb-3">
     <input type="number" class="form-control" placeholder="Enter the quantite" name="quantite"
                                            min="0"   required>
                </div>
                <div class="mb-3">

     <input type="number" class="form-control"  name="price" 
                                             value="<?php echo intval($_GET['price']); ?>" hidden>
                </div>
                <div class="mb-3">
                
                        <label class="form-label">Pick the date of delivery</label>
                        <input type="date" class="form-control" name="date-demande" required>
                    
   
                </div>
                <div class="mb-3">
     <input type="number" class="form-control"  name="idp" value="<?php echo $_GET['idp']?>"
                                               hidden>
                </div>
                
    
  <script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()</script>
                                  
                                 
                                    <div class="text-center text-lg-start">
                                    <input class="btn btn-primary" type="submit" value="Add" />
  <input class="btn btn-light" type="reset" value="Reset"/>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start  justify-content-between  ">
                        <!--<div class="logo">
                            <img width="120" src="C:/xampp/htdocs/Miaoutopia/View/demos/default/logo.svg" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to Vetra!</h3>
                            <p class="lead my-5">Do you already have an account?</p>
                            <a href="#" class="btn btn-primary">Sign In</a>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Terms & Conditions</a>
                            </li>
                        </ul>-->
                 
  <img src="../../assets/images/khadhroun.jpg" style="height: 600px; width: 500px;" alt="...">

                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>
<script src="C:/xampp/htdocs/Miaoutopia/View/dist/js/totalPrice.js"></script>
<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:26 GMT -->
</html>

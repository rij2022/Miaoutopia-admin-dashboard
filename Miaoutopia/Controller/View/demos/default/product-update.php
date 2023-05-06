<?php
include 'C:\xampp\htdocs\Miaoutopia\Controller\productC.php';
$productC = new ProductC();
$product = $productC->showProduct($_GET['id']);
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  Miaoutopia </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png"/>
<!-- date picker dropdown-->
<link rel="stylesheet" href="libs/datepicker/daterangepicker.css" type="text/css">
<link rel="stylesheet" href="libs/dropzone/dropzone.css" type="text/css">
<!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="../../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-docs.css" type="text/css">

        <!-- Form wizard -->
    <link rel="stylesheet" href="../../libs/form-wizard/jquery.steps.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="../../dist/css/app.min.css" type="text/css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <img width="100" src="logo.svg" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->

<!-- sidebars -->

<!-- search sidebar -->
<div class="sidebar" id="search">
    <div class="sidebar-header">
        Search
        <button data-sidebar-close>
            <i class="bi bi-arrow-right"></i>
        </button>
    </div>
    <div class="sidebar-content">
        <form class="mb-4"  action="/file-upload" class="dropzone">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">
                <button class="btn btn-outline-light" type="button" id="button-search-addon">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
        <h6 class="mb-3">Last searched</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Reports for 2021</a>
                <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Current users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-search"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Meeting notes</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
        <h6 class="mb-3">Recently viewed</h6>
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-secondary avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-check-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Todo list</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-warning avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-wallet2"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Pricing table</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-info avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-gear"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Settings</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
            <div class="d-flex align-items-center mb-3">
                <a href="#" class="avatar avatar-success avatar-sm me-3">
                        <span class="avatar-text rounded-circle">
                            <i class="bi bi-person-circle"></i>
                        </span>
                </a>
                <a href="#" class="flex-fill">Users</a>
                <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">
                    <i class="bi bi-x"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-action">
        <a href="#" class="btn btn-danger">All Clear</a>
    </div>
</div>
<!-- ./ search sidebar -->

<!-- ./ sidebars -->

<!-- menu -->
<div class="menu">
    <div class="menu-header">
        <a href="index.php" class="menu-header-logo">
            <img width="50" src="logo.svg" alt="logo">
        </a>
        <a href="index.php" class="btn btn-sm menu-close-btn">
            <i class="bi bi-x"></i>
        </a>
    </div>
    <div class="menu-body">
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
                <div class="avatar me-3">
                    <img src="../../assets/images/user/3.jpg"
                         class="rounded-circle" alt="image">
                </div>
                <div>
                    <div class="fw-bold">Arij Laatigue</div>
                    <small class="text-muted">Sales Manager</small>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-person dropdown-item-icon"></i> Profile
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-envelope dropdown-item-icon"></i> Inbox
                </a>
                <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                    <i class="bi bi-gear dropdown-item-icon"></i> Settings
                </a>
                <a href="login.html" class="dropdown-item d-flex align-items-center text-danger"
                   target="_blank">
                    <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
                </a>
            </div>
        </div>
        <ul>
            <li class="menu-divider">E-Commerce</li>
            <li>
                <a  href="index.php">
                    <span class="nav-link-icon">
                        <i class="bi bi-bar-chart"></i>
                    </span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-receipt"></i>
                    </span>
                    <span>Orders</span>
                </a>
                <ul>
                    <li>
                        <a  class="active"  href="orders.php">List</a>
                    </li>
                    <li>
                        <a  href="order-detail.html">Detail</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="nav-link-icon">
                        <i class="bi bi-truck"></i>
                    </span>
                    <span>Products</span>
                </a>
                <ul>
                    <li>
                        <a  href="product-list.php">List of products
                        </a>
                    </li>
                
                    <li>
                        <a  class="active"
                            href="product-add.php">Add product</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
<!-- ./  menu -->

<!-- layout-wrapper -->
<div class="layout-wrapper">

    <!-- header -->
    <div class="header">
    <div class="menu-toggle-btn"> <!-- Menu close button for mobile devices -->
        <a href="#">
            <i class="bi bi-list"></i>
        </a>
    </div>
    <!-- Logo -->
    <a href="index.php" class="logo">
        <img width="100" src="https://vetra.laborasyon.com/assets/images/logo.svg" alt="logo">
    </a>
    <!-- ./ Logo -->
    <div class="page-title">update product</div>
    <form class="search-form" >
        <div class="input-group">
            <button class="btn btn-outline-light" type="button" id="button-addon1">
                <i class="bi bi-search"></i>
            </button>
            <input type="text" class="form-control" placeholder="Search..."
                   aria-label="Example text with button addon" aria-describedby="button-addon1">
            <a href="#" class="btn btn-outline-light close-header-search-bar">
                <i class="bi bi-x"></i>
            </a>
        </div>
    </form>
    <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
                    <i class="bi bi-bell icon-lg"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link nav-link-notify" data-count="3" data-bs-toggle="dropdown">
                    <i class="bi bi-cart2 icon-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <h6 class="m-0 px-4 py-3 border-bottom">Shopping Cart</h6>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/3.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Digital clock</h6>
                                    <div>1 x $1.190,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/4.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Toy Car</h6>
                                    <div>1 x $139.58</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/5.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Sunglasses</h6>
                                    <div>2 x $50,90</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <a href="#" class="text-danger me-3" title="Remove">
                                    <i class="bi bi-trash"></i>
                                </a>
                                <a href="#" class="me-3 flex-shrink-0 ">
                                    <img src="../../assets/images/products/6.jpg" class="rounded" width="60"
                                         alt="...">
                                </a>
                                <div>
                                    <h6>Cake</h6>
                                    <div>1 x $10,50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="m-0 px-4 py-3 border-top small">Sub Total : <strong
                            class="text-primary">$1.442,78</strong></h6>
                </div>
            </li>
            <li class="nav-item ms-3">
                            </li>
        </ul>
    </div>
    <!-- Header mobile buttons -->
    <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
            <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
            <i class="bi bi-three-dots"></i>
        </a>
    </div>
    <!-- ./ Header mobile buttons -->
</div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content ">
        
    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start mb-3">
                            <figure class="me-4 flex-shrink-0">
                                <img width="100" class="rounded-pill"
                                     src="<?php echo $product['img']?>" alt="...">
                            </figure>
                            <div class="flex-fill">
                                <h5 class="mb-3"><?php echo $product['name']?></h5>
                                <a class="btn btn-primary me-2" href="product-list.php">back to list</a>
                                <button class="btn btn-outline-danger btn-icon" data-bs-toggle="tooltip" title="Remove Avatar" href="deleteProduct.php?id=<?php echo $product['id'];?>">
                                   
                                    <a  href="deleteProduct.php?id=<?php echo $product['id'];?>" class="dropdown-item text-danger"  >
                                <i class="bi bi-trash me-0"></i> </a>
                            </button>
                                
                            </div>
                        </div>

    <div class="row">
        <div class="col-md-8">
            <div id="checkout-form-wizard">
                <h3>update product</h3>
                <section class="card card-body mb-0">
                    <div class="mb-4">
                        <h6 class="card-title mb-3">Update  product</h6>
                        <div class="text-muted">Enter your new Product information</div>
                    </div>
                    <form action="update.php" method="POST" enctype="multipart/form-data" id=>
                          <div class="row g-4 mb-3">
                        
                    <div class="row g-4 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $product['name']?>">
                        </div>
                      
                    </div>
                    <!-- work here-->
                    <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label" >Price</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $product['price']?>" min=0 >
                    </div>
                   
                </div>
                <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" rows = "4" cols = "40" ><?php echo $product['description']?></textarea>
                    </div>
                    <div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Stock</label>
                        <input type="text" class="form-control" name="stock" value="<?php echo $product['stock']?>">
                        <input type="text" class="form-control" name="id" value="<?php echo $product['id']?>" hidden>
                    </div>
                    
                </div>
                    <!--<div class="row g-4 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Pick a date</label>
                        <input type="date" name="daterangepicker" class="form-control" name="date_demande" value=" echo $product['date']?>">
                    </div>
                    </div>-->
   
                    <!--stop-->
                    <div class="row g-4 mb-3">
              
                
                <div class="col-md-6">
  <input class="btn btn-primary" type="submit" value="update" />
  <input class="btn btn-light" type="reset" value="Reset"/>
</div></div>
</form>  
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Order Summary</h5>
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Products</h6>
                    <div class="list-group list-group-flush">
                   
                        <div class="list-group-item d-flex px-0">
                            <a href="#" class="me-3">
                                <img src="../../assets/images/products/1.jpg" class="rounded" width="60" alt="...">
                            </a>
                            <div>
                                <h6>tuna</h6>
                                <div>15dt</div>
                            </div>
                           
                        </div>
                    </div>
                  
                    </div>
                </div>
            </div>
           
        </div>
    

    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
        <div>© 2021 Vetra - <a href="https://laborasyon.com/" target="_blank">Laborasyon</a></div>
        <div>
            <nav class="nav gap-4">
                <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Get Help</a>
            </nav>
        </div>
    </footer>
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="../../libs/bundle.js"></script>

    <!-- Form wizard -->
   <!-- <script src="../../libs/form-wizard/jquery.steps.min.js"></script>-->

    <!-- Examples -->
    <script src="../../dist/js/examples/checkout.js"></script>
<!--datepicker drop file script-->
<script src="libs/datepicker/daterangepicker.js"></script>
<script src="libs/dropzone/dropzone.js"></script>
<!-- Main Javascript file -->
<script src="../../dist/js/app.min.js"></script>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 20:44:17 GMT -->
</html>



<?php
include '../../../../../../controller/productC.php';
$productC = new productC();

$product = $productC->showproduct($_GET['id']);
session_start();
if(empty($_SESSION['cart'])){
  $_SESSION['cart']=array();
}

//var_dump($_SESSION['cart']);

//$productC->gettotal();
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-kit-pro/examples/product-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 19:20:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Product Page- Miaoutopia</title>

<link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/material-kit98f3.css?v=1.3.0" rel="stylesheet" />

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>

</head>
<body class="product-page">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
<div class="container">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="C:/xampp/htdocs/miaoutopia-front/view/site_web.html">Miaoutopia</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="../index.html">
<i class="material-icons">apps</i> Components
</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="material-icons">view_day</i> Sections
<b class="caret"></b>
</a>
<ul class="dropdown-menu dropdown-with-icons">
<li>
<a href="../sections.html#headers">
<i class="material-icons">dns</i> Headers
</a>
</li>
<li>
<a href="../sections.html#features">
<i class="material-icons">build</i> Features
</a>
</li>
<li>
<a href="../sections.html#blogs">
<i class="material-icons">list</i> Blogs
</a>
</li>
<li>
<a href="../sections.html#teams">
<i class="material-icons">people</i> Teams
</a>
</li>
<li>
<a href="../sections.html#projects">
<i class="material-icons">assignment</i> Projects
</a>
</li>
<li>
<a href="../sections.html#pricing">
<i class="material-icons">monetization_on</i> Pricing
</a>
</li>
<li>
<a href="../sections.html#testimonials">
<i class="material-icons">chat</i> Testimonials
</a>
</li>
<li>
<a href="../sections.html#contactus">
<i class="material-icons">call</i> Contacts
</a>
</li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
 <i class="material-icons">view_carousel</i> Examples
<b class="caret"></b>
</a>
<ul class="dropdown-menu dropdown-with-icons">
<li>
<a href="about-us.html">
<i class="material-icons">account_balance</i> About Us
</a>
</li>
<li>
<a href="blog-post.html">
<i class="material-icons">art_track</i> Blog Post
</a>
</li>
<li>
<a href="blog-posts.html">
<i class="material-icons">view_quilt</i> Blog Posts
</a>
</li>
<li>
<a href="contact-us.html">
<i class="material-icons">location_on</i> Contact Us
</a>
</li>
<li>
<a href="landing-page.html">
<i class="material-icons">view_day</i> Landing Page
</a>
</li>
<li>
<a href="login-page.html">
<i class="material-icons">fingerprint</i> Login Page
</a>
</li>
<li>
<a href="pricing.html">
<i class="material-icons">attach_money</i> Pricing Page
</a>
</li>
<li>
<a href="ecommerce.html">
<i class="material-icons">shop</i> Ecommerce Page
</a>
</li>
<li>
<a href="product-page.html">
<i class="material-icons">beach_access</i> Product Page
</a>
</li>
<li>
<a href="profile-page.html">
<i class="material-icons">account_circle</i> Profile Page
</a>
</li>
<li>
<a href="signup-page.html">
<i class="material-icons">person_add</i> Signup Page
</a>
</li>
</ul>
</li>
<li>
<a href="order-add.php" target="_blank" class="btn btn-white btn-simple">

</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/productscat/background.jpg');background-position: 70% 30%;">
<div class="container">
<div class="row title-row">
<div class="col-md-4 col-md-offset-8">
<a class="btn btn-warning pull-right" href="shoppingcart.php"><i class="material-icons">shopping_cart</i> <?php echo count($_SESSION['cart'])?> Items</a>
</div>
</div>
</div>
</div>
<div class="section section-gray">
<div class="container">
<div class="main main-raised main-product">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="tab-content">

<div class="tab-pane active" id="product-page2">
<img src="../assets/img/productscat/<?=$product['img'];?>"  />
</div>

</div>

</div>
<div class="col-md-6 col-sm-6">
<h2 class="title"><?= $product['name'];?> </h2>
<h3 class="main-price"><?= $product['price'];?>dt</h3>
<div id="acordeon">
<div class="panel-group" id="accordion">
<div class="panel panel-border panel-default">
<div class="panel-heading" role="tab" id="headingOne">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<h4 class="panel-title">
Description
<i class="material-icons">keyboard_arrow_down</i>
</h4>
</a>
</div>
<div id="collapseOne" class="panel-collapse collapse in">
<div class="panel-body">
<p><?= $product['description'];?>.</p>
</div>
</div>
</div>
<div class="panel panel-border panel-default">
<div class="panel-heading" role="tab" id="headingOne">
<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-controls="collapseOne">
<h4 class="panel-title">
product ingredient
<i class="material-icons">keyboard_arrow_down</i>
</h4>
</a>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
ulfate, Iron Sulfate, Manganese Sulfate, Copper Sulfate, Calcium Iodate], Guar Gum, Taurine, L-Ascorbic Acid, Choline Chloride, Vitamins [Vitamin E Supplement, Niacin (Vitamin B-3), Thiamine Mononitrate (Vitamin B-1), Calcium Pantothenate (Vitamin B-5), Riboflavin Supplement (Vitamin B-2), Pyridoxine Hydrochloride (Vitamin B-6), Biotin (Vitamin B-7), Vitamin A Supplement, Vitamin B-12 Supplement, Folic Acid (Vitamin B-9), Vitamin D-3 Supplement, Menadione Sodium Bisulfite Complex (Vitamin K)]. A654218; Tuna: Chicken Broth, Chicken, Liver, Meat By-Products, Tuna, Artificial And Natural Flavors, Pork Plasma, Sodium Tripolyphosphate, Steamed Bone Meal, Locust Bean Gum, Minerals [Potassium Chloride, Magnesium Sulfate, Zinc Sulfate, Iron Sulfate, Manganese Sulfate, Copper Sulfate, Calcium Iodate], Guar Gum, Taurine, L-Ascorbic Acid, Choline Chloride, Vitamins [Vitamin E Supplement, Niacin (Vitamin B-3), Thiamine Mononitrate (Vitamin B-1), Calcium Pantothenate (Vitamin B-5), Riboflavin Supplement (Vitamin B-2), Pyridoxine Hydrochloride (Vitamin B-6), Biotin (Vitamin B-7), Vitamin A Supplement, Vitamin B-12 Supplement, Folic Acid (Vitamin B-9), Vitamin D-3 Supplement.
</div>
</div>
</div>
</div>

</div>
<div class="row text-center">
<a class="btn btn-warning btn-round" href="shoppingcart.php?id=<?php echo $_GET['id'];?>">Add to Cart &nbsp;<i class="material-icons">shopping_cart</i></a>
</div>
</div>
<br>
<br>
<br>
</div>
</div>

<div class="features text-center">
<div class="row">
<div class="col-md-4">
<div class="info">
<div class="icon icon-info">
<i class="material-icons">local_shipping</i>
</div>
<h4 class="info-title">2 Days Delivery </h4>
<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
</div>
</div>
<div class="col-md-4">
<div class="info">
<div class="icon icon-success">
<i class="material-icons">verified_user</i>
</div>
<h4 class="info-title">Refundable Policy</h4>
<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
</div>
</div>
<div class="col-md-4">
<div class="info">
<div class="icon icon-rose">
<i class="material-icons">favorite</i>
</div>
<h4 class="info-title">Popular Item</h4>
<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
</div>
</div>
</div>
</div>
<div class="related-products">
<h3 class="title text-center">You may also be interested in:</h3>
<div class="row">
<div class="col-sm-6 col-md-3">
<div class="card card-product">
<div class="card-image">
<a href="#pablo">
<img class="img" src="../assets/img/productscat/ball.jpg" />
</a>
</div>
<div class="card-content">
<h6 class="category text-rose">Trending</h6>
<h4 class="card-title">
<a href="#pablo">Feeder Ball</a>
</h4>
<div class="card-description">
Watch your cat's natural instincts come alive as she chases the SlimCat across the floor
</div>Contains one 6-pack
<div class="footer">
<div class="price">
<h4>20dt</h4>
</div>
<div class="stats">
<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
<i class="material-icons">favorite</i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="card card-product">
<div class="card-image">
<a href="#pablo">
<img class="img" src="../assets/img/productscat/catlitter.jpg" />
</a>
</div>
<div class="card-content">
<h6 class="category text-muted">Popular</h6>
<h4 class="card-title">
<a href="#pablo">cat litter</a>
</h4>
<div class="card-description">
Hypoallergenic kitty litter thats gentle enough even for sensitive cats


</div>
<div class="footer">
<div class="price">
<h4>60dt</h4>
</div>
<div class="stats">
<button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
<i class="material-icons">favorite</i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="card card-product">
<div class="card-image">
<a href="#pablo">
<img class="img" src="../assets/img/productscat/clean paw.jpg" />
</a>
</div>
<div class="card-content">
<h6 class="category text-muted">Popular</h6>
<h4 class="card-title">
<a href="#pablo">clean paw</a>
</h4>
<div class="card-description">
FIGHTS ODORS LONGER: Fresh Step Advanced Cat Litter starts fighting odors on contact to control odor longer compared to Fresh Step simply unscentedUNSCENTED CAT LITTER: Recommended by vets, this Fresh Step Advanced Simply Unscented Cat Litter is 99.9% 
</div>
<div class="footer">
<div class="price">
<h4>60dt</h4>
</div>
<div class="stats">
<button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
<i class="material-icons">favorite</i>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="card card-product">
<div class="card-image">
<a href="#pablo">
<img class="img" src="../assets/img/productscat/2.jpg" />
</a>
</div>
<div class="card-content">
<h6 class="category text-rose">Trending</h6>
<h4 class="card-title">
<a href="#pablo">flee-traetments</a>
</h4>
<div class="card-description">
Contains one 6-pack, one 4-pack, and one 2-pack of Advantage Contains one 6-packII for Small Cats 5-9 lbs
Contains one 6-packContains one 6-packContains one 6-packContains Contains one 6-packone 6-pack
</div>
<div class="footer">
<div class="price">
<h4>9dt</h4>
</div>
<div class="stats">
<button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
<i class="material-icons">favorite</i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="footer footer-black footer-big">
<div class="container">
<div class="content">
<div class="row">
<div class="col-md-4">
<h5>About Us</h5>
<p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p> <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
</div>
<div class="col-md-4">
<h5>Social Feed</h5>
<div class="social-feed">
<div class="feed-line">
<i class="fa fa-twitter"></i>
<p>How to handle ethical disagreements with your clients.</p>
</div>
<div class="feed-line">
<i class="fa fa-twitter"></i>
<p>The tangible benefits of designing at 1x pixel density.</p>
</div>
<div class="feed-line">
<i class="fa fa-facebook-square"></i>
<p>A collection of 25 stunning sites that you can use for inspiration.</p>
</div>
</div>
</div>
<div class="col-md-4">
<h5>Instagram Feed</h5>
<div class="gallery-feed">
<img src="../assets/img/faces/card-profile6-square.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/christian.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/card-profile4-square.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/card-profile1-square.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/marc.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/kendall.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/card-profile5-square.jpg" class="img img-raised img-rounded" alt="" />
<img src="../assets/img/faces/card-profile2-square.jpg" class="img img-raised img-rounded" alt="" />
</div>
</div>
</div>
</div>
<hr />
<ul class="pull-left">
<li>
<a href="#pablo">
Blog
</a>
</li>
<li>
<a href="#pablo">
Presentation
</a>
</li>
<li>
<a href="#pablo">
Discover
</a>
</li>
<li>
<a href="#pablo">
Payment
</a>
</li>
<li>
<a href="#pablo">
Contact Us
</a>
</li>
</ul>
<div class="copyright pull-right">
Copyright &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim All Rights Reserved.
</div>
</div>
</footer>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c0a5d9a3de1bad5","version":"2023.4.0","r":1,"b":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>

<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js"></script>

<script src="../assets/js/moment.min.js"></script>

<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

<script src="../assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

<script src="../assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

<script src="../assets/js/bootstrap-tagsinput.js"></script>

<script src="../assets/js/jasny-bootstrap.min.js"></script>

<script src="../assets/js/jquery.flexisel.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<script src="../assets/js/material-kit98f3.js?v=1.3.0" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
    		itemsToScroll: 1,
    		animationSpeed: 400,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 3
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 3
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });

    // Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../../../connect.facebook.net/en_US/fbevents.js');

try{
  fbq('init', '111649226022273');
  fbq('track', "PageView");

}catch(err) {
  console.log('Facebook Track Error:', err);
}
   </script>
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />
  </noscript>

<!-- Mirrored from demos.creative-tim.com/bs3/material-kit-pro/examples/product-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 19:20:41 GMT -->
</html>

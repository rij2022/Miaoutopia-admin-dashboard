<?php 
include "C:/xampp/htdocs/miaoutopia-front/controller/productC.php";

$productC = new ProductC();

if (!empty($_GET['q'])) {
    $searchTerm = $_GET['q'];
    $list = $productC->chercherproduct($searchTerm);
} else {
    $list= $productC->listProduct();
}
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-kit-pro/examples/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 19:20:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>produits</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />

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
<body class="ecommerce-page">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100" id="sectionsNav">
<div class="container">

<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="presentation.html"><img src="../assets/img/productscat/favicon.png" height="50"

	></img></a>
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

</ul>
</div>
</div>
</nav>
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/productscat/background-inde.jpg');">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="brand">
<h1 class="title">Ecommerce Page!</h1>
<h4>Free global delivery for all products. Use coupon <b>25summer</b> for an extra 25% Off</h4>
</div>
</div>
</div>
</div>
</div>
<div class="main main-raised">

<div class="section">
<div class="container">
<h2 class="section-title">Find what you need</h2>
<div class="row">
<div class="col-md-3">
<div class="card card-refine card-plain">
<div class="card-content">
<h4 class="card-title">
Refine
<button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip" title="Reset Filter">
<i class="material-icons">cached</i>
</button>
</h4>
<div class="panel panel-default panel-rose">
<div class="panel-heading" role="tab" id="headingOne">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
<h4 class="panel-title">Price Range</h4>
<i class="material-icons">keyboard_arrow_down</i>
</a>
</div>
<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
<div class="panel-body panel-refine">
<span id="price-left" class="price-left pull-left" data-currency="&euro;">100</span>
<span id="price-right" class="price-right pull-right" data-currency="&euro;">850</span>
<div class="clearfix"></div>
<div id="sliderRefine" class="slider slider-rose"></div>
</div>
</div>
</div>
<div class="panel panel-default panel-rose">
<div class="panel-heading" role="tab" id="headingTwo">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<h4 class="panel-title">Clothing</h4>
<i class="material-icons">keyboard_arrow_down</i>
</a>
</div>
<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
 <div class="panel-body">
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox" checked="">
Blazers
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Casual Shirts
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Formal Shirts
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Jeans
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Polos
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Pyjamas
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Shorts
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Trousers
</label>
</div>
</div>
</div>
</div>
<div class="panel panel-default panel-rose">
<div class="panel-heading" role="tab" id="headingThree">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<h4 class="panel-title">Designer</h4>
<i class="material-icons">keyboard_arrow_down</i>
</a>
</div>
<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
<div class="panel-body">
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox" checked="">
All
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
litter
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
food
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
toys
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
flee treatments
</label>
</div>


</div>
</div>
</div>
<div class="panel panel-default panel-rose">
<div class="panel-heading" role="tab" id="headingFour">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
<h4 class="panel-title">Colour</h4>
<i class="material-icons">keyboard_arrow_down</i>
</a>
</div>
<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
<div class="panel-body">
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox" checked="">
All
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Black
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Blue
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Brown
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Gray
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Green
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Neutrals
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" value="" data-toggle="checkbox">
Purple
</label>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-9">
<div class="row">
	     <?php
                    foreach ($list as $product) {
                        ?>
<div class="col-md-4">
<div class="card card-product card-plain no-shadow" data-colored-shadow="false">
<div class="card-image">
	<a href="product-page.php?id=<?php echo $product['id'];?>">
<div style="text-align:center; " >
<img src="../assets/img/productscat/<?=$product['img'];?>" style=" height: 250px; width: auto; " alt="image not found"  />
					</div>
</a>
</div>
 <div class="card-content">
<a href="#">
<h4 class="card-title"><?= $product['name']; ?></h4>
</a>
<p class="description">
<?= $product['description']; ?>
</p>
<div class="footer">
<div class="price-container">
<span class="price"> <?= $product['price']; ?>dt </span>
</div>
<button class="btn btn-rose btn-simple btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="Remove from wishlist" data-placement="left">
<i class="material-icons">favorite</i>
</button>
<a class="btn btn-warning btn-round btn-xs pull-right" href="product-page.php?id=<?php echo $product['id'];?>" >
<i class="material-icons" >shopping_cart</i> buy now
					</a>
</div>
</div>
</div> 
</div>
<?php }
 ?>
</div>
<div class="col-md-3 col-md-offset-4">

<button rel="tooltip" class="btn btn-rose btn-round test">Load more...</button>
</div>

</div>
</div>
<br>

</div>
</div>
</div> 
<br>
<div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url('../assets/img/productscat/background-inde.jpg');">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="text-center">
<h3 class="title">Subscribe to our site</h3>
<p class="description">
Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
</p>
</div>
<div class="card card-raised card-form-horizontal">
<div class="card-content">
<form method="" action="#">
<div class="row">
<div class="col-sm-8">
<div class="input-group">
<span class="input-group-addon">
<i class="material-icons">mail</i>
</span>
<div class="form-group is-empty"><input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span></div>
</div>
</div>
<div class="col-sm-4">
<button type="button" class="btn btn-rose btn-block">Subscribe</button>
</div>
</div>
</form>
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
<p>Miaoutopia is a website for cats lover , we created our community to protect cats. </p>
</div>
<div class="col-md-4">
<h5>Social Feed</h5>
<div class="social-feed">
<div class="feed-line">
<i class="fa fa-twitter"></i>
<p></p>
</div>
<div class="feed-line">
<i class="fa fa-twitter"></i>
<p></p>
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

</div>
<script>
	// set the number of products to display at a time
const productsPerPage = 6;

// get all the product cards
const productCards = document.querySelectorAll('.card-product');

// hide all product cards after the fifth one
for (let i = productsPerPage; i < productCards.length; i++) {
  productCards[i].style.display = 'none';
}

// get the load more button
const loadMoreBtn = document.querySelector('.test');

// add a click event listener to the load more button
loadMoreBtn.addEventListener('click', function() {
  // get the number of visible product cards
  const visibleProductCards = document.querySelectorAll('.card-product:not([style*="display: none"])');
  // calculate the new number of product cards to show
  const newProductCardsToShow = visibleProductCards.length + productsPerPage;
  // show the new product cards
  for (let i = visibleProductCards.length; i < newProductCardsToShow && i < productCards.length; i++) {
    productCards[i].style.display = 'block';
  }
  // if all product cards are visible, hide the load more button
  if (newProductCardsToShow >= productCards.length) {
    loadMoreBtn.style.display = 'none';
  }
});

</script>
</footer>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c0a5d98ba71bad5","version":"2023.4.0","r":1,"b":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<script src="../assets/js/material-kit98f3.js?v=1.3.0" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function(){

			var slider2 = document.getElementById('sliderRefine');

			noUiSlider.create(slider2, {
				start: [42, 880],
				connect: true,
				range: {
				   'min': [30],
				   'max': [900]
				}
			});

			var limitFieldMin = document.getElementById('price-left');
			var limitFieldMax = document.getElementById('price-right');

			slider2.noUiSlider.on('update', function( values, handle ){
				if (handle){
					limitFieldMax.innerHTML= $('#price-right').data('currency') + Math.round(values[handle]);
				} else {
					limitFieldMin.innerHTML= $('#price-left').data('currency') + Math.round(values[handle]);
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

<!-- Mirrored from demos.creative-tim.com/bs3/material-kit-pro/examples/ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 19:20:28 GMT -->
</html>

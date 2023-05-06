<?php
include "C:/xampp/htdocs/miaoutopia-front/controller/productC.php";
$productC = new productC();
session_start();
if(empty($_SESSION['cart'])){
  $_SESSION['cart']=array();
}
array_push($_SESSION['cart'],$_GET['id']);
$whereIN = implode(',', $_SESSION['cart']);
$list = $productC->listcart($whereIN);
$isOdd = true;


?>

<!DOCTYPE html>
<html lang="en">
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


    <link href="../assets/css/style1.scss" rel="stylesheet" />
    
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
<i class="material-icons">shopping_cart</i> Buy Now
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
<button class="btn btn-white pull-right"><i class="material-icons">shopping_cart</i>  <?php echo count($_SESSION['cart'])?> Items</button>
</div>
</div>
</div>
</div>
<div class="section section-gray">
<div class="container">
<div class="main main-raised main-product">
<div class="row">

<div class="tab-content">

<div class="wrap cf">
  <h1 class="projTitle">Shopping Cart</h1>
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="list-product.php" class="continue">Continue Shopping</a>
  </div>
<div class="cart">
     <ul class="tableHead">
      <li class="prodHeader">Product</li>
      <li>Quantity</li>
      <li>Total</li>
      <li>Remove</li>
      <script>
        var idArrays = new Array();
      </script>
    </ul>
    <ul class="cartWrap">
      <?php foreach($list as $product): ?>
        <?php $isOdd = !$isOdd; ?>
        <li class="items <?php echo $isOdd ? 'odd' : 'even'; ?>">
          <div class="infoWrap"> 
            <div class="cartSection info">
              <img src="../assets/img/productscat/<?php echo $product['img'];?>" alt="" class="itemImg" />
             <input style="display:none;" type="text" name="img" value="<?php echo $product['img'];?>">
              <p class="itemNumber"></p>
              <h3><?php echo $product['name']?></h3>
              <script>
                var id =parseFloat( "<?php echo $product['id'] ?>")
                idArrays.push(id)
              </script>
     <label >select quantity</label>
            <p> <input type="text" class="qty" placeholder="0"/></p> 
              <p class="unitPrice">  <?php echo $product['price']?></p>
           
            </div>  
            <div id="prodTotal" class="prodTotal cartSection aswem">
              <p class="aswem">0.00</p>

            </div>
            <div class="cartSection removeWrap">
              <a href="#" class="remove">x</a>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  

  
  <div class="subtotal cf">
    <ul>
      <li class="totalRow"><span class="label">Subtotal</span><span class="value" id="finalPrice">dt35.00</span></li>
      
          <li class="totalRow"><span class="label">Shipping</span><span class="value">dt5.00</span></li>
      
            <li class="totalRow"><span class="label">Tax</span><span class="value">dt4.00</span></li>
            <li class="totalRow final"><span class="label">Total</span><span class="value" >dt44.00</span></li>
      <li class="totalRow"><a class="btn continue" id="refreshTotal" >Final Price</a></li>
    
    </ul>
   
  </div>
</div>

<script
                src="" class="stripe-button"
                data-key="pk_test_51N3njIJErzrMoGLppG8km80C7hlLqVcwSVvZAxUGt3bY2QwqrBQoGYmsERoM8eGOfPNPSidwhHRq5gT242aVHrBB00Y8sVsCls"
                data-amount=<?php echo  100?>
                data-name="<?php echo "item_name"?>"
                data-description="<?php echo "item_name"?>"
                data-image="<?php echo "image"?>"
                data-currency="usd"
                data-locale="auto">
                </script>
<form action="checkout-charge.php" method="POST">
<input style="display:none;" type="text" name="name" value="<?php echo $product['name'];?>">
<input style="display:none;" type="number" name="finalPrice" id="pricebeforePay" value="13">
<input style="display:none;" type="number" name="qt" id="qtbeforePay" value="0">
<input style="display:none;" type="hidden" name="idTable" id="idTable">
<input style="display:none;" type="hidden" name="quantityTable" id="quantityTable">

<script defer>
  // Get all the quantity input elements on the page
  const qtyInputs = document.querySelectorAll('.qty');
  let priceShih =0
  let QuantityArray= new Array(qtyInputs.length);
  for (let i = 0 ; i<QuantityArray.length; i++)
   QuantityArray[i] = 0

  // Loop through each quantity input
  qtyInputs.forEach((qtyInput,index) => {
    // Add an event listener for when the input value changes
    qtyInput.addEventListener('change', event => {
   
    

      // Get the corresponding price element
      const priceElem = event.target.parentElement;
      
      // Get the price from the text of the price element
      const qt = parseFloat(priceElem.querySelector('input').value);
      // Calculate the new total price
     const unitPrice =priceElem.nextElementSibling.innerHTML

     const newTotal =parseFloat(unitPrice) *qt;
     document.getElementById('qtbeforePay').value = qt

     QuantityArray[index] = qt ;
     console.log(QuantityArray) ;
     console.log(idArrays) ;

 
     var idJson = JSON.stringify(idArrays) ;
     var quantityJson = JSON.stringify(QuantityArray) ;

     console.log(quantityJson) ;
     console.log(idJson) ;
     
     document.getElementById('quantityTable').value = quantityJson;
     document.getElementById('idTable').value = idJson;





      // Update the total price element
      const totalElem = event.target.parentElement.nextElementSibling.parentElement.nextElementSibling;
      totalElem.textContent =newTotal;


    });
  });
document.getElementById('refreshTotal').addEventListener('click',()=>{
    const finalPriceElement = document.getElementById('finalPrice')
        const allPrices = document.querySelectorAll('.aswem')
        allPrices.forEach((price) => {
            priceShih +=parseFloat(price.textContent)
            console.log(priceShih)

            
        })

        document.getElementById('finalPrice').innerHTML = priceShih
     

        
      document.getElementById('pricebeforePay').value = priceShih
 


})


</script>

<script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51N3njIJErzrMoGLppG8km80C7hlLqVcwSVvZAxUGt3bY2QwqrBQoGYmsERoM8eGOfPNPSidwhHRq5gT242aVHrBB00Y8sVsCls"
                data-amount=<?php echo $_COOKIE['finalPrice'];?>
                data-name="<?php echo "item_name"?>"
                data-description="<?php echo "item_name"?>"
                data-image="<?php echo "image"?>"
                data-currency="inr"
                data-locale="auto">
                </script></form>

</body>
<script src="../assets/js/cart.js" type="text/javascript"></script>
</html> 
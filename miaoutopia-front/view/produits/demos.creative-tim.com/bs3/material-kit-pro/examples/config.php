<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51N3njIJErzrMoGLpY7K45mAvn87vtp8he7yWkWxnTfXLamP6654aXRYgMbL8qb722cvkaDIqFYYyM34X2yip6Z9Z003Vfa2L0c",
        "publishableKey" => "pk_test_51N3njIJErzrMoGLppG8km80C7hlLqVcwSVvZAxUGt3bY2QwqrBQoGYmsERoM8eGOfPNPSidwhHRq5gT242aVHrBB00Y8sVsCls"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>
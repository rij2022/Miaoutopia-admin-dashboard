<?php
include 'C:\xampp\htdocs\Miaoutopia\Controller\productC.php';
$productC = new ProductC();
$productC->deleteProduct($_GET["id"]);
header('Location:product-list.php');
?>
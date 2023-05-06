<?php
include 'C:\xampp\htdocs\Miaoutopia\Controller\ordersC.php';
$ordersC = new OrdersC();
$ordersC->deleteorders($_GET["id_order"]);
header('Location:orders.php');
?>
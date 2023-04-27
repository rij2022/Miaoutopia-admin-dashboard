<?php 
include "C:/xampp/htdocs/Miaoutopia/Controller/ordersC.php";
include_once "C:/xampp/htdocs/Miaoutopia/Model/orders.php";

echo $_POST['status']; 
$quantite = $_POST['quantite']; //

$status = $_POST['status']; //
$total = $_POST['total'];
$idp = $_POST['idp'];//
$orders2 = new Orders(null,null,null,null,null,null);
$ordersC2 = new ordersC();


$orders2->settotal($total); 
$orders2->setproduct_id($idp);
$orders2->setquantite($quantite); 



  $orders2->setstatus($status);

 

//$orders2->setid_orders($id);
var_dump($orders2);

$ordersC2->addorders($orders2);
header('Location:orders.php');

?>
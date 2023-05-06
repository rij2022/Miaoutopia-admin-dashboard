<?php 
include "C:/xampp/htdocs/Miaoutopia/Controller/ordersC.php";
include_once "C:/xampp/htdocs/Miaoutopia/Model/orders.php";

echo $_POST['price']; 
$quantite = $_POST['quantite']; //
$date = $_POST['date-demande'];
var_dump($date);
$date1=strtotime($date);
$status = $_POST['status']; //

$total = $_POST['price'];

$price=intval($_POST['price']);
$idp = $_POST['idp'];//
$orders2 = new Orders(null,null,null,null,null,null);
$ordersC2 = new ordersC();

$total=$price*$quantite;
$orders2->settotal($total); 
$orders2->setproduct_id($idp);
$orders2->setquantite($quantite); 
$d=date("Y-m-d",$date1);
//var_dump($d);
$orders2->setorder_date($d);


  $orders2->setstatus($status);

 



$ordersC2->addorders($orders2);
header('Location:orders.php');

?>
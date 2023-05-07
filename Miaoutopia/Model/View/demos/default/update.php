<?php

include '../../../Controller/productC.php';


 {
 //echo $_FILES['media_product']['tmp_name']; 
 // echo $_POST['id']; 
	$name = $_POST['name']; //
    $id=$_POST['id'];
	$stock = $_POST['stock']; //
	$price = $_POST['price']; //
    $description = $_POST['description'];
 

 
    
    //$date_demande = date('m/d/Y h:i:s a', time());
}

include_once 'C:\xampp\htdocs\Miaoutopia\Model\product.php';
$product = new product(null,null,null,null,null,null,null);
$productC = new ProductC();


$product->setprice($price); 
$product->setname($name); 
$product->setdescription($description); 
//$product->setFile($file) ;

$product->setstock($stock) ;


$product->setid($id);
var_dump($product);

$productC->updateProduct($product,$product->getid());
header('Location:product-list.php');
?>
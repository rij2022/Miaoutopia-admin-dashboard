<?php

include '../../../Controller/productC.php';

$target_dir = 'uploads/';
define('STORAGE_PATH',__DIR__,'uploads/'); 


$target_file = $target_dir . basename($_FILES["media_product"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//if (isset($_POST['name'])  && isset($_POST['stock']) && isset($_POST['media_product']) && isset($_POST['price']))  // CAUSING ERROR
 

  echo $_POST['date_demande']; 
	$name = $_POST['name']; //
  $description = $_POST['description'];
	$stock = $_POST['stock']; //
	$price = $_POST['price'];
   $date = $_POST['date_demande'];
   $date1=strtotime($date);
   var_dump($date1);
   $d=date("Y-m-d",$date1);
  $allowTypes = array('jpg','png','jpeg','gif','pdf');


    $check = getimagesize($_FILES["media_product"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  move_uploaded_file($_FILES["media_product"]["tmp_name"],
  STORAGE_PATH . '/' . $_FILES["media_product"]["name"]);

    $file = $_FILES['media_product'];
    $file_name = $_FILES["media_product"]["name"] ;
    
    


include_once 'C:\xampp\htdocs\Miaoutopia\Model\product.php';
$product = new product(null,null,null,null,null,null,null);
$productC = new ProductC();


$product->setprice($price); 
$product->setname($name); 
$product->setdescription($description);

$product->setimg($file_name) ;
if($stock===0){
$product->setstock("out of stock") ;}
else{
  $product->setstock($stock);
}
 var_dump($d);
$product->setdate($d);
$product->setid($id);
var_dump($product);

$productC->addProduct($product);
header('Location:product-list.php');




?>
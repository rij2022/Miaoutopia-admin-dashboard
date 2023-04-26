<?php

include '../../../Controller/productC.php';

$target_dir = 'uploads/';
define('STORAGE_PATH',__DIR__,'uploads/'); 


$target_file = $target_dir . basename($_FILES["media_product"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//if (isset($_POST['name'])  && isset($_POST['stock']) && isset($_POST['media_product']) && isset($_POST['price']))  // CAUSING ERROR
 {
 echo $_FILES['media_product']['tmp_name']; 
  echo $_POST['stock']; 
	$name = $_POST['name']; //
  $description = $_POST['description'];
	$stock = $_POST['stock']; //
	$price = $_POST['price']; //

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
    
    $date_demande = date('m/d/Y h:i:s a', time());
}

include_once 'C:\xampp\htdocs\Miaoutopia\Model\product.php';
$product = new product(null,null,null,null,null,null,null);
$productC = new ProductC();


$product->setprice($price); 
$product->setname($name); 
$product->setdescription($description);

$product->setimg($file_name) ;
if($stock===0){
$product->setstock("out of stock") ;}else{
  $product->setstock($stock);
}
 

$product->setid($id);
var_dump($product);

$productC->addProduct($product);
header('Location:product-list.php');



//

// create Product
//$product= null;

// create an instance of the controller
/*
if ( isset($_POST['id'])&&
    isset($_POST["img"]) &&
    isset($_POST["name"]) &&
    isset($_POST["price"]) &&
    isset($_POST["stock"]) &&
    isset($_POST["date"])
) {
    if (!empty($_POST['id'])&&
        !empty($_POST['img']) &&
        !empty($_POST["name"]) &&
        !empty($_POST["price"]) &&
        !empty($_POST["stock"]) &&
        !empty($_POST["date"])
    ) {
        $product= new Product(
            $_POST['id'],
            $_POST['name'],
            $_POST['img'],
            $_POST['price'],
            $_POST['stock'],
            new DateTime($_POST['date'])
        );
        var_dump($product) ;
        $productC->addProduct($product);
    } else
        $error = "Missing information";
}

*/
?>
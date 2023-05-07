<?php
    include("./config.php");
    include("C:/xampp/htdocs/miaoutopia-front/controller/ordersC.php");
    $ProductIds =  json_decode($_POST['idTable']);
    $ProductQuantities = json_decode($_POST['quantityTable']);

    $ordersC = new OrdersC() ; 

    $ordersC->addorders($ProductIds,$ProductQuantities,10) ;

    

    $token = $_POST["stripeToken"];
    $contact_name = "name";
    $token_card_type = $_POST["stripeTokenType"];
    $phone           = "phone";
    $email           = "stripeEmail";

    $address         = "address";
    $amount          = $_POST['final']; 
    $desc            = $_POST["name"];
    $em=$_POST["stripeEmail"];
    $charge = \Stripe\Charge::create([
      "amount" => str_replace(",","",$amount) * 100,
      "currency" => 'usd',
      "description"=>$desc,
      "source"=> $token,
    ]);
 
    if($charge){
      header("Location:successp.php?amount=$amount&email=$em");
    }
?>
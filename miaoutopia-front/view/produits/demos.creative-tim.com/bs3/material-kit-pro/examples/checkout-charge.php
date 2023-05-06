<?php
    include("./config.php");

    $token = $_POST["stripeToken"];
    $contact_name = "name";
    $token_card_type = $_POST["stripeTokenType"];
    $phone           = "phone";
    $email           = "stripeEmail";
    $address         = "address";
    $amount          = $_POST['finalPrice']; 
    $desc            = $_POST["name"];
    $charge = \Stripe\Charge::create([
      "amount" => str_replace(",","",$amount) * 100,
      "currency" => 'usd',
      "description"=>$desc,
      "source"=> $token,
    ]);

    if($charge){
      header("Location:successp.php?amount=$amount");
    }
?>
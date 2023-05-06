<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap");
        .success-container {
            width:50%;
            position:absolute;
            top:30%;
            left:50%;
            transform:translate(-50%,-50%);
            color:#bdc3c7;
            font-weight:bold;
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
      <div class="success-container">
       
            <h3>Your Transaction has been Successfully Completed</h3>
            <div><script
                src="" class="stripe-button"
                data-key="pk_test_51N3njIJErzrMoGLppG8km80C7hlLqVcwSVvZAxUGt3bY2QwqrBQoGYmsERoM8eGOfPNPSidwhHRq5gT242aVHrBB00Y8sVsCls"
                data-amount=<?php echo str_replace(",","",$_GET["price"]) * 100?>
                data-name="<?php echo $_GET["item_name"]?>"
                data-description="<?php echo $_GET["item_name"]?>"
                data-image="<?php echo $_GET["image"]?>"
                data-currency="inr"
                data-locale="auto">
                </script></div>
      </div>  
</body>
</html>
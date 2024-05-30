<?php

$service = new PHPSupabase\Service(
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
    "https://pksupiiilluhypruutka.supabase.co" 
  );
  
$auth = $service->createAuth();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = (isset($_POST["email"]) ? $_POST["email"] : null);
   

    try {
        $auth->recoverPassword($email);
        echo 'Email enviado a: ' . $email;
      } catch (Exception $e) {
        echo $auth->getError();
      }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="">
  <title>ForgotPassword</title>
  <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet">
  <link href="<?php echo $ruta?>/assets/css/forgotpassword.css" rel="stylesheet">
</head>

<body>
<main class="form">
  <div class="form__container">
    <a href="<?php echo $ruta?>index.php"><img src="./assets/img/fywiseaiwhitecolor.svg" alt=""></a>
    <form id="fpasswordForm" method="post">
    <h1 class="">Recover Password</h1>
    <p>Enter your email address and we will send you an email with instructions to reset your password.</p>
      <div class="form__floating">
        <label for="emailRP">Email</label>
        <input type="email" id="emailRP" name="email" placeholder="name@host.com">
      </div>
      <button class="" type="submit">Enviar correo electrónico</button>
    </form>
  </div>
</main>
</body>

</html>

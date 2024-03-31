<?php

$service = new PHPSupabase\Service(
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
    "https://pksupiiilluhypruutka.supabase.co" 
  );
  
$auth = $service->createAuth();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = (isset($_POST["email"]) ? $_POST["email"] : null);
   

    try {
        $auth->recoverPassword("email");
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

</body>
<main class="form">
  <div class="form__container">
    <a href="<?php echo $ruta?>index.php"><img src="./assets/img/fywiseaiwhitecolor.svg" width="260px" height="53px" alt=""></a>
    <form id="" method="post">
    <h1 class="">Restablecer contraseña</h1>
    <p>Introduzca su dirección de correo electrónico y le enviaremos un correo electrónico con instrucciones para restablecer su contraseña.</p>
      <div class="form__floating">
        <label for="floatingInput">Email</label>
        <input type="email" name="email" placeholder="name@host.com">
      </div>
      <button class="" type="submit">Enviar correo electrónico</button>
    </form>
  </div>
</main>
</body>

</html>

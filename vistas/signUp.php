<?php

$service = new PHPSupabase\Service(
  "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
  "https://pksupiiilluhypruutka.supabase.co"
);

$auth = $service->createAuth();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email = (isset($_POST["email"]) ? $_POST["email"] : null);
  $password = (isset($_POST["password"]) ? $_POST["password"] : null);

  try {
    $auth->createUserWithEmailAndPassword($email, $password);
    $data = $auth->data(); // get the returned data generated by request
    echo 'Usuario creado! Se ha enviado un correo de confirmación a: ' . $data->email;
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
  <meta http-equiv="Cache-control" content="no-cache">
  <title>Sign Up</title>
  <link href="<?php echo $ruta ?>/assets/css/globalstyles.css" rel="stylesheet">
  <link href="<?php echo $ruta ?>/assets/css/signup.css" rel="stylesheet">
  <link rel="icon" type="image/ico" href="<?php echo $ruta ?>assets/img/favicon.ico">
</head>

<body>
<main class="form">
  <div class="form__container">
    <a href="<?php echo $ruta?>index.php"><img src="./assets/img/fywiseaiwhitecolor.svg" alt=""></a>
    <form id="FormularioSignUp" method="post" autocomplete="off">
      <h1 class="">Sign Up</h1>
      <div class="form__floating">
        <label for="emailSignUp">Email</label>
        <input id="emailSignUp" type="email" name="email" placeholder="name@host.com">
      </div>
      <div class="form__floating">
        <label for="passwordSignUp">Password</label>
        <input id="passwordSignUp" type="password" name="password" placeholder="Password">
      </div>
      <button type="submit">Sign Up</button>
      <div class="form__signup">
        <p class="">Already have an account?</p>
        <a href="<?php echo $ruta?>index.php?controlador=signin">Sign in</a>
      </div>
    </form>
  </div>
</main>
</body>
</html>
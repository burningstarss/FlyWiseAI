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
    $auth->signInWithEmailAndPassword($email, $password);
    $data = $auth->data(); // get the returned data generated by request
    echo 'Log In correcto!';
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
  <title>Sign In</title>
  <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet">
  <link href="<?php echo $ruta?>/assets/css/signIn.css" rel="stylesheet">
</head>

</body>
<main class="container">
  <div class="">
    <img src="./assets/img/fywiseaiwhitecolor.svg" width="260px" height="53px" alt="">
    <form id="formularioInicioSesion" method="post">
      <h1 class="">Log In</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="nameSignIn" placeholder="name@host.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="passwordSignIn" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <a href="">Forgot your password?</a>
      <button class="" type="submit">Sign In</button>
      <div class="">
        <p class="">Need an account?</p><a href="./vistas/signUp.php">Sign up</a>
      </div>
    </form>
  </div>
</main>
</body>

</html>

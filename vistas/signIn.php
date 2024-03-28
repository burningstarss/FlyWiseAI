<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sign In</title>

  <link href="<?php echo $ruta ?>/assets/css/globalstyles.css" rel="stylesheet">
  <link href="<?php echo $ruta ?>/assets/css/signin.css" rel="stylesheet">
</head>
</body>
<main class="container">
  <div class="">
    <img src="./assets/img/fywiseaiwhitecolor.svg" width="260px" height="53px" alt="">
    <form id="formularioInicioSesion">
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
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
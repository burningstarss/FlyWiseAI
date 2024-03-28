<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Sign Up</title>
    <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet">

  </head>

<main class="container">
  <div class="">
    <img src="./assets/img/fywiseaiwhitecolor.svg" width="260px" height="53px" alt="">
    <form id="formulario">
      <h1 class="">Sign Up</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="name" placeholder="name@host.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="botonRegistro" type="submit">Sign Up</button>
    </form>
  </div>
</main>

</html>

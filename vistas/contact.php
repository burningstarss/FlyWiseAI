<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Contact page</title>

  <!-- Custom styles for this template -->
  <link href="<?php echo $ruta?>/assets/css/contact.css" rel="stylesheet">
  <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet">
</head>

<body>
  <main class="contact__page">
    <section>
      <form class="contact__box" action="procesarFormularioContacto.php" method="POST">
        <h1>Contact us</h1>
        <div class="contact__message">
          <label for="message">Message</label>
          <textarea class="contact__textarea" id="message" name="message" placeholder="What can we help you with?"></textarea>
        </div>
        <div class="contact__buttoncontainer">
          <a class="contact__button" href="index.php">Go back</a>
          <button class="contact__button" type="submit">Send</button>
        </div>
      </form>
    </section>
  </main>
</body>
</html>
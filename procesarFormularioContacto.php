<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Contact page</title>

  <!-- Custom styles for this template -->
  <link href="./assets/css/contact.css" rel="stylesheet">
  <!-- ESTO SE HA DE CAMBIAR -->
  <link rel="stylesheet" href="./assets/css/globalstyles.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    $(document).ready(function() { 
      setTimeout(function() {
        $('.popup').fadeOut(); 
      }, 2000); 
    });
  </script>
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
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["message"])) {
            ?><div class="popup"><?php echo "Por favor, escribe un mensaje.";?></div><?php
          } else {
              $message = $_POST["message"];      
              ?><div class="popup"><?php echo "¡El formulario se envió correctamente! ($message)";?></div><?php
          }
          } else {
            ?><div class="popup"><?php echo "Ha ocurrido un error al procesar el formulario.";?></div><?php
          }
        ?>
      </form>
    </section>
  </main>
</body>
</html>
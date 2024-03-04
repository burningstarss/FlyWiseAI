<!--
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Contact page</title>


  <link href="./assets/css/contact.css" rel="stylesheet">
</head>

<body>
  <main class="contact__page">
    <section>
      <form class="contact__box" action="procesarFormularioContacto.php" method="post">
        <h3>Contact us</h3>
        <div class="contact__message">
          <label for="message">Message</label>
          <textarea class="contact__textarea" id="message" name="message" placeholder="What can we help you with?"></textarea>
        </div>

-->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["message"])) {
           echo "Por favor, escriba un mensaje.";
        } else {
            $message = $_POST["message"];      
            echo "¡El formulario se envió correctamente!";
        }
    } else {
        echo "Ha ocurrido un error al procesar el formulario.";
    }
    ?>
<!--
    <div class="contact__buttoncontainer">
            <a class="contact__button" href="../FlyWiseAi/vistas/home.php" >Go back</a>
            <button class="contact__button" type="submit">Send</button>
    </div>
    </form>
   </section>
  </main>
 </body>
</html>


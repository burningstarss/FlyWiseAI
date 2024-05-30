<?php
if(!isset($_SESSION['usuario'])){

    header("Location:index.php?controlador=signIn");
    exit;
    
  }
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_SESSION['usuario'])){
        unset ($_SESSION['usuario']);
        header("Location:index.php");
        exit;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo $ruta ?>/assets/css/globalstyles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $ruta ?>/assets/css/home.css" rel="stylesheet">
    <script src="<?php echo $ruta ?>/assets/js/home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
    <link rel="icon" type="image/ico" href="<?php echo $ruta ?>assets/img/favicon.ico">
</head>
<body>
    <div class="coming" id="coming" style="display: none;">
        <div>
            <p>Coming soon...</p>
            <button id="backButton" onclick="comingTab()">Back</button>
        </div>
    </div>
    <div class="coming" id="account" style="display: none;">
        <div class="account__box">
        <form action="" method="POST">
            <button class="signOut" id="logOffButton">Sign Out</button>
        </form>
        <button id="backButton" onclick="accountTab()">Back</button>
        </div>   
    </div>
    <div class="home">
        <div class="home__content" id="content">
            <a class="home__content--img" href="<?php echo $ruta ?>index.php">
                <img src="./assets/img/fywiseaiwhitecolor.svg" alt="FlyWiseAI Logo">
            </a>
            <div class="home__chathistory">
                <h4>Today</h4>
                <div><a>Drone Normative</a></div>
                <div><a>Drone Normative</a></div>
                <h4>Yesterday</h4>
                <div><a>Drone Normative</a></div>
                <h4>Last 30 days</h4>
                <div><a>Drone Normative</a></div>
                <div><a>Drone Normative</a></div>
                <div><a>Drone Normative</a></div>
                <div><a>Drone Normative</a></div>
            </div>
            <div class="home__options">
                <button class="home__options--container" id="lessonsButton" href="" onclick="comingTab()"><img src="./assets/img/book.png"
                        alt="Lessons icon"><span>Lessons</span></button>
                <button class="home__options--container" id="upgradeButton" href="" onclick="window.location.href='<?php echo $ruta?>index.php?controlador=contact';"><img src="./assets/img/wand.png"
                        alt="Upgrade Icon"><span>Upgrade</span></button>
                <button  class="home__options--container" id="accountButton" href="" onclick="accountTab()"><img
                        src="./assets/img/account.png" alt="Account Icon"><span>Account</span></button>
            </div>
        </div>
        <div class="slideToggle" id="slideToggle" onclick="slide()"><img src="./assets/img/arrow.svg" alt="SlideToggle Arrow"></div>
        <div class="home__chatbot">
            <div id="chat-container">
                <div id="chat-conversation"></div>
            </div>
            <div class="chat-input">
                <input type="text" id="user-input"  onkeypress="if(event.keyCode == 13){sendMessage()}" placeholder="Type your message...">
                <button id="send-button" onclick="sendMessage('<?php echo $_SESSION['usuario']?>')"><img src="./assets/img/send.png" alt=""></button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
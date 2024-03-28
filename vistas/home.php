<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $ruta?>/assets/css/home.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script type="module" src="<?php echo $ruta?>/assets/js/home.js"></script>
</head>

<body>
    <div class="home">
        <div class="home__content" id="content">
            <a class="home__content--img" href="">
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
                <a class="home__options--container" href=""><img src="./assets/img/Ellipse.png" alt="Lessons icon"><span>Lessons</span></a>
                <a class="home__options--container" href=""><img src="./assets/img/Ellipse.png" alt="Upgrade Icon"><span>Upgrade</span></a>
                <a class="home__options--container" href=""><img src="./assets/img/Ellipse.png" alt="Account Icon"><span>Account</span></a>
            </div>
        </div>
        <div class="slideToggle" id="slideToggle"><img src="./assets/img/arrow.svg" alt="SlideToggle Arrow"></div>
        <div class="home__chatbot">
        </div>
    </div>
</body>
</html>
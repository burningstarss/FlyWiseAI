<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo $ruta?>/assets/css/globalstyles.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $ruta?>/assets/css/home.css" rel="stylesheet">
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

    <div class="home__chatbot">
        <div id="chat-container"></div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button id="send-button">Send</button>
    </div>
    
    <script>
    async function sendMessage() {
        const userInput = document.getElementById('user-input').value;
        document.getElementById('user-input').value = '';
        appendMessage('user', userInput);
        
        const response = await fetch('https://api-inference.huggingface.co/models/TheBloke/Mistral-7B-Instruct-v0.1-GGUF', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer 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' // Reemplaza YOUR_API_TOKEN con tu token de API
            },
            body: JSON.stringify({
                inputs: userInput
            })
        });
        const data = await response.json();
        appendMessage('bot', data.generated_text);
    }

    function appendMessage(sender, message) {
        const chatContainer = document.getElementById('chat-container');
        const messageElement = document.createElement('div');
        messageElement.className = sender === 'bot' ? 'bot-message' : 'user-message';
        messageElement.innerText = message;
        chatContainer.appendChild(messageElement);
    }

    document.getElementById('send-button').addEventListener('click', sendMessage);

    document.getElementById('user-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
    </script>
</body>
</html>
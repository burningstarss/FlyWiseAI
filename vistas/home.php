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
    <script type="module" src="<?php echo $ruta ?>/assets/js/home.js"></script>
    <link rel="icon" type="image/ico" href="<?php echo $ruta ?>assets/img/favicon.ico">
</head>
<body>
    <div class="account" id="account" style="display: none;">
        <div class="account__box">
        <form action="" method="POST">
            <button class="signOut" id="logOffButton">Sign Out</button>
        </form>
        <button id="backButton" onclick="closeTab()">Back</button>
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
                <button class="home__options--container" href=""><img src="./assets/img/book.png"
                        alt="Lessons icon"><span>Lessons</span></button>
                <button class="home__options--container" href=""><img src="./assets/img/wand.png"
                        alt="Upgrade Icon"><span>Upgrade</span></button>
                <button  class="home__options--container" id="accountLink" href=""><img
                        src="./assets/img/account.png" alt="Account Icon"><span>Account</span></button>
            </div>
        </div>
        <div class="slideToggle" id="slideToggle"><img src="./assets/img/arrow.svg" alt="SlideToggle Arrow"></div>
        <div class="home__chatbot">
            <div id="chat-container">
                <div id="chat-conversation"></div>
            </div>
            <div class="chat-input">
                <input type="text" id="user-input" placeholder="Type your message...">
                <button id="send-button"><img src="./assets/img/send.png" alt=""></button>
            </div>
        </div>
    </div>
    </div>


    <script>
        async function sendMessage() {
            const system_prompt = "Imagina que eres un  experto en normativa y legislación de drones y deseas asegurarte de que el usuario cumpla con todas las regulaciones y normativas vigentes para el manejo y vuelo de drones. Proporcionarás respuestas claras y precisas sobre las regulaciones actuales, zonas restringidas, y te dará consejos avanzados para volar de manera segura y legal. Si el usuario pregunta o habla algo fuera de este contexto, pide al usuario que por favor, se ciña al contexto. Por favor, no repitas el contexto que te he dado, el usuario no necesita saber esta información. Solo puedes contestar a las preguntas en Español.";
            const userInput = document.getElementById('user-input').value;
            document.getElementById('user-input').value = '';
            if (userInput != "") {
                appendMessage('user', userInput);

                try {
                    async function query(data) {
                        const response = await fetch(
                            "https://api-inference.huggingface.co/models/mistralai/Mixtral-8x7B-Instruct-v0.1",
                            {
                                headers: {
                                    Authorization: "Bearer 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",
                                    'Content-Type': 'application/json'
                                },
                                method: "POST",
                                body: JSON.stringify(data),
                            }
                        );
                        const answer = await response.json();
                        appendMessage('bot', answer[0].generated_text);
                    }

                    query({
                        "inputs": "<s>[INST] " + system_prompt + "/n" + userInput + " [/INST]",
                        "parameters": {
                            "temperature": 0.8,
                            "min_length": 32,
                            "max_length": 10000,
                            "top_p": 0.9,
                            "max_new_tokens": 512,
                            "return_full_text": false
                        }
                    }).then((response) => {
                        console.log(JSON.stringify(response));
                    });

                } catch (error) {
                    console.error('Error:', error);
                }
            }
        }

        function appendMessage(sender, message) {
            const chatContainer = document.getElementById('chat-conversation');
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

        function closeTab(){
            if(document.getElementById("account").style.display="block"){
                document.getElementById("account").style.display="none";
            }
        };
        function openTab(){
            if(document.getElementById("account").style.display="none"){
                document.getElementById("account").style.display="block";
            }
        };

        document.getElementById("accountLink").setAttribute("onclick", "openTab()");
        
    </script>
</body>

</html>
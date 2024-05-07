
function accountTab(){
    if(document.getElementById("account").style.display=="none"){
        document.getElementById("account").style.display="block";
    }else {
        document.getElementById("account").style.display="none"
    }
};
function comingTab(){
    if(document.getElementById("coming").style.display=="none"){
        document.getElementById("coming").style.display="block";
    }else {
        document.getElementById("coming").style.display="none"
    }
};

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

var rotated = false;

function slide() {
    var $content = $(".home #content");
    var $slideToggle = $(".slideToggle");

    if ($content.css('left') === '0px') {
        $content.animate({ left: '-100%', width: 0 }, 500); // Desplazar hacia la izquierda para ocultar
        $slideToggle.animate({ left: -30 }, 500); // Mover el botón hacia la izquierda
    } else {
        $content.animate({ left: 0, width: '100%' }, 500); // Desplazar hacia la derecha para mostrar
        $slideToggle.animate({ left: 0 }, 300); // Mover el botón hacia la derecha según el ancho del contenido
    }
    // Rotación del slideToggle
    var rotationDeg = rotated ? 0 : 90;
    $("#slideToggle img").animate({ rotate: rotationDeg + 'deg' }, {
        duration: 500,
        step: function (now, fx) {
            $(this).css('transform', 'rotate(' + now + 'deg)');
        }
    });

    // Actualizar el estado de rotación
    rotated = !rotated;
};
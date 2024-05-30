<?php
$service = new PHPSupabase\Service(
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
    "https://pksupiiilluhypruutka.supabase.co"
);

$db = $service->initializeDatabase('Conversacion', 'id');

$newConversacion = [
    'mensaje'       => $_POST["message"],
    'timestamp'  => date("Y-m-d H:i:s"), 
    'email'       =>  $_SESSION['usuario'],
    'sender' => $_POST["sender"]
];

try{
    $data = $db->insert($newConversacion);
    print_r($data); //returns an array with the new register data

    
    /*
        Array
        (
            [0] => stdClass Object
                (
                    [id] => 1
                    [categoryname] => Video Games
                )

        )
    */
}
catch(Exception $e){
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="GET">

    <textarea name="text" id="textAreaConv"></textarea>
    <button>send</button>

    </form>
</body>
</html>
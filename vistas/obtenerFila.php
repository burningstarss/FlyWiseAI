<?php
    $service = new PHPSupabase\Service(
    "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InBrc3VwaWlpbGx1aHlwcnV1dGthIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MTE2Mjg2MTUsImV4cCI6MjAyNzIwNDYxNX0.dN8MDnQQKytz3ZIf3jnzq4AbOTqNBEpgeuGywKtd7uQ",
    "https://pksupiiilluhypruutka.supabase.co"
    );
   
   $db = $service->initializeDatabase('Conversacion', 'id');

    class Convo {

        public function __construct(array $arguments = array())
        {
            if (!empty($arguments)){
                foreach($arguments as $property => $argument){
                    $this->{$property} = $argument;
                }
            }
        }
    }

    try{
        $listaConvos = $db->findBy('', '')->getResult();
        foreach ($listaConvos as $fila){

            $tmp = [    
                        "id" => "$fila->id",
                        "mensaje" => "$fila->mensaje", 
                        "timestamp" => "$fila->timestamp", 
                        "email " => "$fila->email", 
                        "sender" => "$fila->sender"
                    ];

            $convo = New Convo($tmp); 
            $string = JSON.stringify($convo); 
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }


?>
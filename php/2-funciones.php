<?php 

function saludo() { # Funcion sin Parámetros ni Retorno 
    echo "Hola <br>"; 
} 

function mensaje($mensaje) { # Funcion con Parámetros 
    echo "Hola, este es el mensaje: '$mensaje'. <br>"; 
} 

function frase() { # Funcion con Retorno 
    $frase = "Tu puedes C:"; 
    return $frase; 
} 

function despedida($despedida) { # Funcion con Parámetros y con Retorno 
    return $despedida;  
} 

# Uso de las Funciones 

saludo(); 
mensaje("Ya casi aprendes php!!!"); 
echo "La frase es: '",frase(),"'. <br>"; 
echo 'Esta es la despedida "',despedida("Chao, Chao!!!"),'". <br>'; 


?> 
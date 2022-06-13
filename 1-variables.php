<?php 

# Tipos de Variables 

$id = 0; # Variable Número 
$nombre = "Dan"; # Variable Texto 
$actividad = true; # Variable Boleana 
$datosContacto = array("3147001562","DanInaganMaca@Gmail.Com"); # Variable Array 
$datosGustos = array("musica"=>"Rock","comidaRapida"=>"Pizza","color"=>"Verde"); # Variable Array con Propiedades  
$frutas = (object)["fruta1"=>"manzana","fruta2"=>"pera","fruta3"=>"lulo"]; # Variable Objeto 

# Mostrar Variables 

print "<h1>Prueba de php | Restaurante </h1>"; 
echo "Este es el identificador: '",$id,"' del cliente '",$nombre,"'. <br> Su estado de actividad es: '",$actividad,"' <br>"; 
echo "<br> Los datos de contacto son: Numero de Celular '$datosContacto[0]', Correo Electrónico '$datosContacto[1]'. <br>"; 
echo "Los datos de gustos son: Tipo de Musica Favorita '$datosGustos[musica]', Comida Rápida Favorita '$datosGustos[comidaRapida]', Color Favorito '$datosGustos[color]'. <br>"; 
echo '"Otra forma": Los datos de gustos son: Tipo de Musica Favorita ',"'",$datosGustos["musica"],"', Comida Rápida Favorita '",$datosGustos["comidaRapida"],"', Color Favorito '",$datosGustos["color"],"'. <br><br>"; 
echo "La fruta seleccionada fue: $frutas->fruta3"; 

#### Otros 

# Función var_dump 

print "<h2> Función | var_dump </h2>"; 
echo "Este es el identificador: '",$id," {",var_dump($id),"}' del cliente '",$nombre," {",var_dump($nombre),"}'. <br> Su estado de actividad es: '",$actividad," {",var_dump($actividad),"}' <br>"; 
echo "<br> Los datos de contacto son: Numero de Celular '$datosContacto[0] {",var_dump($datosContacto[0]),"}', Correo Electrónico '$datosContacto[1] {",var_dump($datosContacto[1]),"}'. <br>"; 
echo "Los datos de gustos son: Tipo de Musica Favorita '$datosGustos[musica] {",var_dump($datosGustos["musica"]),"}', Comida Rápida Favorita '$datosGustos[comidaRapida] {",var_dump($datosGustos["comidaRapida"]),"}', Color Favorito '$datosGustos[color] {",var_dump($datosGustos["color"]),"}'. <br><br>"; 
echo "La fruta seleccionada fue: $frutas->fruta3 {",var_dump($frutas->fruta3),'} ';

?> 


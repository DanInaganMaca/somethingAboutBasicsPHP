
<?php 

# • Index 
# Archivo que se ejecuta automaticamente al ingresar al sitio web. En el se muestra la salida de las vistas al usuario y se envía las distintas acciones que el usuario envía al controlador. 

require_once "controllers/controllers.php"; # Encontrar las clases creadas en la capa de controladores (Una sola vez). 

$mvc_object = new MVC_Controller(); # Crear objeto instaciado de la clase 

$mvc_object->mostrarPlantilla(); # Usar método del objeto para mostrar una pagina 

?> 


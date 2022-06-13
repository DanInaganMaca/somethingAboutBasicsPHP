
<?php 

# Estrategia MVC (Modelo-Vista-Controlador) 
#   Tipo de diseño que separa en capas el desarrollo de la aplicación. 
#   - Modelo: Capa encargada de la lógica de la aplicación y conexión con la base de datos. 
#   - Controlador: Capa encargada de gestionar las peticiones del usuario, procesarlas invocando al modelo y mostrarlas al usuario a través de las vistas (Validación del lado del servidor). 
#   - Vistas: Capa responsable de mostrar al usuario el resultado que obtienen del modelo a través del controlador. 
#   Usuario se encuentra del lado del cliente, hace una petición, el primer filtro es la vista (serie de validaciones, validaciones del lado del cliente: información incorrecta?, inormación inválida?, ataque hacia la aplicación?), el controlador hace la validación del lado del servidor (información coherente?, validación extraña?, información invalida?), modelo decide que hacer con la información (generar interacción?, ir a la base de datos?, revisar datos?). Modelo genera respuesta y la envía al controlador, controlador procesa la respuesta para mostrarla a través de la vista

?> 


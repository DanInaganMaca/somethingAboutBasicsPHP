
<?php 

### POO: Programación Orientada a Objetos 

# Código Imperativo o Espagueti 

$automovil1 = (object)["marca"=>"Toyota", "modelo"=>"Corolla"]; 
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent Visiom"]; 

function mostrar($automovil) { 
    echo "<p> Hola! soy un $automovil->marca, modelo $automovil->modelo</p>"; 
} 

mostrar($automovil1); 
mostrar($automovil2); 

?> 


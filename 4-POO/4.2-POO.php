
<?php 

## POO - Programación Orientada a Objetos | Abstracción, Encapsulación, Ocultamiento 

# • CLASE: 
#   Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad; abstraidos del mundo real. 

class Automovil { # Creación de una Clase 
    
    # • Propiedades: 
    #   Son las caracteristicas del modelo.  

    public $marca; 
    public $modelo; 

    # • Métodos: 
    #   Son las acciones que el modelo puede hacer. 
    
    function mostrar() { 
        echo "<p> Hola! soy un $this->marca, modelo $this->modelo. </p>"; 
    } 
    
}

# • OBJETO  
#   Un objeto de una Clase es la generación unitaria a partir del modelo construido en dicha Clase. 
#   Es decir si la Clase son las partes y funciones que debe tener y hacer un vehículo, Un objeto es el vehiculo construido a partir de eso, el cual debe tener esas mismas partes y funciones. 

$automovil1 = new Automovil(); # Creación de un Objeto 
    $automovil1->marca = "Toyota"; # Asignación de valor a propiedad marca del objeto 
    $automovil1->modelo = "Corolla"; # Asignación de valor a propiedad modelo marca del objeto 

$automovil1->mostrar(); # Llamando método mostrar del objeto 

$automovil2 = new Automovil(); # Creación de un Objeto 
    $automovil2->marca = "Lamborghini"; # Asignación de valor a propiedad marca marca del objeto 
    $automovil2->modelo = "Murcielago"; # Asignación de valor a propiedad modelo marca del objeto 

$automovil2->mostrar(); # Llamando método mostrar del objeto 

?> 


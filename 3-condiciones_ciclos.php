<?php 

## Condiciones 

$a = 5; 
$b = 10; 

if($a>$b) { 
    echo "'a' es mayor que 'b'. <br><br>"; 
} 
else if($a==$b) { 
    echo "'a' es igual a 'b'. <br><br>"; 
} 
else { 
    echo "'a' es menor que 'b'. <br><br>"; 
}


## Switches 

$dia = "sabado"; 

switch($dia) { 
    case 'viernes': 
        echo "Voy a rumbiar. <br><br>"; 
        break; 
    case 'sabado': 
        echo "Voy a estudiar. <br><br>"; 
        break; 
    case 'domingo': 
        echo "Voy a descansar. <br><br>"; 
        break; 
    default: 
        echo "Voy a la universidad. <br><br>"; 
}


## Ciclos 

# Ciclo While 

$n = 0; 

while($n<10) { 
    echo $n; 
    $n++; 
} 

echo "<br><br>"; 

# Ciclo For 

for($m=0; $m<10; $m++) { 
    echo $m,'  '; 
}

echo "<br><br>"; 

# Ciclo Do While  

$i = 9; 

do {
    echo $i; 
    $i--; 
} while($i>=0); 

echo "<br><br>"; 

?> 


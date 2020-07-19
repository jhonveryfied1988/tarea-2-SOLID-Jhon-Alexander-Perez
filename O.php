<?
/*
Open/Closed principle  / Principio abierto/cerrado

Establece que las entidades software (clases, módulos y funciones) deberían estar abiertos para su extensión, pero cerrados para su modificación.

*/

abstract class Coche {  
    // ...
    abstract function precioMedioCoche();
}

class Renault extends Coche {  
   
    public function precioMedioCoche() { 
        return 18000; 
    }
}

class Audi extends Coche {  
   
    public function precioMedioCoche() { return 25000; }
}

class Mercedes extends Coche {  

    public function precioMedioCoche() { return 27000; }
}

function main(){

    $arrayCoches = [
            new Renault(),
            new Audi(),
            new Mercedes()
    ];

    imprimirPrecioMedioCoche($arrayCoches);
}

function imprimirPrecioMedioCoche($coches){  
   
    for ($x = 0; $x < count($coches); $x++ ) {
       echo "<p>El precio de ".get_class($coches[$x])." es ".number_format($coches[$x]->precioMedioCoche())."</p>";
    }
}

main();
?>
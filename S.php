<?
/*
Single responsibility principle o principio de unica responsabilidad

Una clase debe solo tener un motivo para cambiar, por ende solo debe cumplir una tarea.

Consecuencias: Al usar el principio de responsabilidad unica, el sistema permite un mejor manejo y un mayor control a la hora de mejorarlo.
Dado que una clase cumple con solo una funcion.
*/

Class Coche 
{
    public $marca;

    function __construct($marca){
        $this->marca = $marca;
    }

    public function getMarcaCoche() 
    {
        return $this->marca;
    }
}


class CocheDB{  
    public function guardarCocheDB($marca){ 
        $coche = new Coche($marca);
        return "El coche es un: ".$coche->getMarcaCoche();
    }

    public function eliminarCocheDB(){ 
        $coche = new Coche("");
        return "Se elimino el choche: ";
    }
}

echo "<br>";
echo "Inicio: S";
$dbService = new CocheDB();
echo "<br>";
echo $dbService->guardarCocheDB("Renault");
echo "<br>";
echo $dbService->eliminarCocheDB();
?>
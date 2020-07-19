<?
/*
Single responsibility principle o principio de unica responsabilidad

Una clase debe solo tener un motivo para cambiar, por ende solo debe cumplir una tarea.
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
        return "EL coche es un: ".$coche->getMarcaCoche();
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
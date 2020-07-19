<?
/*
Principio de inversión de dependencias

Establece que las dependencias deben estar en las abstracciones, no en las concreciones. Es decir:

    Los módulos de alto nivel no deberían depender de módulos de bajo nivel. Ambos deberían depender de abstracciones.
    Las abstracciones no deberían depender de detalles. Los detalles deberían depender de abstracciones.
*/

interface  Conexion {  
    public function getDatos(); 
    public function setDatos($newName);
}

class DatabaseService implements Conexion {

    private $name = "Arnold";

    public function getDatos() { 
        return $this->name;
    }
    public function setDatos($newName) { 
        $this->name = $newName;
        return "El nuevo nombre es : ".$this->name;
    }
}

class APIService implements Conexion{

    private $name = "Silvestre";

    public function getDatos() { 
        return $this->name;
    }
    public function setDatos($newName) { 
        $this->name = $newName;
        return "El nuevo nombre es : ".$this->name;
    }
}

echo "Inicio: D";
$dbService = new DatabaseService();
echo $dbService->getDatos()." ";
echo $dbService->setDatos("Juan");
?>
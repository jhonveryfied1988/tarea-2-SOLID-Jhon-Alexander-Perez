<?
/*
Principio de segregación de interfaz

Este principio establece que los clientes no deberían verse forzados a depender de interfaces que no usan.

Dicho de otra manera, cuando un cliente depende de una clase que implementa una interfaz cuya funcionalidad este cliente no usa, pero que otros clientes sí usan, este cliente estará siendo afectado por los cambios que fuercen otros clientes en dicha interfaz.
*/

interface  iAve {  
    public function comer();    
}

interface  iAveVoladora {     
    public function volar();    
}

interface  iAveNadadora {     
    public function nadar();    
}


class Loro implements iAve,  iAveVoladora {  
   
    public function comer() { 
       echo "Puedo Comer";
    }
    public function volar() { 
        echo "Puedo Volar";
    }
}

class Pinguino implements iAve,  iAveNadadora {  
   
    public function comer() { 
        echo "Puedo Comer";
     }
     public function nadar() { 
        echo "Puedo Nadar";
     }
}

echo "<br>";
echo "<p>Inicio: I</p>";
echo "<p>".Pinguino::comer()."</p>";
echo "<p>".Pinguino::nadar()."</p>";
?>
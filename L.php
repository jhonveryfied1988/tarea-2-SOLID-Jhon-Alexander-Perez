<?
/*
Principio de substitución de Liskov

Declara que una subclase debe ser sustituible por su superclase, y si al hacer esto, el programa falla, estaremos violando este principio.

Cumpliendo con este principio se confirmará que nuestro programa tiene una jerarquía de clases fácil de entender y un código reutilizable.
*/

abstract class Coche {  
    abstract function precioMedioCoche();
    abstract function numAsientos(); //Se agrega el nuevo metodo a la super clase para que las otras clases la puedan implementar
}

class Renault extends Coche {  
   
    public function precioMedioCoche() { 
        return 18000; 
    }

    public function numAsientos() { //Ya esta clase hija puede heredar de la super clase el metodo numAsientos
        return 5;
    }
}

class Audi extends Coche {  
   
    public function precioMedioCoche() { 
        return 25000; 
    }

    public function numAsientos() { //Ya esta clase hija puede heredar de la super clase el metodo numAsientos
        return 2;
    }
}

class Mercedes extends Coche {  

    public function precioMedioCoche() { 
        return 27000; 
    }

    public function numAsientos() { //Ya esta clase hija puede heredar de la super clase el metodo numAsientos
        return 8;
    }
}



?>
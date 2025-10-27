<?php 
class Cat{
    //Atributos
    private string $name; 
    private string $color = "color not known"; //Valor de inicialización
    private $age; //No es obligatorio declarar el tipo 

    //Cosntructor
    public function __construct($name, $color, $age = -1){
        $this -> name = $name;
        $this -> color = $color;
        $this -> age = $age; 

    }

    //Getters y setters
    public function getName(){
        return $this -> name;
    }

    public function setName($name){
        $this -> name = $name;
        //return $this; 
    }


    //Métodos
    public function miaw(){
        return "miaw";
    }
}



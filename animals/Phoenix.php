<?php

class Phoenix{
    //Atributos
    private string $name; 
    private $age = -1;


    //Constructor
    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }   

    //Getters y Setters
        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }

    //Métodos 
    //Función happyBirthday que sume 1 año al animla y devuelva su edad final.
    //Si tenía age -1, que devuelva false.

    function happyBirthday($age){
        if ($this -> age < 0){
            return false;
        } else {
            return $this -> age + 1; 
        }
    }
    	

}
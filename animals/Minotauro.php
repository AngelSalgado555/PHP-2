<?php

class Minotauro{
    //Los atributos estaran declarados dentro del constructor 
    public function __construct(
        private string $name,
        private int $age = -1
    ){}

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

    public function __tostring(){
        return $this -> name . " tiene " . $this -> age . " años "; 
    }
    
}
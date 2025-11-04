<?php

class Empleade{
    public function __construct(
        private string $name,
        private string $surname,
        private $salary = -1,
        private array $telefonos

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
         * Get the value of surname
         */ 
        public function getSurname()
        {
                return $this->surname;
        }

        /**
         * Set the value of surname
         *
         * @return  self
         */ 
        public function setSurname($surname)
        {
                $this->surname = $surname;

                return $this;
        }

        /**
         * Get the value of salary
         */ 
        public function getSalary()
        {
                return $this->salary;
        }

        /**
         * Set the value of salary
         *
         * @return  self
         */ 
        public function setSalary($salary)
        {
                $this->salary = $salary;

                return $this;
        }

    public function __tostring(){
        $ret = "Nombre: " . $this -> name . " Apellidos: " . $this -> surname . " y su salario es: " . $this -> salary; 

        return $ret;
    } 

    public function getNombreCompleto(): string{
        return $this -> name . " " . $this -> surname;
    }

    public function pagarImpuestos(): float{
        if ($this -> salary == -1){
            return $this -> salary;
        }

        if ($this -> salary >= 0 || $this -> salary <= 12450){
            $porcentaje = 0.19;
            $nuevoSalario = $this -> salary * $porcentaje;
            return $nuevoSalario; 
        } else if ($this -> salary >= 12451 || $this -> salary <= 20199){
            $porcentaje = 0.24;
            $nuevoSalario = $this -> salary * $porcentaje;
            return $nuevoSalario;
        } else if ($this -> salary >= 20200 || $this -> salary <= 35.199){
            $porcentaje = 0.30;
            $nuevoSalario = $this -> salary * $porcentaje;
            return $nuevoSalario;
        }
    }


    public function anadirTelefono(string $telefono): void{
        $this -> telefonos[] = $telefono;
    }

    public function listarTelefonos(): string{
        for ($i=0; $i < count($this -> telefonos); $i++) { 
            echo "". $this -> telefonos[$i] . ", ";
        }
    }

    


}
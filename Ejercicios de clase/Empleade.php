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

        if ($this -> salary <= 12449){
            $nuevoSalary = $this -> salary * 0.19;
            return $nuevoSalary;
        } else if ($this -> salary <= 20199){
            $nuevoSalarySegundo = $this -> salary - 12450;
            $totalSegundo = $nuevoSalarySegundo * 0.24;

            $nuevoSalaryPrimero = $this -> salary - $nuevoSalarySegundo;
            $totalPrimero = $nuevoSalaryPrimero * 0.19;

            return $totalPrimero + $totalSegundo; 
            
        } else if ($this -> salary <= 35.199){
            $nuevoSalary = 12450 * 0.19;
            $nuevoSalary += (20199 - 12450) * 0.24;
            $nuevoSalary += ($this -> salary - 20200) * 0.30;
           
            return $nuevoSalary;
        }

    }


    public function anadirTelefono(string $telefono): void{
        $this -> telefonos[] = $telefono;
    }

    public function listarTelefonos(): string{
        $lista = " ";
        for ($i=0; $i < count($this -> telefonos); $i++) { 
            $lista .= $this -> telefonos[$i] . ", ";
        }

        return $lista;
    }

    public function vaciarTelefonos(): void{
        unset($this -> telefonos);
    }
    
    public function toHtml(): string{
        return "<p>". $this -> name . "</p>";

    }
}
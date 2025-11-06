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

        $salario = $this -> salary;

        if ($salario <= 12449){
            $nuevoSalary = $salario * 0.19;
        } else if ($salario <= 20199){
            $nuevoSalary = 12450 * 0.19;
            $nuevoSalary += ($salario - 12450) * 0.24;

        } else if ($salario <= 35.199){
            $nuevoSalary = 12450 * 0.19;
            $nuevoSalary += (20199 - 12450) * 0.24;
            $nuevoSalary += ($salario - 20200) * 0.30;
        }
        return $nuevoSalary;

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
        $data = "<p>Nombre: ". $this -> name. ", Apellidos: ". $this -> surname. ", Salario: " . $this -> salary . ", Telefonos: <ul></p>";
        for ($i=0; $i < count($this -> telefonos); $i++) { 
            $data .= "<li>". $this -> telefonos[$i]."</li>";
        }
        $data .= "</ul>";
        return $data;
    }
}
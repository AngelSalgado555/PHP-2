<?php

abstract class Sport{
    public function __construct(
        protected string $type,
        protected bool $contact,
        private int $numPlayers

    ){}

    

        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }

        /**
         * Get the value of contact
         */ 
        public function getContact()
        {
                return $this->contact;
        }

        /**
         * Set the value of contact
         *
         * @return  self
         */ 
        public function setContact($contact)
        {
                $this->contact = $contact;

                return $this;
        }

        /**
         * Get the value of numPlayers
         */ 
        public function getNumPlayers()
        {
                return $this->numPlayers;
        }

        /**
         * Set the value of numPlayers
         *
         * @return  self
         */ 
        public function setNumPlayers($numPlayers)
        {
                $this->numPlayers = $numPlayers;

                return $this;
        }

    //Métodos 
    public function addPlayers(int $num):int{
        $this -> numPlayers += $num;
        return $this -> numPlayers;
    }

    public  function __tostring(){
        $ret = "Tipo : " . $this -> type . " - Contacto: ";
        if ($this -> contact){
            $ret .= "Sí";
        } else {
            $ret .= "No";
        }

        $ret .= " - Números de jugadores: " . $this -> numPlayers;
        return $ret;
    }

    public abstract function play():string;
}
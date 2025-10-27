<?php

class Rugby extends Sport{
    private string $teamName;

    public function __construct($teamName, $type, $contact, $numPlayers){
        $this -> teamName = $teamName;
        parent::__construct($type, $contact, $numPlayers);
    }

    public function play():string{
        return "Estoy jugando al Rugby";
    }

    public function __tostring(){
        $ret = "Equipo " . parent::__tostring() .
        $this -> teamName;
        return $ret;
    }

}
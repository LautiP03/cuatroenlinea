<?php

namespace App;

interface InterfazFicha{

    public function retornarColor();

}

class Ficha implements InterfazFicha {

    protected String $entrada;

    public function __construct($entrada){

        $this->color= $entrada;
    }

    public function retornarColor(){
        
        return $this->color;

    }
}

?>
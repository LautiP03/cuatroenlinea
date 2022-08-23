<?php

namespace App;

interface InterfazTablero {

    public function reinicioTablero();
    public function disposicionCasilla(int $a, int $b);
    public function colocarFicha(int $a, int $b, Ficha $ficha);

}

class Tablero implements InterfazTablero {

    protected array $tablero; 
    protected int $altura;
    protected int $ancho; 

    public function __construct($altura = 6, $ancho = 7){

        $this->ejY = $altura;
        $this->ejX = $ancho;
        $this->reinicioTablero(); //Por si anteriormente ya se ha jugado.

    }

    public function  reinicioTablero(){

        for ($a = 0, $a < $this->ejX, $a++){
            for ($b = 0, $b < this->ejY, $b++){
                $this->tablero[$a][$b] = "0";
            }
        }
    }

    //Devuelve TRUE en caso de que la casilla esté libre, en otro caso FALSE.
    public function disposicionCasilla(int $a, int $b){

        if($this->tablero[$a][$b] == "0"){
            
            return TRUE;

        }else{

            return FALSE;

        }

    }

    public function colocarFicha(int $a, int $b, Ficha $ficha){

        $this->tablero[$a][$b] = $ficha;

    }

    










}


?>
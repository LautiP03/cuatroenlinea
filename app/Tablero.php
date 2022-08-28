<?php

namespace app;

interface InterfazTablero {

    public function reinicioTablero();
    public function disposicionCasilla(int $a, int $b);
    public function colocarFicha(int $a, int $b, Ficha $ficha);
    public function quitarFicha(int $a, int $b);

}

class Tablero implements InterfazTablero {

    protected array $tablero; 
    protected int $altura;
    protected int $ancho; 

    public function __construct(int $altura = 6,int $ancho = 7){

        $this->ejY = $altura;
        $this->ejX = $ancho;
        $this->reinicioTablero(); //Por si anteriormente ya se ha jugado.

    }

    //Reinicia el tablero recorriendo las filas de cada columna del tablero.
    public function reinicioTablero(){
        for($a = 0; $a < $this->ejX; $a++){
            for($b = 0; $b < $this->ejY; $b++){
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
    
    //Coloca el valor de una ficha donde se indique.
    public function colocarFicha(int $a, int $b, Ficha $ficha){

        $this->tablero[$a][$b] = $ficha;
    
    }

    //Dada una casilla del tablero, saca la ficha que se encuentre allí.
    public function quitarFicha(int $a, int $b){

        $this->tablero[$a][$b] = "0";

    }

}

?>
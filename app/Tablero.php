<?php

namespace App;
include 'Ficha.php';

interface InterfazTablero {

    public function reinicioTablero();
    public function disposicionCasilla(int $a, int $b);
    public function colocarFicha(int $a, Ficha $ficha);
    public function mostrarTablero();

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
                $this->tablero[$a][$b] = new Ficha("0");;
            }
        }
    } 

    //Devuelve TRUE en caso de que la casilla esté libre, en otro caso FALSE.
    public function disposicionCasilla(int $a, int $b){

        return $this->tablero[$a][$b]->retornarColor() == "0";

    }
    
    public function colocarFicha(int $a, Ficha $ficha){

        $a--; //Esto es para que la primer columna no este asignada al número 0, sino que esté asignada al valor 1.

        for($b = ($this->ejY) - 1; $b >= 0 ; $b--){

            if (($this->disposicionCasilla($a, $b))){

                $this->tablero[$a][$b] = $ficha;
                break;
            }
        }
    }

    //Muestra el tablero de juego actual.
    public function mostrarTablero(){

        echo "TABLERO DE JUEGO";
        print("\n");
        echo "----------------";
        print("\n\n");

        for($b = 0; $b < $this->ejY; $b++){

            for($a = 0;$a < $this->ejX; $a++){

                echo $this->tablero[$a][$b]->retornarColor();

            }

            print("\n");
        }

    }
}

$tablero = new Tablero;
$rojo = new Ficha("rojo");
$azul = new Ficha("azul");

$tablero->colocarFicha(1,$rojo);
$tablero->colocarFicha(1,$azul);
$tablero->colocarFicha(1,$rojo);
$tablero->colocarFicha(4,$rojo);
$tablero->colocarFicha(7,$rojo);
$tablero->colocarFicha(1,$azul);
$tablero->colocarFicha(1,$azul);

$tablero->mostrarTablero();


?>
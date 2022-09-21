<?php

namespace App;
include 'Tablero.php';

interface InterfazJuego{

    public function lineaVertical(Tablero $tablero);
    public function lineaHorizontal(Tablero $tablero);
    
}

class Resultado implements InterfazJuego {

    public function resultado(Tablero $tablero){

        if (($this->lineaVertical($tablero)) == 0 || ($this->lineaHorizontal($tablero)) == 0){

            print "El jugador azul ganó el juego";

        }else if (($this->lineaVertical($tablero)) == 1 || ($this->lineaHorizontal($tablero)) == 1){

            print "El jugador rojo ganó el juego";

        }else{

            print "Nadie ganó el juego";

        }
    }

    public function lineaVertical(Tablero $tablero){

        $contazul = 0;
        $controjo = 0;

        for($a = 0; $a < 7; $a++){
            for($b = 0; $b < 6; $b++){

                if(($tablero->devolverColorFicha($a, $b)) == "azul"){

                    $contazul++;
                    $controjo = 0;

                    if ($contazul == 4){

                        return 0;

                    }
                } else if(($tablero->devolverColorFicha($a, $b)) == "rojo"){

                    $controjo++;
                    $contazul = 0;

                    if ($controjo == 4){

                        return 1;

                    } 

                } else {

                    $contazul = 0;
                    $controjo = 0;
                    //si la casilla no tiene color se reinician los contadores.

                }    
            }
        }

        return 3;

    }

    public function lineaHorizontal(Tablero $tablero){

        $contazul = 0;
        $controjo = 0;

        for($b = 0; $b < 6; $b++){
            for($a = 0; $a < 7; $a++){

                if(($tablero->devolverColorFicha($a,$b)) == "azul"){

                    $contazul++;
                    $controjo = 0;

                    if ($contazul == 4){

                        return 0;

                    }
                } else if(($tablero->devolverColorFicha($a,$b)) == "rojo"){

                    $controjo++;
                    $contazul = 0;

                    if ($controjo == 4){

                        return 1;

                    }
                    
                } else{

                    $contazul = 0;
                    $controjo = 0;
                    //si la casilla no tiene color se reinician los contadores.

                }       
            }
        }

        return 3;

    }
}

$tablero = new Tablero;
$juego = New Resultado;

$rojo = new Ficha("rojo");
$azul = new Ficha("azul");

$tablero->colocarFicha(1,$rojo);
$tablero->colocarFicha(2,$rojo);
$tablero->colocarFicha(3,$rojo);
$tablero->colocarFicha(4,$azul);
$tablero->colocarFicha(1,$azul);
$tablero->colocarFicha(2,$azul);
$tablero->colocarFicha(3,$rojo);
$tablero->colocarFicha(4,$azul);
$tablero->colocarFicha(1,$rojo);
$tablero->colocarFicha(2,$rojo);
$tablero->colocarFicha(3,$rojo);
$tablero->colocarFicha(4,$rojo);


$juego->resultado($tablero);


?>
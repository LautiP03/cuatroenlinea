<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestTablero extends TestCase{

public function test_colocar_fichas(){

    $tablero = new Tablero();
    $rojo = new Ficha("rojo");
    $azul = new Ficha("azul");
    
    $tablero->colocarFicha(1,$rojo);
    $tablero->colocarFicha(1,$azul);

    $this->assertEquals($tablero->devolverColorFicha(1,2), "azul"); //dice que es "0" ?).

}

public function test_disposicion_casilla(){

    $tablero = new Tablero();
    $rojo = new Ficha ("rojo");

    $tablero->colocarFicha(2, $rojo);

    $this->assertFalse($tablero->disposicionCasilla(2,1)); //devuelve True por alguna razon.

}

public function test_reiniciar_tablero(){

    $tablero = new Tablero();
    $rojo = new Ficha ("rojo");
    $azul = new Ficha("azul");

    $tablero->colocarFicha(2,$rojo);
    $tablero->colocarFicha(5,$azul);
    $tablero->reinicioTablero();

    $this->assertTrue(($tablero->disposicionCasilla(2,1) && $tablero->disposicionCasilla(5,1)));

}

}

?>
<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestRuedaGiro extends TestCase{

    public function test_giro()
    {
        $solicitud = $this->get('/jugar/1');

        $contenido = $solicitud -> getContent();
        $this -> assertEquals(7, substr_count($contenido, 'hover:animate-spin'));

    }
}

?>
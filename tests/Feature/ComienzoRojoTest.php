<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestComienzoRojo extends TestCase{

    public function test_comienzo()
    {
        $solicitud = $this->get('/jugar/1');

        $contenido = $solicitud -> getContent();
        $this -> assertTrue(substr_count($contenido, 'bg-red-500') == 1);
    }
}

?>
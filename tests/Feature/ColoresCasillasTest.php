<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TestColoresCasillas extends TestCase
{

    public function test_color_gris()
    {
        $solicitud = $this->get('/jugar/12345');

        $contenido = $solicitud -> getContent();
        $this -> assertEquals(37, substr_count($contenido, '"bg-gray-200'));
    }

    public function test_color_rojo()
    {
        $solicitud = $this->get('/jugar/12345');

        $contenido = $solicitud -> getContent();
        $this -> assertEquals(3, substr_count($contenido, '"bg-red-500'));
    }

    public function test_color_celeste()
    {
        $solicitud = $this->get('/jugar/12345');

        $contenido = $solicitud -> getContent();
        $this -> assertEquals(2, substr_count($contenido, '"bg-sky-500'));
    }
}

?>
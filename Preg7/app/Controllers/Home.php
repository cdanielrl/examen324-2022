<?php

namespace App\Controllers;
use App\Controllers\Persona;

class Home extends BaseController
{
    public function index()
    {
        $persona = new PersonaController();
        return $persona->index();
    }
}

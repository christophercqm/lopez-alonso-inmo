<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ContactoController extends Controller
{
    public function index()
    {
        // Renderiza la vista de Inertia
        return Inertia::render('Public/Contacto'); // Asegúrate de que 'ContactoIndex' es el nombre correcto de tu componente Vue
    }
}

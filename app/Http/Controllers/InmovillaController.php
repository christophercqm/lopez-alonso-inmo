<?php

namespace App\Http\Controllers;

use App\Services\InmovillaService;
use Inertia\Inertia;

class InmovillaController extends Controller
{
    protected $inmovillaService;

    // Ajusta el constructor para aceptar los parámetros necesarios
    public function __construct()
    {
        // Configura los parámetros necesarios para la solicitud
        $numagencia = '2';
        $addnumagencia = '8288';
        $password = '82ku9xz2aw3';
        $idioma = 1;

        // Crea una instancia del servicio con los parámetros necesarios
        $this->inmovillaService = new InmovillaService($numagencia, $addnumagencia, $password, $idioma);
    }

    public function index()
    {
        // Obtén los datos utilizando el servicio
        $data = $this->inmovillaService->fetchProperties();

        // Renderiza la vista utilizando Inertia
        return Inertia::render('InmovillaIndex', [
            'data' => $data
        ]);
    }
}

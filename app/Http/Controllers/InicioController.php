<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Guia;
use App\Models\Sistema;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('inicio', [
            'guias' => Guia::with('categoria')->orderByDesc('id')->take(6)->get(),
            'totalguias' => Guia::count(),
            'totalsistemas' => Sistema::count(),
            'totalconsultas' => Consulta::count(),
        ]);
    }

    public function pagina($vista)
    {
        return view($vista);
    }
}
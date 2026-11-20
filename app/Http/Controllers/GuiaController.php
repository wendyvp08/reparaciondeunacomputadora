<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Guia;
use App\Models\Herramienta;
use App\Models\Sistema;

class GuiaController extends Controller
{
    public function guias()
    {
        return view('guias.index', ['guias' => Guia::with('categoria')->orderBy('titulo')->get()]);
    }

    public function guia($id)
    {
        $guia = Guia::with(['categoria', 'pasos', 'herramientas'])->findOrFail($id);
        return view('guias.ver', ['guia' => $guia]);
    }

    public function categorias()
    {
        return view('categorias.index', ['categorias' => Categoria::withCount('guias')->get()]);
    }

    public function categoria($id)
    {
        return view('categorias.ver', ['categoria' => Categoria::with('guias')->findOrFail($id)]);
    }

    public function herramientas()
    {
        return view('herramientas.index', ['herramientas' => Herramienta::orderBy('nombre')->get()]);
    }

    public function herramienta($id)
    {
        return view('herramientas.ver', ['herramienta' => Herramienta::with('guias')->findOrFail($id)]);
    }

    public function sistemas()
    {
        return view('sistemas.index', ['sistemas' => Sistema::orderBy('familia')->get()]);
    }

    public function sistema($id)
    {
        return view('sistemas.ver', ['sistema' => Sistema::findOrFail($id)]);
    }

    public function pagina($vista)
    {
        return view($vista);
    }
}
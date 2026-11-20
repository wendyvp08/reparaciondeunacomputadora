<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    private $reglas = [
        'nombre' => 'required|max:80',
        'correo' => 'required|email|max:100',
        'categoriaid' => 'required|exists:categorias,id',
        'equipo' => 'required|max:80',
        'problema' => 'required|min:10',
    ];

    private $mensajes = [
        'required' => 'El campo :attribute es obligatorio.',
        'email' => 'El correo no es válido.',
        'max' => 'El campo :attribute es demasiado largo.',
        'min' => 'El campo :attribute es demasiado corto.',
        'exists' => 'La categoría no es válida.',
    ];

    public function index()
    {
        return view('consultas.index', ['consultas' => Consulta::with('categoria')->orderByDesc('id')->get()]);
    }

    public function crear()
    {
        return view('consultas.crear', ['categorias' => Categoria::orderBy('nombre')->get()]);
    }

    public function guardar(Request $request)
    {
        $datos = $request->validate($this->reglas, $this->mensajes);
        $datos['fecha'] = now()->toDateString();
        Consulta::create($datos);
        return redirect()->route('gracias')->with('mensaje', 'Tu consulta fue guardada.');
    }

    public function ver($id)
    {
        return view('consultas.ver', ['consulta' => Consulta::with('categoria')->findOrFail($id)]);
    }

    public function editar($id)
    {
        return view('consultas.editar', [
            'consulta' => Consulta::findOrFail($id),
            'categorias' => Categoria::orderBy('nombre')->get(),
        ]);
    }

    public function actualizar(Request $request, $id)
    {
        $reglas = $this->reglas;
        $reglas['estado'] = 'required|in:Pendiente,Atendida';
        $datos = $request->validate($reglas, $this->mensajes);
        Consulta::findOrFail($id)->update($datos);
        return redirect()->route('consultas.index')->with('mensaje', 'Consulta actualizada.');
    }

    public function eliminar($id)
    {
        Consulta::findOrFail($id)->delete();
        return redirect()->route('consultas.index')->with('mensaje', 'Consulta eliminada.');
    }
        public function pagina($vista)
    {
        return view($vista);
    }
}
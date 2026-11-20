<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consultas';
    public $timestamps = false;
    protected $fillable = ['categoriaid', 'nombre', 'correo', 'equipo', 'problema', 'estado', 'fecha'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoriaid');
    }
}
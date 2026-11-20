<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion'];

    public function guias()
    {
        return $this->hasMany(Guia::class, 'categoriaid');
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'categoriaid');
    }
}
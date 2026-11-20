<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
    protected $table = 'herramientas';
    public $timestamps = false;
    protected $fillable = ['nombre', 'descripcion'];

    public function guias()
    {
        return $this->belongsToMany(Guia::class, 'guiaherramienta', 'herramientaid', 'guiaid');
    }
}
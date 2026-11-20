<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $table = 'guias';
    public $timestamps = false;
    protected $fillable = ['categoriaid', 'titulo', 'resumen', 'nivel', 'minutos'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoriaid');
    }

    public function pasos()
    {
        return $this->hasMany(Paso::class, 'guiaid')->orderBy('numero');
    }

    public function herramientas()
    {
        return $this->belongsToMany(Herramienta::class, 'guiaherramienta', 'guiaid', 'herramientaid');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paso extends Model
{
    protected $table = 'pasos';
    public $timestamps = false;
    protected $fillable = ['guiaid', 'numero', 'instruccion'];

    public function guia()
    {
        return $this->belongsTo(Guia::class, 'guiaid');
    }
}
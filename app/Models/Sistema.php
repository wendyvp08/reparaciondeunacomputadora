<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    protected $table = 'sistemas';
    public $timestamps = false;
    protected $fillable = ['nombre', 'familia', 'version', 'tamano', 'sitio'];
}
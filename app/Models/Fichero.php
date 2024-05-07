<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichero extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'nombre', 
    'tipo_fichero',
    'user_id',
    'ruta_archivo'
    ];
}

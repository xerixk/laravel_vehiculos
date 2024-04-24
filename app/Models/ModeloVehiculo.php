<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model
{
    use HasFactory;
    protected $table="vehiculos";
    protected $fillable=[
        "matricula",
        "modelo",
        "fecha_matriculacion",
        "peso","color",
        "itv_pasada",
    ];
   
}

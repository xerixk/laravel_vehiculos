<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichero extends Model
{
    use HasFactory;
    protected $table = 'ficheros';
    protected $fillable = [ 
    'nombre', 
    'tipo_fichero',
    'user_id',
    
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedidos";
    protected $fillable = ["user_id","producto_id","num_ref"];


    public function producto()
    {
        return $this->belongsTo(Producto::class,"producto_id",'id');
    }
    public function usuario()
    {
        return $this->belongsTo(User::class,"user_id",'id');
    }
}

<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); // JUST MYSQL
        Producto::truncate();
        $imagenes = [
            "https://cdn.pixabay.com/photo/2018/04/29/11/54/strawberries-3359755_1280.jpg",
            "https://cdn.pixabay.com/photo/2015/06/22/23/20/cocktail-818197_1280.jpg",
            "https://cdn.pixabay.com/photo/2014/12/02/14/50/pan-554072_1280.jpg",
        ];
        foreach (range(0,2) as $loop){
            Producto::create([
                'titulo'=>"Producto_$loop",
                'descripcion'=>"Descripcion_$loop",
                'precio'=>(rand(0,20)/10)+rand(0,10) ,
                'imagen'=>$imagenes[$loop],
            ]);
        }
    }
}
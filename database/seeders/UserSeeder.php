<?php

namespace Database\Seeders;

use App\Models\Fichero;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0'); // JUST MYSQL
        User::truncate();
       foreach(range(0,2) as $loop){
           User::create([
               'name' => "user_$loop",
               'lastname' =>"user_lastname_$loop",
               'direccion' =>"dir_$loop",
               'ciudad' =>"ciudad_$loop",
               'pais' =>"pais_$loop",
               'email' => "emailuser$loop@user.es",
               'password' => Hash::make("123456"),
               'telefono' =>"",
               'codigoPostal' =>"",
               'nacimiento' =>"1990-01-01",
               'genero' =>"",
               'avatar'=>null,
           ]);
       }
    }
}
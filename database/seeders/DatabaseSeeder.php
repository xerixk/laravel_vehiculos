<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TestSeeder::class);
        $this->call(ModeloSeeder::class);
        $this->call(VehiculoSeeders::class);
        User::truncate();
        \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'lastname' =>  "fake lastname",
            'email' => "fake email",
            'password' => "fake password", 
            'direccion'=> "fake address",
            'ciudad'=>"fake city",
            'pais'=>"fake county",
            'telefono'=>"fake number",
            'codigo_postal'=>"fake code",
            'genero'=>"fake genero",

        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(TestSeeder::class);
       // $this->call(ModeloSeeder::class);
       // $this->call(VehiculoSeeders::class);

        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // \App\Models\User::truncate();

        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ProductoSeeder::class);
        
    }
}

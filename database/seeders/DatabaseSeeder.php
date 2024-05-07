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
        
    }
}

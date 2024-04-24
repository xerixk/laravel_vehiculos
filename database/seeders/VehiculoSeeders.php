<?php

namespace Database\Seeders;

use App\Models\ModeloVehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        ModeloVehiculo::truncate();
        foreach (range(1,5)as $loop){
            ModeloVehiculo::create([
                'matricula'=>fake()->unique()->regexify('[0-9]{4}[A-Z]{3}'),
                'modelo'=>fake()->word(),
                'fecha_matriculacion'=>fake()->dateTimeBetween('-5 years', 'now'),
                'peso'=>fake()->numberBetween(1000, 4000),
                'color'=>fake()->safeColorName(),
                'itv_pasada'=>fake()->boolean(),
            ]);
        }
    }
}

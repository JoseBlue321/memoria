<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    public function run(): void
    {
        Carrera::create([
            'carrera'=>'MEDICINA',
        ]);
        Carrera::create([
            'carrera'=>'ENFERMERIA',
        ]);
        Carrera::create([
            'carrera'=>'NUTRICIÓN Y DIETÉTICA',
        ]);
        Carrera::create([
            'carrera'=>'TECNOLOGIA MÉDICA',
        ]);
        Carrera::create([
            'carrera'=>'PROGRAMA DE FONOAUDIOLOGIA',
        ]);
        Carrera::create([
            'carrera'=>'PROGRAMA DE TERAPIA OCUPACIONAL',
        ]);
    }
}

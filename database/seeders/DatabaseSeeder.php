<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CarreraSeeder::class,
            CursoSeeder::class,
            //AsignaturaSeeder::class,
            //ParcialSeeder::class,
            //PersonaSeeder::class,
            //EvaluacionSeeder::class,
            //EventoSeeder::class,
            //ParticipanteSeeder::class,
            //SolicitudSeeder::class,
        ]);
    }
}

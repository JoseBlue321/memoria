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
            EventoSeeder::class,
            ParticipanteSeeder::class,
        ]);
    }
}

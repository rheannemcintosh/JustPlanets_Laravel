<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlanetarySystem;

class PlanetarySystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlanetarySystem::create([
            'name'                => 'The Solar System',
            'mass'                => 0,
            'diameter'            => 0,
        ]);
    }
}

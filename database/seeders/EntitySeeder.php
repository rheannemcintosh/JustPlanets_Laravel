<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entity;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entity::create([
            'name'                => 'Sun',
            'mass'                => 1000000.00,
            'distance'            => 5,
            'entity_type_id'      => 2,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Mercury',
            'mass'                => 700777,
            'distance'            => 8,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Venus',
            'mass'                => 8888888,
            'distance'            => 12,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Earth',
            'mass'                => 10777383,
            'distance'            => 45,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Mars',
            'mass'                => 134342340,
            'distance'            => 88,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Jupiter',
            'mass'                => 1033333322222,
            'distance'            => 99,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Saturn',
            'mass'                => 77777777,
            'distance'            => 22,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Uranus',
            'mass'                => 10000,
            'distance'            => 100,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
        Entity::create([
            'name'                => 'Neptune',
            'mass'                => 1220,
            'distance'            => 5,
            'entity_type_id'      => 1,
            'planetary_system_id' => 1,
        ]);
    }
}

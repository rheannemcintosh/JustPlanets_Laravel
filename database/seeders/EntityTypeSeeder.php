<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EntityType;

class EntityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntityType::create(['name' => 'Planet']);
        EntityType::create(['name' => 'Star']);
    }
}

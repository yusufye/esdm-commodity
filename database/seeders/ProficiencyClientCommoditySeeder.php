<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProficiencyClientCommodity;


class ProficiencyClientCommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProficiencyClientCommodity::factory()->count(2)->create();
        
    }
}

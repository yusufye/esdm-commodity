<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProficiencyClientCommodity;
use App\Models\ProficiencyClientPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProficiencyClientPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProficiencyClientPackage::factory()->count(4)->create();
    }
}

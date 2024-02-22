<?php

namespace Database\Factories;

use App\Models\Commodity_package;
use Illuminate\Support\Facades\DB;
use App\Models\ProficiencyClientCommodity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProficiencyClientPackage>
 */
class ProficiencyClientPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $client_commodity=ProficiencyClientCommodity::get()->pluck('commodity_id')->random();

        $package=Commodity_package::with('commodity')->where([
            'commodity_id'=>$client_commodity
        ])->get()->pluck('id')->random();

        return [
            'proficiency_client_commodity_id' => $client_commodity,
            'package_id' => $package
        ];
    }
}

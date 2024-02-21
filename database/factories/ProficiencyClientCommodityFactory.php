<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ProficiencyClient;
use App\Models\Commodity;
use App\Models\Proficiency;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProficiencyClientCommodity>
 */
class ProficiencyClientCommodityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $proficiency_client_id=ProficiencyClient::get()->pluck('proficiency_id')->random();
        $commodity=Commodity::with('proficiencies')->where([
            'proficiency_id'=>$proficiency_client_id
        ])->inRandomOrder()->get()->pluck('id')->random();

        return [
            'proficiency_client_id' => $proficiency_client_id,
            'commodity_id' => $commodity
        ];
    }
}

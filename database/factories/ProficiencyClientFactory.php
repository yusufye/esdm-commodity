<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Proficiency;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProficiencyClient>
 */
class ProficiencyClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user=User::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'proficiency_id' => function () {
                return Proficiency::inRandomOrder()->first()->id;
            },
            'client_id' =>$user->client_id
        ];
    }
}

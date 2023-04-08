<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\annonces;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\demandes>
 */
class demandesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $reservation_Ddate = Carbon::now()->addDays($this->faker->numberBetween(1, 30));
        $reservation_Fdate = $reservation_Ddate->copy()->addDays($this->faker->numberBetween(1, 14));

        return [
            'annonce_id' => function () {
                return annonces::factory()->create()->id;
            },
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'reservation_Ddate' => $reservation_Ddate,
            'reservation_Fdate' => $reservation_Fdate,
            'state' => $this->faker->randomElement(['pending', 'accepted', 'rejected']),
            'feedbackClient' => $this->faker->randomElement(['pending', 'completed']),
            'feedbackArticle' => $this->faker->randomElement(['pending', 'completed']),
        ];
    }
}

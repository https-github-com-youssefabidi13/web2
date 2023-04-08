<?php

namespace Database\Factories;

use App\Models\demandes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\notifications>
 */
class notificationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = notifications::class;

    public function definition()
    {
        return [
            'demande_id' => function () {
                return demandes::factory()->create()->id;
            },
            'message' => $this->faker->sentence(),
        ];
    }
}

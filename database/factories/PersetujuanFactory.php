<?php

namespace Database\Factories;

use App\Models\Persetujuan;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersetujuanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persetujuan::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'setuju' => $this->faker->boolean(),
            'tidak' => $this->faker->boolean(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}

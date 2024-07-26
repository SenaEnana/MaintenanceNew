<?php

namespace Database\Factories;

use App\Models\RequestType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestType>
 */
class RequestTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = RequestType::class;

    public function definition()
    {
        return [
            'request_type_id' => $this->faker->word,
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}

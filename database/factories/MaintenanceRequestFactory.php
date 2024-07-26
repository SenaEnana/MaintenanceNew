<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Equipment;
use App\Models\RequestType;
use App\Models\MaintenanceRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaintenanceRequest>
 */
class MaintenanceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = MaintenanceRequest::class;

    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'equipment_id' => Equipment::factory(),
            'request_type_id' => RequestType::factory(),
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement([
                MaintenanceRequest::STATUS_PENDING,
                MaintenanceRequest::STATUS_COMPLETED,
            ]),
        ];
    }
}

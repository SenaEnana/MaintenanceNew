<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Equipment;
use App\Models\RequestType;
use App\Models\MaintenanceRequest;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create customers
        Customer::factory()->count(10)->create();
        
        // Create equipment
        Equipment::factory()->count(10)->create();

        // Create request types
        RequestType::factory()->count(5)->create();

        // Create maintenance requests
        MaintenanceRequest::factory()->count(20)->create();

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

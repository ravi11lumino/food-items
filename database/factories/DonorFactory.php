<?php

namespace Database\Factories;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    protected $model = Donor::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'contact_information' => $this->faker->phoneNumber,
            
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text,
            'company_name' => $this->faker->company,
            'status' => $this->faker->randomElement(Project::PROJECT_STATUS),
            'deadline' => $this->faker->dateTime,
        ];

    }
}

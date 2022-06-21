<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    private $counter = 3;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->counter = $this->counter -1;
        return [
//            'name' => $this->faker->randomElement(Role::ROLE_NAME)
            'role_name' => Role::ROLE_NAME[$this->counter],
        ];
    }
}

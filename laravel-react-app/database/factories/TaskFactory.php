<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $attributes['name'] ?? $this->faker->randomElement(['To do','In progress','Done']);
        return [
            'taskName' => $this->faker->title,
            'description' => $this->faker->text,
            'community' => $this->faker->text,
            'status' => $status,
            'deadline' => $this->faker->dateTime,
            'user_id' => User::factory(),
            'project_id' => Project::factory(),
        ];
    }
}

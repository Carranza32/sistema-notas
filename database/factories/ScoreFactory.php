<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker,
            'subject_id' => $this->faker,
            'score1' => $this->faker,
            'score2' => $this->faker,
            'score3' => $this->faker,
            'average' => $this->faker,
        ];
    }
}

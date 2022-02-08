<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'post_categories_id' => $this->faker->numberBetween($min = 1, $max = 6),
            'body' => $this->faker->paragraph,
            'title' => $this->faker->word,
            'description' => $this->faker->realText($maxNbChars = 100, $indexSize = 2),
            'views' => $this->faker->numberBetween($min = 1, $max = 100),
            'status' => $this->faker->randomElement(['Published', 'Hidden', 'Archived']),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory

{
    /**
     * the name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model  = Post::class;


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'  => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'created_at'  =>  now()
        ];
    }
}

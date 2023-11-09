<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'user_id' => User::factory(), //how doe this call  create on this factory as well
      'category_id' => Category::factory(),
      'title' => fake()->sentence(),
      'slug' => fake()->slug(),
      'excerpt' => fake()->sentence(),
      'body' => fake()->paragraph(),
    ];
  }
}

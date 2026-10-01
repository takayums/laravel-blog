<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => fake()->sentence(10),
            'content' => fake()->paragraph(5, true),
            'featured_image' => null,
            'status' => $status = fake()->randomElement(['published', 'draft', 'archived']),
            'published_at' => $status == "published" ? fake()->dateTimeBetween('-1 year', 'now') : null,
            'category_id' => Category::factory(),
            'author_id' => User::factory(),

        ];
    }
}

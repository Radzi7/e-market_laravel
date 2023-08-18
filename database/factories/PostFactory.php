<?php
namespace Database\Factories;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    protected $model = Post::class;
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'content' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'likes' => random_int(1, 2000),
            'category_id'=> Category::get()->random()->id,
        ];
    }
}

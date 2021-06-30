<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $images = ['image1.jpeg', 'image2.jpeg', 'image3.jpeg', 'image4.jpeg', 'image5.jpeg'];

    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::latest()->pluck('id');
        return [
            'user_id' => $this->faker->randomElement($users),
            'title' => $this->faker->sentence(rand(8, 11)),
            'sub_title' => $this->faker->sentence(rand(13, 18)),
            'content' => $this->faker->paragraph(250, 400),
            'image' => $this->images[rand(0, 4)],
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::latest()->pluck('id');
        $articles = Article::latest()->pluck('id');

        return [
            'user_id' => $this->faker->randomElement($users),
            'comment' => $this->faker->sentence(rand(13, 18)),
            'commentable_id' => $this->faker->randomElement($articles),
            'commentable_type' => 'App\Models\Article',
        ];
    }
}

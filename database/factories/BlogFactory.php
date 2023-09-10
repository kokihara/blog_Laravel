<?php

namespace Database\Factories;

use App\Models\Blog; // モデルのネームスペースを正しく指定
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class; // モデルクラスを指定

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name, // title()ではなくnameを使用、それ以外だと英語になるため
            'content' => fake()->realText(200,2), // realText(200,2)ではなくnameを使用、それ以外だと英語になるため
        ];
    }
}

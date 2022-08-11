<?php

namespace Database\Factories;

// categoriesテーブルにはquestを参照するカラムはないので
// 自身のモデルを参照するのみ。
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'title' => $this->faker->title()
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => trim($this->faker->sentence(2, false), '.'),
            'description' => $this->faker->paragraphs(2, true),
            'photo' => function($attributes){ 
                return "https://picsum.photos/seed/".Str::slug($attributes['name'])."/400/400";
            },
            'amount' => $this->faker->numberBetween(10, 999)
        ];
    }
}

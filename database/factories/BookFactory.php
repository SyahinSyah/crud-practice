<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'name' =>$this->faker->name,
             'summary' => $this->faker->text,
             'imageUrl' => $this->faker->imageUrl,
             'page' => $this->faker->randomDigit,
             'price' => $this->faker->randomDigit,
             'color' => $this->faker->colorName,
             'author_id' => $this->faker->randomDigit,
        ];
    }
}

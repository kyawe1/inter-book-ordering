<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pdf_Books;

class Pdf_BooksFactory extends Factory
{
    protected $model=Pdf_Books::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'ISBN_Number'=>$this->faker->isbn13(),
            'publish_id'=>1,
            'author_name'=>$this->faker->name(),
            'published_date'=>$this->faker->date(),
            'edition'=>$this->faker->name(),
            'details'=>$this->faker->text(),
            'slug'=>$this->faker->name()
        ];
    }
}

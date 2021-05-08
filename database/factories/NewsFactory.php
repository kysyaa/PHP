<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{  
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->realText(100),
            'content' => $this->faker->text(),
            'date' => $this->faker->date()
        ];
    }
}
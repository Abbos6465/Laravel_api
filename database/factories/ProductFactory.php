<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'category_id'=>rand(1,4),
            'name'=> [
                "uz" => fake()->sentence(3),
                "ru" => "Программирование 1. Наука",
            ],
            'price' => rand(50000,10000000),
            'description' => [
                "uz" => fake()->paragraph(3),
                "ru" => "Программирование 1. Наука, занимающаяся решением задач на электронных машинах и разработкой теорий и методов выполнения на них различных видов умственной работы; практическое отделение теории алгоритмов; человеко-"
            ],
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        Category::create(["name" =>['uz'=>"Stol",'ru'=>"Стол"]]);

        Category::create(["name" =>['uz'=>"Stul",'ru'=>"Кресло"]]);

        Category::create(["name" =>['uz'=>"Divan",'ru'=>"Диван"]]);

        Category::create(["name" =>['uz'=>"Yotoq",'ru'=>"Кровать"]]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
   
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'qizil',
                'ru' => 'красный',
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'qora',
                'ru' => 'черный',
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'yashil',
                'ru' => 'зеленый',
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'mdf',
                'ru' => 'мдф',
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'uz' => 'ldsp',
                'ru' => 'лдсп',
            ],
        ]);

    }
}

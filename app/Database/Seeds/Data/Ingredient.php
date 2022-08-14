<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Ingredient extends Seeder
{

    public function run()
    {
        $model = model('ingredientModel');

        $array = [
            [
                "name" => "Fresh water",
                "quantity" => "250 ml",
                "recipe_id" => 1
            ],
            [
                "name" => "Fresh water",
                "quantity" => "250 ml",
                "recipe_id" => 2
            ],
            [
                "name" => "Tea bag",
                "quantity" => "1",
                "recipe_id" => 2
            ],
            [
                "name" => "Fresh water",
                "quantity" => "300 ml",
                "recipe_id" => 3
            ],
            [
                "name" => "Ices cubes",
                "quantity" => "2-3",
                "recipe_id" => 3
            ],
            [
                "name" => "Lemon (optional)",
                "quantity" => "1 slice",
                "recipe_id" => 3
            ],
        ];

        foreach ($array as $value) {
            $model->insert($value);
        }
    }
}

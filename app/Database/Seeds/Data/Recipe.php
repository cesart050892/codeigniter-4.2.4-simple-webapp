<?php

namespace App\Database\Seeds\Data;

use CodeIgniter\Database\Seeder;

class Recipe extends Seeder
{

    public function run()
    {
        $model = model('recipeModel');

        $array = [
            [
                "title" => "Boiling Water",
                "instructions" => "Put the water in a cauldron and boil.",
            ],
            [
                "title" => "Tea",
                "instructions" => "Prepare the recipe for boiling water. Put the water in a cup, add the tea bag and let it steep for a few minutes.",
            ],
            [
                "title" => "Glass of water",
                "instructions" => "Put ice cubes in a tall glass and fill with water. Add a slice of lemon if desired.",
            ],
        ];

        foreach ($array as $value) {
            $model->insert($value);
        }
    }
}

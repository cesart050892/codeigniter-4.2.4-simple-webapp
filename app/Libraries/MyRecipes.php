<?php

namespace App\Libraries;

use App\Models\RecipeModel;
use App\Models\IngredientModel;

class MyRecipes
{
    public $recipeModel;
    public $ingredientModel;

    public function __construct()
    {
        $this->recipeModel = new RecipeModel();
        $this->ingredientModel = new IngredientModel();
    }

    /**
     * Get the list of recipes
     * @return array
     */
    public function getListRecipes()
    {
        // Only get id, slug and title fields
        $this->recipeModel->select('id, slug, title');

        $recipes = $this->recipeModel
            ->orderBy('id')
            ->paginate();

        return $recipes;
    }

    /**
     * Get a recipe by its id
     * @param int $id
     * @return object|NULL
     */
    public function getRecipeById(int $id)
    {
        // Get the recipe by its id
        $recipe = $this->recipeModel->find($id);

        if ($recipe !== null) {
            $recipe->ingredients = $this->ingredientModel
                ->where(['recipe_id' => $recipe->id])
                ->orderBy('id')
                ->findAll();
        }

        return $recipe;
    }

    /**
     * Get a recipe by its slug
     * @param string $slug
     * @return object|NULL
     */
    public function getRecipeBySlug(string $slug)
    {
        // Get the recipe by its slug
        $recipe = $this->recipeModel->where('slug', $slug)->first();

        if ($recipe !== null) {
            $recipe->ingredients = $this->ingredientModel
                ->where(['recipe_id' => $recipe->id])
                ->orderBy('id')
                ->findAll();
        }

        return $recipe;
    }
}

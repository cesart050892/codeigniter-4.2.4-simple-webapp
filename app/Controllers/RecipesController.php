<?php

namespace App\Controllers;

use App\Libraries\MyRecipes;

class RecipesController extends BaseController
{
    public function index()
    {
        // Create an instance of our library
        $myRecipes = new MyRecipes();

        // Collect all the data used by the view in a $data array
        $data = [
            'page_title' => "My Recipes",
            'page_subtitle' => "I present you my favorite recipes...",
            'recipes' => $myRecipes->getAllRecipes(),
        ];

        /* Each of the items in the $data array will be accessible
         * in the view by variables with the same name as the key:
         * $page_title, $page_subtitle and $recipes
         */
        return view('recipe_list', $data);
    }
}

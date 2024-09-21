<?php 

namespace App\Http\Controllers;

class IngredientsController extends Controller
{

    private $ingredients = []; 

    public function setIngredients(string $ingredient, string $product): void
    {
        $this->ingredients[$product] = $ingredient;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

}
<?php 

namespace App\Services;

use App\Interfaces\DoughServiceInterface;

class DoughService implements DoughServiceInterface
{
    private $doughRecipe;

    public function __construct()
    {
        $this->doughRecipe = [
            'milk'        => '2 xícaras de chá de leite',
            'cloves'      => '1 colher de sopa de cravo da índia',
            'cinnamon'    => '1 colher de chá de canela em pó',
            'honey'       => '6 colheres de sopa de mel',
            'butter'      => '2 colheres de sopa de margarina/manteiga',
            'sugar'       => '1 xícara de açúcar mascavo',
            'chocolate'   => '1/2 xícara de chocolate em pó 50% cacau',
            'flour'       => '2 xícaras de farinha de trigo sem fermento',
            'yeast'       => '1/2 colher de sopa de fermento químico',
            'backingSoda' => 'meia colher de sopa de bicarbonato de sódio',
            'paperButter' => '2 folhas de papel manteiga',
            'oil'         => '1/2 colher de óleo'
        ];
    }

    public function create(array $ingredients): array
    {
        $recipe = [];

        array_walk($ingredients, function ($item, $product) use (&$recipe) {
            $recipe[$product] = $this->doughRecipe[$product];
        });

        return $recipe;
    }

    public function baking(): string
    {
        return "Aguarde de 25 a 30 minutos para o forno assar o bolo.";
    }
}
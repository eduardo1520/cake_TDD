<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;

class IngredientsTest extends TestCase
{

    private $ingredients;
    private $list;

    public function setUp(): void
    {
        $this->ingredients = new IngredientsController();

        $this->list = [
            'milk'        => 'uma caixa de leite de 1L',
            'cloves'      => 'um pacote de cravo da india 40g',
            'cinnamon'    => 'um pacote de canela em pó 40g',
            'honey'       => 'um frasco de mel 500g',
            'butter'      => 'um frasco de margarina 500g',
            'sugar'       => 'um pacote de aúcar mascavo 1kg',
            'chocolate'   => 'chocolate em pó 50% cacau',
            'flour'       => 'farinha de trigo sem fermento 1kg',
            'yeast'       => 'fermento químico 100g',
            'backingSoda' => 'bicarbonato de sódio 100g',
            'paperButter' => 'papel manteiga 1pct',
            'oil'         => 'um frasco de óleo 1L'
        ];
    }

    /**
     * @test
     */
    public function shouldBeReturnedCakeIngredients()
    {
        $list = $this->list ?? [];

        array_walk($list, function ($item, $product) {
            $this->ingredients->setIngredients($item, $product);
        });

        $this->assertNotEmpty($this->ingredients->getIngredients());
        $this->assertCount(count($list), $this->ingredients->getIngredients());
    }

}
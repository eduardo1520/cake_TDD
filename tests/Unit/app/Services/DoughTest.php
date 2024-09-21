<?php 

namespace App\Services;

use PHPUnit\Framework\TestCase;
class DoughTest extends TestCase
{

    private $dough;
    private $list;

    public function setUp(): void 
    {
        $this->dough       = new DoughService();

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
    public function shouldBeCreatedCakeDough()
    {
        $cakeDough = $this->dough->create($this->list);

        $this->assertNotEmpty($cakeDough);
    }

    /**
     * @test
     */

    public function shouldBeCakeBaked()
    {
        $cakeDough = $this->dough->create($this->list);
        $cake      = $this->dough->baking();

        $this->assertNotEmpty($cakeDough);
        $this->assertEquals('Aguarde de 25 a 30 minutos para o forno assar o bolo.', $cake);
    }
}
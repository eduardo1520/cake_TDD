<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;

class AccessoriesTest extends TestCase
{

    private $accessories;
    private $kitAccessories;

    public function setUp(): void
    {
        $this->accessories = new AccessoriesController();

        $this->kitAccessories = [
            'cakePan'       => "forma de aluminio medida 33x23x05 cm",
            'cakeCup'       => "xicara de louça medida 240 ml",
            'cakePackaging' => "embalagem medida 20x11.5 cm",
            'cakeTape'      => "fita de cetim amarela/vermelho",
            'cakeScissors'  => "tessoura grande",
            'bowls'         => "kit vasilhas" 
        ];
    }

    /**
     * @test
     */
    public function shouldBeReturnedCakeAccessories()
    {
        $kits = $this->kitAccessories ?? [];
        
        array_walk($kits, function ($item) {
            $this->accessories->setAccessories($item);
        });

        $this->assertNotEmpty($this->accessories->getAccessories());
        $this->assertCount(count($this->kitAccessories), $this->accessories->getAccessories());
    }
}
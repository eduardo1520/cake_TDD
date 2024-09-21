<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;

class FillingTest extends TestCase
{

    private $filling;

    public function setUp(): void
    {
        $this->filling = new FillingController();
    }

    /**
     * @test
     */
    public function shouldBeReturnedCakeFilling()
    {
        $cakeFilling = "doce de leite tradicional";

        $this->filling->setFilling($cakeFilling);

        $this->assertEquals($cakeFilling, $this->filling->getFilling());
    }

    /**
     * @test
     */
    public function souldBeReturnedCakeFillingQuantity()
    {
        $cakeFillingQuantity = "400g";

        $this->filling->setFillingQuantity($cakeFillingQuantity);

        $this->assertEquals($cakeFillingQuantity, $this->filling->getFillingQuantity());
    }
}
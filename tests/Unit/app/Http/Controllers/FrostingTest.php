<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;

class FrostingTest extends TestCase
{
    
    private $frosting;

    public function setUp(): void 
    {
        $this->frosting = new FrostingController();
    }

    /**
     * @test
     */
    public function shouldBeReturnedCakeFrosting()
    {
        $cakeFrosting = "cobertura fracionada sabor chocolate ao leite";

        $this->frosting->setFrosting($cakeFrosting);

        $this->assertEquals($cakeFrosting, $this->frosting->getFrosting());
    }

    /**
     * @test
     */
    public function shouldBeReturnedCakeFrostingQuantity()
    {
        $cakeFrostingQuantity = "500g";

        $this->frosting->setFrostingQuantity($cakeFrostingQuantity);

        $this->assertEquals($cakeFrostingQuantity, $this->frosting->getFrostingQuantity());
    }
} 
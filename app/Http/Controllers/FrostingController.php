<?php 

namespace App\Http\Controllers;

class FrostingController extends Controller
{

    private string $frosting;
    private string $frostingQuantity;

    public function setFrosting(string $frosting): void
    {
        $this->frosting = $frosting;
    }

    public function setFrostingQuantity(string $frostingQuantity): void
    {
        $this->frostingQuantity = $frostingQuantity;
    }

    public function getFrosting(): string
    {
        return $this->frosting;
    }

    public function getFrostingQuantity(): string
    {
        return $this->frostingQuantity;
    }
}
<?php 

namespace App\Http\Controllers;

class FillingController extends Controller
{
    
    private string $filling;
    private string $fillingQuantity;

    public function setFilling(string $filling): void
    {
        $this->filling = $filling;
    }

    public function setFillingQuantity(string $fillingQuantity): void
    {
        $this->fillingQuantity = $fillingQuantity;
    }

    public function getFilling(): string
    {
        return $this->filling;
    }

    public function getFillingQuantity(): string
    {
        return $this->fillingQuantity;
    }
}
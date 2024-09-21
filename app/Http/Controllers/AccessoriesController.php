<?php 

namespace App\Http\Controllers;

class AccessoriesController extends Controller 
{
    private array $accessories = [];

    public function setAccessories(string $accessory): void
    {
        $this->accessories[] = $accessory;
    }

    public function getAccessories(): array
    {
        return $this->accessories;
    }
}
<?php 

namespace App\Interfaces;

interface DoughServiceInterface
{
    public function create(array $ingredients): array;

    public function baking(): string;

}
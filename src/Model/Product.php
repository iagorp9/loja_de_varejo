<?php

namespace APP\Model;

class Product
{
    // Propriedades
    private string $name;
    private float $price;
    private int $quantity;
    private bool $isActive;

    public function __construct(
        // Atributos/objetos
        string $name,
        float $price,
        int $quantity,
        bool $isActive = true,
    )
    {
        // Atribuição de valores para a classe/parametro
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->isActive = $isActive;
    }
}
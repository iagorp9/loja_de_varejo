<?php

namespace APP\Model;

class Provider
{
    // Propriedades
    private string $name;
    private int $phone;
    private int $cnpj;
    private string $address;
    private bool $isActive;

    public function __construct(
        // Atributos/objetos
        string $name,
        int $phone,
        int $cnpj,
        string $address,
        bool $isActive = true,
    )
    {
        // Atribuição de valores para a classe/parametro
        $this->name = $name;
        $this->phone = $phone;
        $this->cnpj = $cnpj;
        $this->address = $address;
        $this->isActive = $isActive;
    }
}
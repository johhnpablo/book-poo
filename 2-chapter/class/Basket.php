<?php

class Basket
{
    private $time;
    private array $items;

    public function __construct()
    {
        $this->time = date('Y-m-d H:i:s');
        $this->items = [];
    }

    public function addItem(Product $product): self
    {
        $this->items[] = $product;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTime()
    {
        return $this->time;
    }

}
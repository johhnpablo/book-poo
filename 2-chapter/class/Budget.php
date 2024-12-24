<?php

class Budget
{
    private $items;

    public function add(\Interfaces\BudgetableInterface $product, $quantity){
        $this->items[] = [
            $quantity,
            $product
        ];
    }

    public function totalCalculates()
    {
        $total = 0;

        foreach($this->items as $item){
            $total += ($item[0] * $item[1]->getPrice());
        }
        return $total;
    }
}
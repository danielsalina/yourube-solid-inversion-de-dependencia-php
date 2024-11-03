<?php

// 

namespace Models;

use Discounts\DiscountInterface;

class Order
{
    private $products = [];
    private $total = 0;
    private $discount;

    public function addProduct(Product $product, int $quantity)
    {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
        $this->total += $product->getPrice() * $quantity;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setDiscount(DiscountInterface  $discount): void
    {
        $this->discount = $discount;
    }

    public function calculateTotalWithDiscount(): float
    {
        if ($this->discount) {
            return $this->discount->apply($this);
        }

        return $this->getTotal();
    }
}

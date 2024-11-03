<?php

namespace Models;

class DigitalProduct extends Product
{
  public function __construct(int $id, string $name, float $price)
  {
    parent::__construct($id, $name, $price);
  }

  public function generateDownloadLink(): string
  {
    return "Enlace de descarga generado para el producto digital '{$this->name}' => https://www.youtube.com/@Dani-Code ❤";
  }

  public function getDiscountedPrice(): float
  {
    return $this->price / 2;
  }
}

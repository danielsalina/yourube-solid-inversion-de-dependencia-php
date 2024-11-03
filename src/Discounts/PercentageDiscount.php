<?php

// 

namespace Discounts;

use Models\Order;

class PercentageDiscount implements PercentageDiscountInterface
{
  private float $percent;

  public function __construct(float $percent)
  {
    $this->percent = $percent;
  }

  // Implementa el método de la interfaz específica
  public function applyPercentageDiscount(Order $order): float
  {
    $total = $order->getTotal();
    return $total - ($total * ($this->percent / 100));
  }

  // También implementa el método general de la interfaz DiscountInterface
  public function apply(Order $order): float
  {
    return $this->applyPercentageDiscount($order);
  }
}

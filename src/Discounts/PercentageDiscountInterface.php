<?php

// 

namespace Discounts;

use Models\Order;

interface PercentageDiscountInterface extends DiscountInterface
{
  public function applyPercentageDiscount(Order $order): float;
}

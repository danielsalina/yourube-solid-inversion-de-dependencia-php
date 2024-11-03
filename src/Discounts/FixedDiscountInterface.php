<?php

// 

namespace Discounts;

use Models\Order;

interface FixedDiscountInterface extends DiscountInterface
{
  public function applyFixedDiscount(Order $order): float;
}

<?php

// 

namespace Discounts;

use Models\Order;

interface DiscountInterface
{
  public function apply(Order $order): float;
}

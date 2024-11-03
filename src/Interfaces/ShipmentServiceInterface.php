<?php

namespace Interfaces;

use Models\Order;

interface ShipmentServiceInterface
{
  public function processShipment(Order $order): void;
}

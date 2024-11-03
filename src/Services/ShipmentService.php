<?php

namespace Services;

use Interfaces\ShipmentServiceInterface;
use Models\Order;

class ShipmentService implements ShipmentServiceInterface
{
    public function processShipment(Order $order): void
    {
        echo "Envío procesado para pedido con total: {$order->getTotal()}\n";
    }
}

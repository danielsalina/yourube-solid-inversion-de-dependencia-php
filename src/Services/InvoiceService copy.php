<?php

namespace Services;

use Models\Order;

class InvoiceService
{
    public function sendInvoice(Order $order): void
    {
        echo "Factura enviada por pedido con total: {$order->getTotal()}\n";
    }
}

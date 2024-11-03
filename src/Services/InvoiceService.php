<?php

namespace Services;

use Interfaces\InvoiceServiceInterface;
use Models\Order;

class InvoiceService implements InvoiceServiceInterface
{
    public function sendInvoice(Order $order): void
    {
        echo "Factura enviada por pedido con total: {$order->getTotal()}\n";
    }
}

<?php

namespace Services;

use Interfaces\InvoiceServiceInterface;
use Interfaces\ShipmentServiceInterface;

namespace Services;

use Interfaces\InvoiceServiceInterface;
use Interfaces\ShipmentServiceInterface;
use Models\Order;

class OrderProcessor
{
    public function __construct(
        private InvoiceServiceInterface $invoiceService,
        private ShipmentServiceInterface $shipmentService
    ) {}

    public function process(Order $order): void
    {
        echo "Ejemplo aplicando el principio de Inversión de Dependencia => ";
        $this->invoiceService->sendInvoice($order);
        echo "Ejemplo aplicando el principio de Inversión de Dependencia => ";
        $this->shipmentService->processShipment($order);
    }
}

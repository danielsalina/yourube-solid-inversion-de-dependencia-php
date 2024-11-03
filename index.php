<?php

require_once 'vendor/autoload.php';

use Models\Product;
use Models\Order;
use Models\PhysicalProduct;
use Models\DigitalProduct;
use Services\OrderProcessor;
use Services\InvoiceService;
use Services\ShipmentService;

// Crear productos
$product1 = new Product(1, "Laptop", 100);
$product2 = new Product(2, "Mouse", 100);
$product3 = new DigitalProduct(3, "Ebook", 100);
$product4 = new PhysicalProduct(4, "Laptop", 100);
$product5 = new DigitalProduct(5, "Software", 100);

// Crear servicios
$invoiceService = new InvoiceService();
$shipmentService = new ShipmentService();

// Crear OrderProcessor con dependencias inyectadas
$orderProcessor = new OrderProcessor($invoiceService, $shipmentService);

// Procesar un pedido
$order = new Order();
$order->addProduct($product1, 1);
$order->addProduct($product2, 2);
$order->addProduct($product3, 3);
$order->addProduct($product4, 4);
$order->addProduct($product5, 5);
$orderProcessor->process($order);

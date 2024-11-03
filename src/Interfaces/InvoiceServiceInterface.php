<?php

namespace Interfaces;

use Models\Order;

interface InvoiceServiceInterface
{
  public function sendInvoice(Order $order): void;
}

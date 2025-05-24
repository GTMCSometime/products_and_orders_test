<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Service\Order\OrderStoreService;
use App\Service\Order\OrderUpdateService;

abstract class OrderBaseController extends Controller
{
    public $orderStoreService;
    public $orderUpdateService;


    public function __construct(
        OrderStoreService $orderStoreService,
        OrderUpdateService $orderUpdateService,
        ) {
        $this->orderStoreService = $orderStoreService;
        $this->orderUpdateService = $orderUpdateService;
    }
}

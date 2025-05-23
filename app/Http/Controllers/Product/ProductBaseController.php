<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductStoreService;
use App\Service\Product\ProductUpdateService;

abstract class ProductBaseController extends Controller
{
    public $productStoreService;
    public $productUpdateService;


    public function __construct(
        ProductStoreService $productStoreService,
        ProductUpdateService $productUpdateService,
        ) {
        $this->productStoreService = $productStoreService;
        $this->productUpdateService = $productUpdateService;
    }
}

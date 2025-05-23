<?php

namespace App\Service\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductStoreService  {

    public function store(array $data) {
        DB::beginTransaction();
        try {
            Product::create($data);
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
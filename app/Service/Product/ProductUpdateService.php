<?php

namespace App\Service\Product;

use Illuminate\Support\Facades\DB;


class ProductUpdateService  {

    public function update($product, array $data) {
        DB::beginTransaction();
        try {
            $product->update($data);
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
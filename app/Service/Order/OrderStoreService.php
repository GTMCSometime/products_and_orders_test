<?php

namespace App\Service\Order;

use App\Models\Order;
use Illuminate\Support\Facades\DB;


class OrderStoreService  {

    public function store(array $data) {
        DB::beginTransaction();
        try {
            Order::create($data);
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
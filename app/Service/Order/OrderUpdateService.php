<?php

namespace App\Service\Order;

use Illuminate\Support\Facades\DB;


class OrderUpdateService  {

    public function update($order, array $data) {
        DB::beginTransaction();
        try {
            $order->update($data);
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }
    }
}
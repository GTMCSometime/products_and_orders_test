<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Order\OrderBaseController;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Http\Requests\Order\OrderUpdateRequest;
use App\Models\Order;
use App\Models\Product;

class OrderController extends OrderBaseController
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }

    
    public function create()
    {
        $products = Product::all();
        return view('order.create', compact('products'));
    }

    
    public function store(OrderStoreRequest $request)
    {
        try {
            $data = $request->validated();
            $this->orderStoreService->store($data);
            return redirect()->route('orders.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    
    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    
    public function edit(Order $order)
    {
        $products = Product::all();
        return view('order.edit', compact('order', 'products'));
    }

    
    public function update(OrderUpdateRequest $request, Order $order)
    {
        try {
            $data = $request->validated();
            $this->orderUpdateService->update($order, $data);
            return redirect()->route('orders.index');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    
    public function complete(Order $order) {
        $order->update([
            'status' => Order::COMPLETED,
        ]);
        return redirect()->back();
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}

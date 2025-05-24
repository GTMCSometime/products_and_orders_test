<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = [
        'customer_name',
        'product_id',
        'created_at',
        'status',
        'customer_comment',
        'product_count',
        'total_price',
    ];


    const NEW = 'новый';
    const COMPLETED = 'выполнен';


    protected static function boot()
    {
            parent::boot();
        
            static::creating(function ($order) {
                $order->total_price = $order->getTotalPrice();
            });
    }
    
    
    public function getTotalPrice(): string
    {
        return $this->product->price * $this->product_count;
    }

    
    public function product(){
        return $this->belongsTo(Product::class);
    }
}

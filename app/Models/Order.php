<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $table = 'orders';
    protected $fillable = [
        'customer_name',
        'created_at',
        'status',
        'customer_comment',
    ];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}

<?php

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('customer_name');
            $table->timestamp('created_at')->default(Carbon::now());
            $table->string('status')->default(Order::NEW);
            $table->text('customer_comment')->nullable();
            $table->smallInteger('product_count');
            $table->decimal('total_price', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

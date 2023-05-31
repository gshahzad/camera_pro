<?php

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
            $table->id('order_id');
			$table->double('order_total', 14, 2)->default(0);
			$table->string('transaction_id')->nullable();
			$table->dateTime('order_date')->nullable();
			$table->string('customer_name')->nullable();
			$table->string('customer_email')->nullable();
			$table->string('customer_address')->nullable();
			$table->string('customer_city')->nullable();
			$table->string('post_code')->nullable();
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

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
            $table->id();
            $table->string('customer_id');
            $table->string('receiver_name');
            $table->string('receiver_mobile')->nullable();
            $table->string('receiver_email');
            $table->string('receiver_address');
            $table->string('receiver_city');
            $table->string('subtotal');
            $table->string('Total');
            $table->string('Payment_Method');
            $table->string('Pay_Status')->default('un-paid');
            $table->string('status')->default('pending');
            $table->timestamps();
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

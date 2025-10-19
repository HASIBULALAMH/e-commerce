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
        Schema::table('orders', function (Blueprint $table) {
            // Drop existing columns if they exist (except subtotal which we'll keep)
            $columnsToDrop = [
                'customer_id',
                'receiver_name',
                'receiver_mobile',
                'receiver_email',
                'receiver_address',
                'receiver_city',
                'Total',
                'Payment_Method',
                'Pay_Status'
            ];

            foreach ($columnsToDrop as $column) {
                if (Schema::hasColumn('orders', $column)) {
                    $table->dropColumn($column);
                }
            }

            // Add new columns if they don't exist
            if (!Schema::hasColumn('orders', 'user_id')) {
                $table->foreignId('user_id')->nullable();
            }
            if (!Schema::hasColumn('orders', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('orders', 'email')) {
                $table->string('email');
            }
            if (!Schema::hasColumn('orders', 'phone')) {
                $table->string('phone')->nullable();
            }
            if (!Schema::hasColumn('orders', 'address')) {
                $table->text('address');
            }
            if (!Schema::hasColumn('orders', 'city')) {
                $table->string('city');
            }
            if (!Schema::hasColumn('orders', 'postal_code')) {
                $table->string('postal_code')->nullable();
            }
            // Add subtotal if it doesn't exist
            if (!Schema::hasColumn('orders', 'subtotal')) {
                $table->decimal('subtotal', 12, 2);
            }
            
            // Add shipping_cost after ensuring subtotal exists
            if (!Schema::hasColumn('orders', 'shipping_cost')) {
                $table->decimal('shipping_cost', 10, 2)->default(0);
            }
            if (!Schema::hasColumn('orders', 'tax')) {
                $table->decimal('tax', 10, 2)->default(0);
            }
            if (!Schema::hasColumn('orders', 'total')) {
                $table->decimal('total', 12, 2);
            }
            // First add payment_method if it doesn't exist
            // Add payment_method if it doesn't exist
            if (!Schema::hasColumn('orders', 'payment_method')) {
                $table->string('payment_method')->nullable();
            }
            
            // Add payment_status if it doesn't exist
            if (!Schema::hasColumn('orders', 'payment_status')) {
                $table->boolean('payment_status')->default(false);
            }
            if (!Schema::hasColumn('orders', 'transaction_id')) {
                $table->string('transaction_id')->nullable();
            }
            if (!Schema::hasColumn('orders', 'status')) {
                $table->string('status')->default('pending');
            }

            // Add foreign key constraints if they don't exist
            if (!Schema::hasColumn('orders', 'user_id_foreign')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Drop foreign keys first if they exist
            if (Schema::hasColumn('orders', 'user_id_foreign')) {
                $table->dropForeign(['user_id']);
            }

            // Drop new columns if they exist
            $columnsToDrop = [
                'user_id',
                'name',
                'email',
                'phone',
                'address',
                'city',
                'postal_code',
                'subtotal',
                'shipping_cost',
                'tax',
                'total',
                'payment_method',
                'payment_status',
                'transaction_id',
                'status'
            ];

            foreach ($columnsToDrop as $column) {
                if (Schema::hasColumn('orders', $column)) {
                    $table->dropColumn($column);
                }
            }

            // Add back old columns if they don't exist
            if (!Schema::hasColumn('orders', 'customer_id')) {
                $table->string('customer_id');
            }
            if (!Schema::hasColumn('orders', 'receiver_name')) {
                $table->string('receiver_name');
            }
            if (!Schema::hasColumn('orders', 'receiver_mobile')) {
                $table->string('receiver_mobile')->nullable();
            }
            if (!Schema::hasColumn('orders', 'receiver_email')) {
                $table->string('receiver_email');
            }
            if (!Schema::hasColumn('orders', 'receiver_address')) {
                $table->string('receiver_address');
            }
            if (!Schema::hasColumn('orders', 'receiver_city')) {
                $table->string('receiver_city');
            }
            if (!Schema::hasColumn('orders', 'subtotal')) {
                $table->string('subtotal');
            }
            if (!Schema::hasColumn('orders', 'Total')) {
                $table->string('Total');
            }
            if (!Schema::hasColumn('orders', 'Payment_Method')) {
                $table->string('Payment_Method');
            }
            if (!Schema::hasColumn('orders', 'Pay_Status')) {
                $table->string('Pay_Status')->default('un-paid');
            }
            if (!Schema::hasColumn('orders', 'status')) {
                $table->string('status')->default('pending');
            }
        });
    }
}; 
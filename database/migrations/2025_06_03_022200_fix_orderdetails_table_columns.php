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
        Schema::table('orderdetails', function (Blueprint $table) {
            // Drop existing columns if they exist
            if (Schema::hasColumn('orderdetails', 'pro_quentity')) {
                $table->dropColumn('pro_quentity');
            }
            if (Schema::hasColumn('orderdetails', 'unit_price')) {
                $table->dropColumn('unit_price');
            }
            if (Schema::hasColumn('orderdetails', 'subtotal')) {
                $table->dropColumn('subtotal');
            }

            // Add new columns if they don't exist
            if (!Schema::hasColumn('orderdetails', 'quantity')) {
                $table->integer('quantity')->after('product_id');
            }
            if (!Schema::hasColumn('orderdetails', 'price')) {
                $table->decimal('price', 10, 2)->after('quantity');
            }
            if (!Schema::hasColumn('orderdetails', 'discount')) {
                $table->decimal('discount', 10, 2)->default(0)->after('price');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            // Drop new columns if they exist
            if (Schema::hasColumn('orderdetails', 'quantity')) {
                $table->dropColumn('quantity');
            }
            if (Schema::hasColumn('orderdetails', 'price')) {
                $table->dropColumn('price');
            }
            if (Schema::hasColumn('orderdetails', 'discount')) {
                $table->dropColumn('discount');
            }

            // Add back old columns if they don't exist
            if (!Schema::hasColumn('orderdetails', 'pro_quentity')) {
                $table->string('pro_quentity');
            }
            if (!Schema::hasColumn('orderdetails', 'unit_price')) {
                $table->string('unit_price');
            }
            if (!Schema::hasColumn('orderdetails', 'subtotal')) {
                $table->string('subtotal');
            }
        });
    }
};

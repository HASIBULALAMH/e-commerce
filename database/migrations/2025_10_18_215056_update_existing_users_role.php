<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update existing users to have the default 'customer' role
        if (Schema::hasColumn('users', 'role')) {
            DB::table('users')->whereNull('role')->update(['role' => 'customer']);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // This is a data migration, so there's nothing to reverse
    }
};

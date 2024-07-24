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
        Schema::table('maintenance_requests', function (Blueprint $table) {
            // Check and drop the columns
            if (Schema::hasColumn('maintenance_requests', 'customer_id')) {
                $table->dropColumn('customer_id');
            }
            if (Schema::hasColumn('maintenance_requests', 'technician_id')) {
                $table->dropColumn('technician_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('maintenance_requests', function (Blueprint $table) {
            // Re-add the columns if needed
            if (!Schema::hasColumn('maintenance_requests', 'customer_id')) {
                $table->foreignId('customer_id')->constrained();
            }
            if (!Schema::hasColumn('maintenance_requests', 'technician_id')) {
                $table->foreignId('technician_id')->constrained();
            }
        });
    }
};

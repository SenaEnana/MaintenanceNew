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
            // Add the customer_id field and set up the foreign key constraint
            $table->foreignId('customer_id')->constrained('customers')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('maintenance_requests', function (Blueprint $table) {
            // Drop the foreign key constraint and the customer_id field
            $table->dropForeign(['customer_id']);
            $table->dropColumn('customer_id');
        });
    }
};

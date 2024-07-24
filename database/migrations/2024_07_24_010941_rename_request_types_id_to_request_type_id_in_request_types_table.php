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
        Schema::table('request_types', function (Blueprint $table) {
            if (Schema::hasColumn('request_types', 'request_types_id')) {
                $table->renameColumn('request_types_id', 'request_type_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request_types', function (Blueprint $table) {
            if (Schema::hasColumn('request_types', 'request_types_id')) {
                $table->renameColumn('request_types_id', 'request_type_id');
            }
        });
    }
};

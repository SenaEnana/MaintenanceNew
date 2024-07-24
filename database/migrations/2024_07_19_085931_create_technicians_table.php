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
        Schema::table('technicians', function (Blueprint $table) {
            if (!Schema::hasColumn('technicians', 'id')) {
                $table->bigIncrements('id');
            }
            if (!Schema::hasColumn('technicians', 'technician_id')) {
                $table->string('technician_id');
            }
            if (!Schema::hasColumn('technicians', 'first_name')) {
                $table->string('first_name');
            }
            if (!Schema::hasColumn('technicians', 'last_name')) {
                $table->string('last_name');
            }
            if (!Schema::hasColumn('technicians', 'email')) {
                $table->string('email')->unique();
            }
            if (!Schema::hasColumn('technicians', 'phone')) {
                $table->string('phone');
            }
            if (!Schema::hasColumn('technicians', 'job_type_id')) {
                $table->foreignId('job_type_id')->constrained();
            }
            if (!Schema::hasColumn('technicians', 'location_id')) {
                $table->foreignId('location_id')->constrained();
            }
            if (!Schema::hasColumn('technicians', 'created_at') || !Schema::hasColumn('technicians', 'updated_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('technicians', function (Blueprint $table) {
            $table->dropForeign(['job_type_id']);
            $table->dropForeign(['location_id']);
        });

        Schema::dropIfExists('technicians');
    }
};

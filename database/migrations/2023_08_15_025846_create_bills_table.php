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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('shop_id');
            $table->string('staff_id');
            $table->string('reference_code');
            $table->string('customer_adult')->nullable();
            $table->string('customer_children')->nullable();
            $table->string('customer_baby')->nullable();
            $table->string('table_id');
            $table->string('package_main');
            $table->string('package_secondary');
            $table->timestamp('registered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};

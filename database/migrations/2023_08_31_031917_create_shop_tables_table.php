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
        Schema::create('shop_tables', function (Blueprint $table) {
            $table->id();
            $table->string('table_number');
            $table->string('customer_adult')->nullable();
            $table->string('customer_children')->nullable();
            $table->string('customer_baby')->nullable();
            $table->string('table_type')->nullable();
            $table->string('table_status')->nullable();
            $table->string('shop_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_tables');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\gantsilyoSYSTEM\gantsilyoSYSTEM\database\migrations\2024_03_28_093408_add_customer_id_and_order_status_to_order_list_table.php
     */
    public function up(): void
    {
        Schema::table('order_list', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->index();
            $table->unsignedBigInteger('customer_id')->index();

            // Define foreign key constraints
            $table->foreign('status_id')->references('id')->on('order_status')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_list', function (Blueprint $table) {
            //
        });
    }
};

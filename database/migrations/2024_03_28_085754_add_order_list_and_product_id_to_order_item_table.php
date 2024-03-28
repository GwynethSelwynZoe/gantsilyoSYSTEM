<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\gantsilyoSYSTEM\gantsilyoSYSTEM\database\migrations\2024_03_28_085754_add_order_list_and_product_id_to_order_item_table.php
     */
    public function up(): void
    {
        Schema::table('order_item', function (Blueprint $table) {
            $table->unsignedBigInteger('order_list_id')->index();
            $table->unsignedBigInteger('product_id')->index();

            $table->foreign('order_list_id')->references('id')->on('order_list')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_item', function (Blueprint $table) {
            //
        });
    }
};

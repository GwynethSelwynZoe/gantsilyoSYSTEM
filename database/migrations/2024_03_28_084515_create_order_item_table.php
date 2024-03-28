<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.C:\ComProgProject\gantsilyoSYSTEM\gantsilyoSYSTEM\database\migrations\2024_03_28_084515_create_order_item_table.php
     */
    public function up(): void
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->integer('qty');
            $table->integer('unitprice');
            $table->integer('totalprice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};

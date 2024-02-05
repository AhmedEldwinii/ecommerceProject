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
        Schema::create('product_color_sizes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_size_id')->constranind();
            $table->foreignId('product_color_id')->constrained();
            $table->integer('quantity');
            $table->decimal('price_two',10,2)->default(0)->nullable();
            $table->decimal('discount',10,2)->default(0)->nullable();
            $table->integer('status')->default(1);      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_sizes');
    }
};

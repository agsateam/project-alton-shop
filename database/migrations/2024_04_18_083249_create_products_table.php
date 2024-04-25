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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('name');
            $table->string('price');
            $table->integer('rating')->default(0);
            $table->text('sizes');
            $table->text('stock');
            $table->string('sizeChartImage');
            $table->mediumText('description');
            $table->boolean('is_promo')->default(false);
            $table->string('promo_price')->default('0');
            $table->string('category');
            $table->string('sub_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

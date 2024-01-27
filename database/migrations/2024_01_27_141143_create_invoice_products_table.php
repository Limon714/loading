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
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();

            $table->string("qty",50);
            $table->string("sales_price",50);

            $table->unsignedBigInteger("user_id")->unique();
            $table->foreign("user_id")->references("id")->on("users")
            ->restrictOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger("product_id")->unique();
            $table->foreign("product_id")->references("id")->on("products")
            ->restrictOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger("invoice_id")->unique();
            $table->foreign("invoice_id")->references("id")->on("invoices")
            ->restrictOnDelete()
            ->cascadeOnUpdate();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};

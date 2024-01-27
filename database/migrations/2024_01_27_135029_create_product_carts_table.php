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
        Schema::create('product_carts', function (Blueprint $table) {
            $table->id();

            
            $table->string("color",200);
            $table->string("size",100);
            $table->string("qty",200);
            $table->string("price",200);

            $table->unsignedBigInteger("product_id")->unique();
            $table->foreign("product_id")->references("id")->on("products")
            ->restrictOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger("user_id")->unique();
            $table->foreign("user_id")->references("id")->on("users")
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
        Schema::dropIfExists('product_carts');
    }
};

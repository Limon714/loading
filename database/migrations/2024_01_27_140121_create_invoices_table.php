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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string("total",50);
            $table->string("vat", 50);
            $table->string("payable", 50);

            $table->string("customer_details", 500);
            $table->string("shiping_address", 500);
            $table->string("tran_id", 250);
            $table->string("validation_id", 250)->default(0);

            $table->enum("delivery_status",["pending","processing","complete"]);
            $table->string("payment_status");

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
        Schema::dropIfExists('invoices');
    }
};

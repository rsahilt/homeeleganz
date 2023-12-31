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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->decimal('sub_total', 10, 2);
            $table->decimal('pst', 10, 2)->nullable();
            $table->decimal('gst', 10, 2)->nullable();
            $table->decimal('hst', 10, 2)->nullable();
            $table->decimal('total', 10, 2);
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->bigInteger('user_id');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

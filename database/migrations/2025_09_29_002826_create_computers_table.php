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
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id_computer');
            $table->string('computer_brand', 100);
            $table->string('computer_model', 100);
            $table->double('computer_price', 10, 2);
            $table->integer('computer_ram_size');
            $table->boolean('computer_is_laptop');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};

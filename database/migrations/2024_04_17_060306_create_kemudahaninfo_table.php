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
        Schema::create('kemudahaninfo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jkdb')->length(11)->unsigned();
            $table->integer('kodselamat')->length(11)->unsigned();
            $table->char('namaselamat',100);
            $table->integer('bilselamat')->length(11)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kemudahaninfo');
    }
};

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
        Schema::create('orgnsinfo', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jkdb')->length(11)->unsigned();
            $table->integer('kodorgns')->length(11)->unsigned();
            $table->char('namaorgns',100);
            $table->integer('bilorgns')->length(11)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orgnsinfo');
    }
};

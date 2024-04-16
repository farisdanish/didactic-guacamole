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
        Schema::create('pendidikaninfo', function (Blueprint $table) {
            $table->bigIncrements('kodpendidik')->primary();
            $table->char('namapendidik',100);
            $table->char('failpendidik',100);
            $table->char('daftar',12);
            $table->dateTime('tardaftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikaninfo');
    }
};

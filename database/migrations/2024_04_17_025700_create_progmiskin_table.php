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
        Schema::create('progmiskin', function (Blueprint $table) {
            $table->increments('kodmiskin');
            $table->char('namamiskin',35);
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
        Schema::dropIfExists('progmiskin');
    }
};

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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id();
            $table->char('nokp',12)->unique();
            $table->char('nama',100);
            $table->char('katalaluan',255);
            $table->char('stesen',10);
            $table->integer('jawatan')->length(11)->unsigned();
            $table->char('gred',4);
            $table->integer('paras')->length(1)->unsigned();
            $table->integer('aktif')->length(1)->unsigned();
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
        Schema::dropIfExists('pengguna');
    }
};

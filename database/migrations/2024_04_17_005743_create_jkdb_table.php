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
        Schema::create('jkdb', function (Blueprint $table) {
            $table->id();
            $table->char('tahun',4);
            $table->integer('id_jkdb')->length(11)->unsigned();
            $table->char('notel',11);
            $table->char('nama',100);
            $table->integer('dun')->length(11)->unsigned();
            $table->char('alamat1',150);
            $table->char('alamat2',150);
            $table->char('poskod',5);
            $table->integer('daerah')->length(11)->unsigned();
            $table->char('pengerusi',12);
            $table->char('setiausaha',12);
            $table->char('kewangan',12);
            $table->char('inovasi',12);
            $table->char('prasarana',12);
            $table->char('kesihatan',12);
            $table->char('spiritual',12);
            $table->char('halwanita',12);
            $table->char('beliasukan',12);
            $table->char('keceriaan',12);
            $table->char('lengkap',1);
            $table->char('sedia',12);
            $table->dateTime('tarsedia');
            $table->char('perakui',12);
            $table->dateTime('tarperakui');
            $table->char('sah',12);
            $table->char('namasah',150);
            $table->dateTime('tarsah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jkdb');
    }
};

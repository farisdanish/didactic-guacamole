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
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->char('tahun',4);
            $table->integer('id_jkdb')->length(11)->unsigned();
            $table->integer('kodjwtnjkdb')->length(11)->unsigned();
            $table->char('nama',100);
            $table->char('nokp',12);
            $table->dateTime('tarikhlahir');
            $table->integer('kaum')->length(11)->unsigned();
            $table->char('jantina',1);
            $table->char('alamat1',150);
            $table->char('alamat2',150);
            $table->integer('partikerajaan')->length(11)->unsigned();
            $table->integer('penjawat')->length(11)->unsigned();
            $table->char('kebenarankj',1);
            $table->dateTime('tarikhkj');
            $table->char('namakj',100);
            $table->char('jawatankj',100);
            $table->char('gredkj',100);
            $table->char('failkj',150);
            $table->integer('pendidik')->length(11)->unsigned();
            $table->char('pendidiklain',150);
            $table->char('failpendidik',150);
            $table->char('penyakitstatus',1);
            $table->char('penyakit1',150);
            $table->char('penyakit2',150);
            $table->char('penyakit3',150);
            $table->char('muflis',1);
            $table->char('jenayah',1);
            $table->char('dadah',1);
            $table->char('sihat',150);
            $table->dateTime('tamohon');
            $table->char('hantar',1);
            $table->char('sokong',1);
            $table->char('nokp_sokong',12);
            $table->dateTime('tarsokong');
            $table->char('terima',12);
            $table->dateTime('tarterima');
            $table->integer('stesen')->length(11)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemohon');
    }
};

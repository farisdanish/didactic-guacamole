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
        Schema::create('kawasaninfo', function (Blueprint $table) {
            $table->id();
            $table->string('nama',150);
            $table->float('saiz');
            $table->float('luas');
            $table->float('latitud');
            $table->float('logitud');
            $table->integer('pengurus_professional')->length(11)->unsigned();
            $table->integer('sokongan1')->length(11)->unsigned();
            $table->integer('sokongan2')->length(11)->unsigned();
            $table->integer('eksekutif')->length(11)->unsigned();
            $table->integer('eksekutif_x')->length(11)->unsigned();
            $table->integer('Berniaga')->length(11)->unsigned();
            $table->integer('pemiliksyarikat')->length(11)->unsigned();
            $table->integer('Pengusahaiks')->length(11)->unsigned();
            $table->integer('Peruncit')->length(11)->unsigned();
            $table->integer('Pemborong')->length(11)->unsigned();
            $table->integer('Peniagagerai')->length(11)->unsigned();
            $table->integer('Pesara_kerajaan')->length(11)->unsigned();
            $table->integer('Pesara_swasta')->length(11)->unsigned();
            $table->char('kerja1_nama',100);
            $table->integer('kerja1_bil')->length(11)->unsigned();
            $table->char('kerja2_nama',100);
            $table->integer('kerja2_bil')->length(11)->unsigned();
            $table->char('kerja3_nama',100);
            $table->integer('kerja3_bil')->length(11)->unsigned();
            $table->char('kerja4_nama',100);
            $table->integer('kerja4_bil')->length(11)->unsigned();
            $table->integer('kir_ekasih')->length(11)->unsigned();
            $table->integer('air')->length(11)->unsigned();
            $table->char('lengkap',1);
            $table->char('sedia',12);
            $table->dateTime('tarsedia');
            $table->char('semak',12);
            $table->dateTime('tarsemak');
            $table->char('sah',12);
            $table->dateTime('tarsah');
            $table->char('edit',12);;
            $table->dateTime('taredit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kawasaninfo');
    }
};

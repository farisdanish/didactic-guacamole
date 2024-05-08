<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;

    protected $table = 'pemohon';

    protected $fillable = [
        'tahun',
        'id_jkdb',
        'kodjwtnjkdb',
        'nama',
        'nokp',
        'tarikhlahir',
        'kaum',
        'jantina',
        'alamat1',
        'alamat2',
        'notel',
        'emel',
        'bank',
        'noakaun',
        'failakaun',
        'partikerajaan',
        'penjawat',
        // 'kebenarankj',
        // 'tarikhkj',
        // 'namakj',
        // 'jawatankj',
        // 'gredkj',
        'failkj',
        'pendidik',
        'pendidiklain',
        'failpendidik',
        'penyakitstatus',
        'penyakit1',
        'penyakit2',
        'penyakit3',
        'muflis',
        'jenayah',
        'dadah',
        'sihat',
        'tamohon',
        'hantar',
        'sokong',
        'nokp_sokong',
        'tarsokong',
        'terima',
        'tarterima',
        'stesen'
    ];
}

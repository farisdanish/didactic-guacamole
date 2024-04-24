<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use Illuminate\Http\Request;

class PemohonController extends Controller
{
    public function create_permohonan(Request $request){
        $incomingFields = $request->validate([
            'tahun' => "required",
            'id_jkdb' => "required",
            'kodjwtnjkdb' => "required",
            'nama' => "required",
            'nokp' => "required",
            'tarikhlahir' => "required",
            'kaum' => "required",
            'jantina' => "required",
            'alamat1' => "required",
            'alamat2',
            'partikerajaan' => "required",
            'penjawat' => "required",
            'kebenarankj' => "required",
            'tarikhkj',
            'namakj' => "required",
            'jawatankj' => "required",
            'gredkj' => "required",
            'failkj' => "required",
            'pendidik' => "required",
            'pendidiklain',
            'failpendidik' => "required",
            'penyakitstatus' => "required",
            'penyakit1',
            'penyakit2',
            'penyakit3',
            'muflis' => "required",
            'jenayah' => "required",
            'dadah' => "required",
            'sihat' => "required",
            'tamohon',
            'hantar' => "required",
            'sokong' => "required",
            'nokp_sokong' => "required",
            'tarsokong',
            'terima' => "required",
            'tarterima',
            'stesen' => "required"
        ]);

        // $incomingFields["title"] = strip_tags($incomingFields["title"]);
        // $incomingFields["content"] = strip_tags($incomingFields["content"]);
        $incomingFields["user_id"] = auth()->id();

        // Post::create($incomingFields);
        // return redirect()->route("user.home")->with("success","Post added successfuly");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PemohonController extends Controller
{

    public function borang_permohonan(){
        //pass data from the following tables in the db
        $jkdb = DB::table('jkdb')->get();
        $daerah = DB::table('daerah')->get();
        $parlimen = DB::table('parlimen')->get();
        $dun = DB::table('dun')->get();
        $parti = DB::table('parti')->get();
        $penjawat = DB::table('penjawat')->get();
        $pendidikan = DB::table('pendidikan')->get();

        //get year
        $year = date('Y');

        //pass user variable
        return view('borang', [
            'jkdb' => $jkdb,
            'daerah' => $daerah,
            'parlimen' => $parlimen,
            'dun' => $dun, 
            'parti' => $parti, 
            'penjawat' => $penjawat, 
            'pendidikan' => $pendidikan,
            'year' => $year
        ]);
    }
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
        // $incomingFields["user_id"] = auth()->id();

        Pemohon::create($incomingFields);
        return redirect()->route("user.home")->with("success","Permohonan telah disimpan");
    }
}

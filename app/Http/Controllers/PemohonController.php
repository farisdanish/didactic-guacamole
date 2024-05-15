<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PemohonController extends Controller
{
    //view borang permohonan
    public function borang_permohonan(){
        //pass data from the following tables in the db
        $jkdb = DB::table('jkdb')->get();
        $daerah = DB::table('daerah')->get();
        $parlimen = DB::table('parlimen')->get();
        $dun = DB::table('dun')->get();
        $parti = DB::table('parti')->get();
        $penjawat = DB::table('penjawat')->get();
        $pendidikan = DB::table('pendidikan')->get();
        $kaum = DB::table('kaum')->get();
        $jawatanjkdb = DB::table('jawatanjkdb')->get();

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
            'year' => $year,
            'kaum'=>$kaum,
            'jawatanjkdb' => $jawatanjkdb
        ]);
    }

    //send permohonan to database
    public function create_permohonan(Request $request){
        $request->validate([
            'tahun' => 'required|numeric',
            'id_jkdb' => 'required',
            'kodjwtnjkdb' => 'required',
            'nama' => 'required|string',
            'nokp' => 'required|string|min:12|max:12',
            'tarikhlahir' => 'required|date',
            'kaum' => 'required|integer',
            'jantina' => 'required|in:L,P',
            'alamat1' => 'required|string',
            'alamat2' => 'nullable|string',
            'notel' => 'required|string',
            'emel' => 'required|email',
            'bank' => 'required',
            'noakaun' => 'required',
            //'failakaun' => 'required',
            'partikerajaan' => 'required',
            'penjawat' => 'required',
            // 'kebenarankj' => 'required',
            // 'tarikhkj' => 'required',
            // 'namakj' => 'required',
            // 'jawatankj' => 'required',
            // 'gredkj' => 'required',
            //'failkj' => 'required',
            'pendidik' => 'required',
            'pendidiklain' => 'nullable|string',
            //'failpendidik' => 'required',
            'penyakitstatus' => 'required',
            'penyakit1' => 'nullable|string',
            'penyakit2' => 'nullable|string',
            'penyakit3' => 'nullable|string',
            'muflis' => 'required',
            'jenayah' => 'required',
            'dadah' => 'required',
            'sihat' => 'required',
            //'failpassport' => 'required',
            //'failsalinankp' => 'required',
        ]);

        // $incomingFields["hantar"] = "N"; //Y - Dihantar, N - Belum Dihantar
        $currtime = Carbon::now(); //get current datetime
        // $incomingFields["tamohon"] = $currtime->toDateTimeString();
        // // $incomingFields["user_id"] = auth()->id();

        // Pemohon::create($incomingFields);

        try {
            $pemohon = Pemohon::create([
                'tahun' => $request->tahun,
                'id_jkdb' => $request->id_jkdb,
                'kodjwtnjkdb' => $request->kodjwtnjkdb,
                'nama'=> $request->nama,
                'nokp'=> $request->nokp,
                'tarikhlahir'=> $request->tarikhlahir,
                'kaum'=> $request->kaum,
                'jantina'=> $request->jantina,
                'alamat1'=> $request->alamat1,
                'alamat2'=> $request->alamat2,
                // 'poskod',
                // 'daerah',
                'notel'=> $request->notel,
                'emel'=> $request->emel,
                'bank'=> $request->bank,
                'noakaun'=> $request->noakaun,
                //'failakaun'=> $request->failakaun,
                'partikerajaan'=> $request->partikerajaan,
                'penjawat'=> $request->penjawat,
                // 'kebenarankj',
                // 'tarikhkj',
                // 'namakj',
                // 'jawatankj',
                // 'gredkj',
                //'failkj'=> $request->failkj,
                'pendidik'=> $request->pendidik,
                'pendidiklain'=> $request->pendidiklain,
                //'failpendidik'=> $request->failpendidik,
                'penyakitstatus'=> $request->penyakitstatus,
                'penyakit1'=> $request->penyakit1,
                'penyakit2'=> $request->penyakti2,
                'penyakit3'=> $request->penyakit3,
                'muflis'=> $request->muflis,
                'jenayah'=> $request->jenayah,
                'dadah'=> $request->dadah,
                'sihat'=> $request->sihat,
                'tamohon' => $currtime->toDateTimeString(),
                'hantar'=> "N",
                // 'sokong',
                // 'nokp_sokong',
                // 'tarsokong',
                // 'terima',
                // 'tarterima',
                // 'stesen',   
            ]);
            // success logic here
        } catch (\Illuminate\Database\QueryException $e) {
            // Log the error
            Log::error($e->getMessage());
            
            // Return a user-friendly message
            return back()->withErrors(['message' => 'There was an issue saving the data. Please try again.']);
        }
        
        //return redirect()->route('pemohon.senarai_permohonan')->with("success","Permohonan anda telah disimpan");
        //return redirect('/senarai_permohonan')->with('success', "Permohonan anda telah disimpan.");
        if ($pemohon->wasRecentlyCreated) {
            // Model was successfully created
            // You can redirect to a route and send a success message
            return redirect()->route('pemohon.senarai_permohonan')->with('success', "Permohonan anda telah disimpan.");
        } else {
            // Model was not created or there was an error
            // You can handle the error or redirect to an error page
            return redirect()->route('pemohon.senarai_permohonan')->with('error', "Permohonan and tidak disimpan.");
        }
    }
    
    public function senarai_permohonan(){
        //pass data from the following tables in the db
        $jkdb = DB::table('jkdb')->get();
        $daerah = DB::table('daerah')->get();
        $parlimen = DB::table('parlimen')->get();
        $dun = DB::table('dun')->get();
        $parti = DB::table('parti')->get();
        $penjawat = DB::table('penjawat')->get();
        $pendidikan = DB::table('pendidikan')->get();
        $pemohon = DB::table('pemohon')->get();

        //get year
        $year = date('Y');

        //pass user variable
        return view('senaraipermohonan', [
            'jkdb' => $jkdb,
            'daerah' => $daerah,
            'parlimen' => $parlimen,
            'dun' => $dun, 
            'parti' => $parti, 
            'penjawat' => $penjawat, 
            'pendidikan' => $pendidikan,
            'pemohon' => $pemohon,
            'year' => $year
        ]);
    }
}

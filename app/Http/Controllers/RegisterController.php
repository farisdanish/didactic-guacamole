<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    public function register()
    {
        $jawatan = DB::table('jawatan')->get();
        $stesen = DB::table('stesen')->get();
        $paras = DB::table('paras')->get();

        return view('register',[
            'jawatan' => $jawatan,
            'stesen' => $stesen,
            'paras' => $paras,
        ]);
    }

    public function registerPost(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'nokp' => 'required|string||max:14|unique:pengguna',
            'paras' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'stesen' => 'required',
            'jawatan' => 'required',
            'gred' => 'required',
        ]);

        $currtime = Carbon::now(); //get current datetime

        $user = new Pengguna();

        $user->nama = $request->name;
        $user->nokp = $request->nokp;
        $user->paras = $request->paras;
        $user->katalaluan = Hash::make($request->password);
        $user->stesen = $request->stesen;
        $user->jawatan = $request->jawatan;
        $user->gred = $request->gred;
        $user->aktif = "0";
        $user->tardaftar = $currtime->toDateTimeString();

        $user->save();

        return redirect()->route('login')->with('success', 'Akaun anda telah didaftar, sila daftar masuk untuk mula sesi.');
    }
}

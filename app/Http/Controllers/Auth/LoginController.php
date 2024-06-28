<?php

namespace App\Http\Controllers\Auth;

// use Carbon\Carbon;
// use App\Models\User;
// use App\Models\Pengguna;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /* Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override the credentials method to use username instead of email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return [
            'nokp' => $request->get('nokp'), // Change 'username' if needed
            'katalaluan' => $request->get('password'),
        ];
    }

    /**
     * Override the username method to define the login field.
     *
     * @return string
     */
    public function username()
    {
        return 'nokp'; // Change to 'username' if needed
    }

    // public function register()
    // {
    //     $jawatan = DB::table('jawatan')->get();
    //     $stesen = DB::table('stesen')->get();
    //     $paras = DB::table('paras')->get();

    //     return view('register',[
    //         'jawatan' => $jawatan,
    //         'stesen' => $stesen,
    //         'paras' => $paras,
    //     ]);
    // }

    // public function registerPost(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'nokp' => 'required|string||max:14|unique:pengguna',
    //         'paras' => 'required',
    //         'password' => 'required|string|min:8|confirmed',
    //         'stesen' => 'required',
    //         'jawatan' => 'required',
    //         'gred' => 'required',
    //     ]);

    //     $currtime = Carbon::now(); //get current datetime

    //     $user = new Pengguna();

    //     $user->nama = $request->name;
    //     $user->nokp = $request->nokp;
    //     $user->paras = $request->paras;
    //     $user->katalaluan = Hash::make($request->password);
    //     $user->stesen = $request->stesen;
    //     $user->jawatan = $request->jawatan;
    //     $user->gred = $request->gred;
    //     $user->aktif = "0";
    //     $user->tardaftar = $currtime->toDateTimeString();

    //     $user->save();

    //     return redirect()->route('login')->with('success', 'Akaun anda telah didaftar, sila daftar masuk untuk mula sesi.');
    // }
    
    // public function login()
    // {
    //     return view('login');
    // }
    
    // public function loginPost(Request $request)
    // {
    //     $credentials = [
    //         'nokp' => $request->nokp,
    //         'katalaluan' => $request->password,
    //     ];
    
    //     if (Auth::attempt($credentials)) {
    //         // Get the authenticated pengguna
    //         $user = Auth::user();
    
    //         // Pass user data to the view
    //         return redirect('/')->with(['success' => 'Daftar masuk berjaya - '.$user->paras, 'user' => $user]);
    //     }
    
    //     return back()->with('error', 'Salah No. Kad Pengenalan atau Kata Laluan. Sila cuba lagi');
    // }

    // public function logout()
    // {
    //     Auth::logout();

    //     return redirect()->route('login')->with('success', 'Successfully logged out');
    // }
}

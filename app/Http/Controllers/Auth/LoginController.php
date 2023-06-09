<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'home1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(){
        if(auth()->user()->role === 'admin'){
            return redirect()->route('admin.dashboard');
        }
        else if(auth()->user()->role === 'owner'){
            return redirect()->route('owner.beranda');
        }else{
            return redirect()->route('beranda.index'); //<- noted di ubah gunakan name dalam route atau tembak langsung ke controller
        }
    }

    protected function loggedOut()
    {
        return redirect()->route('login'); //<-- noted di tambah setelah berhasil logout check pada bagian dashboard fitur logout
    }
}
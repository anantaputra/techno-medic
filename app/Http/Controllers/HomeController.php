<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_active != 1){
            Auth::logout();
            return redirect()->route('login')->withErrors(['not_active' => 'Akun Anda Belum Diaktifkan Oleh Admin.']);
        }
        return view('home');
    }
}

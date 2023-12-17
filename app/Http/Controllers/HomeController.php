<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    // public function index() {
    //     return view('home.sneat');
    // }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        
        if($usertype=='1')
        {
            return view('admin.sneat');
        }
        else 
        {
            return view('home.userpage');
        }
    }
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
    // public function index()
    // {
    //     return view('home');
    // }
}

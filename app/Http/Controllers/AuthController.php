<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function customLogout(Request $request)
    {
        Auth::logout();

        // You can perform any additional actions before redirecting, if needed.

        return redirect('/login'); // Redirect to the home page or any other page you prefer.
    }
}

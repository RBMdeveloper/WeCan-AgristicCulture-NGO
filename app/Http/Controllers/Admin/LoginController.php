<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Constructor
    |--------------------------------------------------------------------------
    */

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /*
    |--------------------------------------------------------------------------
    | Show Login Form
    |--------------------------------------------------------------------------
    */

    public function showLoginForm()
    {
        /*
        |--------------------------------------------------------------------------
        | If already logged in
        |--------------------------------------------------------------------------
        */

        if (Auth::guard('admin')->check()) {

            return redirect()
                ->route('admin.dashboard');
        }

        return view('admin.index');
    }



    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()
                ->route('admin.dashboard');
        }

        return back()
            ->withInput($request->only('email'))
            ->with('login_error', 'Invalid email or password');
    }


    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('admin.login_form');
    }
}
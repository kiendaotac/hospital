<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'phone'    => 'required|numeric|min_digits:10|max_digits:12',
            'password' => 'required|string|min:6'
        ]);
        if (Auth::guard('customer')->attempt($request->only(['phone', 'password']))) {
            return redirect()->back();
        }
        return redirect()->back()->withErrors([
            'loginError'=> 'Đăng nhập thất bại'
        ]);
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->back();
    }
}

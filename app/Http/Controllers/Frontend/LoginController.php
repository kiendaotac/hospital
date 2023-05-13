<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\StatusEnum;
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
        if (Auth::guard('customer')->attempt(array_merge($request->only(['phone', 'password']), ['status' => StatusEnum::ACTIVE->value]))) {
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

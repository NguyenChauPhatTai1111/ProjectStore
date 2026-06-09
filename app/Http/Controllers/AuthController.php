<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $request->session()->regenerate();

            $user = Auth::user();

            $token = $user->api_token ?? Str::random(60);

            $user->api_token = $token;
            $user->save();

            if ($user->role === 'admin') {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Đăng nhập thành công',
                    'token' => $token,
                    'redirect' => route('admin.dashboard')
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Đăng nhập thành công',
                'token' => $token,
                'redirect' => route('home')
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Sai tài khoản hoặc mật khẩu'
        ], 401);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Đăng ký thành công');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
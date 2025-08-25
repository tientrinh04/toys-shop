<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Hiển thị form đăng nhập
    public function index()
    {
        return view('backend.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không đúng.',
        ])->onlyInput('email');
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

    // Hiển thị form đăng ký
    public function showSignupForm()
    {
        return view('backend.register');
    }

    // Xử lý đăng ký
    public function handleSignup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('auth.login')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    // Kích hoạt tài khoản (ví dụ dùng token trong URL)
    public function activateAccount($token)
    {
        // Logic kích hoạt user bằng token
        // Ví dụ: tìm user theo token, update trạng thái kích hoạt

        return redirect()->route('auth.login')->with('success', 'Tài khoản đã được kích hoạt!');
    }
}

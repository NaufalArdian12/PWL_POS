<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
        try {
            if ($request->ajax() || $request->wantsJson()) {
                $request->validate([
                    'username' => 'required|min:4|max:20',
                    'password' => 'required|min:6|max:20',
                ]);
                $credentials = $request->only('username', 'password');
                if (Auth::attempt($credentials)) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Login Berhasil',
                        'redirect' => url('/')
                    ]);
                }
                return response()->json([
                    'status' => false,
                    'message' => 'Login Gagal!',
                    'msgField' => [
                        'username' => ['Username atau Password salah'],
                        'password' => ['Username atau Password salah']
                    ]
                ]);
            }
            return redirect('login');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan di server: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        try {
            if ($request->ajax() || $request->wantsJson()) {
                $request->validate([
                    'username' => 'required|string|min:3|max:20|unique:m_users,username',
                    'nama' => 'required|string|max:100',
                    'password' => 'required|min:5|max:20',
                ]);

                UserModel::create([
                    'username' => $request->username,
                    'nama' => $request->nama,
                    'password' => bcrypt($request->password),
                    'level_id' => 4,
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Registrasi Berhasil! Silakan login.',
                    'redirect' => url('login')
                ]);
            }

            return redirect('register');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Terjadi kesalahan di server: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('login')->with('success', 'Logout Berhasil!');
        } catch (\Exception $e) {
            return redirect('login')->with('error', 'Terjadi kesalahan saat logout: ' . $e->getMessage());
        }
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function login(Request $request) {
       $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            session([
                'user_id' => $user->id,
                'nama' => $user->name, // tambahkan ini
                'user_role' => $user->role
            ]);
            return redirect($user->role === 'admin' ? '/admin/dashboard' : '/user/dashboard');
        }
        return back()->withErrors(['login' => 'Login gagal']);
    }

    public function register(Request $request) {
         $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        ]);
        session([
            'user_id' => $user->id,
            'nama' => $user->name, // tambahkan ini
            'user_role' => $user->role
        ]);
        return redirect('/user/dashboard');
    }

    public function logout() {
        session()->flush();
        return redirect('/login');
    }
}


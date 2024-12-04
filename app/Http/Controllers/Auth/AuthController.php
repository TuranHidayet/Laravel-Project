<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\{Auth, Hash, Storage};

class AuthController extends Controller
{
    public function register(Request $request) {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'username' => 'required|unique:users,username|max:50',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|string|min:4|confirmed',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        if ($request->hasfile('avatar')) {
            $user->avatar = Storage::putFile('uploads/users/avatars', $request->file('avatar'));
        }
        $user->save();

        return redirect()->route('app.login');
    }

    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(Auth::user()->role=='admin')
                return redirect()->route('admin.dashboard');

            return redirect()->route('app.profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('front.profile', compact('user'));
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('app.login');
    }
}

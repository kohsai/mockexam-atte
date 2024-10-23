<?php

namespace App\Http\Controllers;

// フォームリクエストの読み込み
use App\Http\Requests\RegisterRequest;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;
// use Symfony\Component\HttpFoundation\StreamedResponse;


class AuthController extends Controller
{
    public function register()
    {
    return view('register');

    }

    public function login()
    {
        return view('login');
    }


        public function store(RegisterRequest $request)
    {
        $validatedData = $request->validated();


    $user = User::create([
    'name'  => $validatedData['name'],
    'email' => $validatedData['email'],
    'password' => Hash::make($validatedData['password']),
    ]);


    //  ログイン処理
    Auth::login($user);

return redirect()->route('dashboard'); // ダッシュボードにリダイレクト
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }
}
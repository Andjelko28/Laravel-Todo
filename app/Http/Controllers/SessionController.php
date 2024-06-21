<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email.required' => 'An email address is required',
                'email.email' => 'The email adress must be valid',
                'password' => 'A password is required'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }


    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}

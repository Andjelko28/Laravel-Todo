<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'confirmed', Password::min(8)],
            [
                'email.required' => 'An email address is required',
                'email.email' => 'The email adress must be valid',
                'password.required' => 'A password is required',
                'password.confirmed' => 'The password confirmation does not match',
                'password.min' => 'The password must be at least 8 characters'
            ]
        ]);

        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect('/');
    }
}

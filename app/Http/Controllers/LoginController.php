<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistrationRequest;

class LoginController extends Controller
{
    public function login(RegistrationRequest $request){
        if(Auth::check()){
            return redirect()->intended(route('user.admin'));
        }
        $formFields = $request->only(['name','email','password']);
        session(['alert' => 'Добро пожаловать '.$formFields['name']]);
        session(['getName' => $formFields['name']]);
       
        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.admin'));
        }
        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось войти!'
        ]);
    }
}

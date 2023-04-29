<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function loginform() {
        return view('livewire.auth.login');
    }

    public function login(Request $request) {
        $request->validate(
                    [
                        'email' => 'required',
                        'password' => 'required'
                    ]
                );
        
        // Login
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login')->withError('Invalid Credentials!');
    }

    public function registerform() {
        return view('livewire.auth.register');
    }

    public function register(Request $request) {
        //dd($request->all());
        //Validate the request (registration credentials)
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|confirmed'
            ]
        );

        //After successful Validation, save the data into database
        User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> \Hash::make($request->password)    //Using Hash global facade
            ]
        );

        // Make the user login directly after successful registration 
        if(\Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        } else {
            return redirect('user-register')->withError('An Error Occured! Please contact the Administrator.');
        }
    }

    public function home() {
        return view('livewire.homepage');
    }

    public function logout() {
        \Session::flush();  // whatever session was there, empty and flush it.
        \Auth::logout();    // using global facade Auth to logout
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthCotroller extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function customLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'You have signed-in');
        }
        return redirect('login')->with('error', 'Invalid email or password');
    }

    public function register(){
        return view('auth.register');
    }

    public function customRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password is required',
            'confirm_password.required' => 'Confirm password is required',
            'confirm_password.same' => 'Password does not match',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        //login after register
        Auth::login($check);

        return redirect()->route('dashboard')->with('success', 'You have signed-in');
    }

    public function create(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function signOut() {
        Auth::logout();
        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view("home");
    }

    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'firstname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'dob' => 'required',
            'birth' => 'required|max:255',
            'sex' => 'required',
            'nationality' => 'required',
            'permanentaddress' => 'required',
            'religion' => 'required',
            'corresponaddress' => 'required',
            'mobilenumber' => 'required',
            'maritalstatus' => 'required',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);

        $result = collect($validatedData);

        $result->put('level','employee');

        $data = $result->toArray();

        User::create($data);

        return redirect('/login')->with('success', 'Register Successfull!');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('loginError','Login Failed!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view("index");
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

        Client::create($validatedData);

        return redirect('/')->with('success', 'Registration Successfull!');
    }
}

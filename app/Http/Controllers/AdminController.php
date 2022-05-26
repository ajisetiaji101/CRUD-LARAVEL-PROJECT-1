<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }
    public function login(){
        return view("admin.login");
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


    public function data(){
        $datas = DB::table('users')->get()->where('level','employee');
        return view("admin.data",[
            "datas" => $datas
        ]);
    }
    public function info(){

        $id = Auth()->user()->id;

        $datas = User::all();

        $result = $datas->where("id",$id);

        return view("admin.info",[
            "result" => $result
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');

    }

    public function edit(Request $request, $id){

        $datas = User::all();
        if(Auth()->user()->id == 1){
            $result = $datas->where("id",$id);

            return view("admin.edit",[
                "result" => $result
            ]);
        }

        if(Auth()->user()->id != $id){
            Auth::logout();

            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
    
            return redirect('login')->with('error', 'Anda Tidak Memiliki Access');
        }

        $result = $datas->where("id",$id);

        return view("admin.edit",[
            "result" => $result
        ]);

    }

    public function update(Request $request, $id){
        if(Auth()->user()->level == "admin"){
            $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'email' => 'required|email:dns',
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
                'level' => 'required',
            ]);
            $validatedData['password'] = bcrypt($validatedData['password']);

            User::where('id', $id)->update($validatedData);
        }else{
            $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'email' => 'required|email:dns',
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

            User::where('id', $id)->update($data);
        }

        return redirect('dashboard')->with('success', 'Update data Successfull!');
    }
    
    public function delete($id){
        $datas = User::where("id", $id);

        $datas->delete();
        return redirect("dashboard")->with('success', 'Delete Data Successfull');
    }
}

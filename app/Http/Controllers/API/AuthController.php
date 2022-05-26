<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Pastikan Email dan Password Benar'
            ], 401);
        }

        $token = $user->createToken('mobile')->plainTextToken;

        return response()->json([
            'message' => 'success',
            "user" => $user,
            "token" => $token,
        ], 200);
    }

    public function logout(Request $request){
        $user = $request->user();

        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Ini adalah halaman logout'
        ], 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('users')->get()->where('level','employee');
        
        return response()->json([
            'message' => 'success',
            'status' => 201,
            'response' => $data,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth()->user()->level == 'admin'){
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
                'level' => 'required'
            ]);
    
            if(!$validatedData){
                return response()->json([
                    'message' => 'Data is False',
                    'status' => '401',
                ],401);
            }
    
            $validatedData['password'] = bcrypt($validatedData['password']);
    
            User::create($validatedData);

            return response()->json([
                'message' => 'Data Berhasil Ditambahkan',
                'status'=> 200,
                'data' => $validatedData
            ],200);
        }else{
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
        
                if(!$validatedData){
                    return response()->json([
                        'message' => 'Data is False',
                        'status' => '401',
                    ],401);
                }
        
                $validatedData['password'] = bcrypt($validatedData['password']);
        
                $result = collect($validatedData);
        
                $result->put('level','employee');
        
                $data = $result->toArray();
        
                User::create($data);

                return response()->json([
                    'message' => 'Data Berhasil Ditambahkan',
                    'status'=> 200,
                    'data' => $data
                ],200);
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datas = User::where("id", $id)->first();

        if(!$datas){
            return response()->json([
                'message' => 'Data Tidak Ditemukan',
                'status' => 401,
            ],401);
        }

        return response()->json([
            'message' => 'Berhasil di dapatkan',
            'status' => 201,
            'response' => $datas
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datas = User::find($id);

        if(!$datas){
            return response()->json([
                'message' => 'Data Tidak Ditemukan',
                'status' => 401,
            ],401);
        }

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

            $datas->update($validatedData);
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

            $datas->update($data);
        }


        if(!$validatedData){
            return response()->json([
                'message' => 'Data Update Is False',
                'status' => 500,
            ],501);
        }

        return response()->json([
            'message' => 'success',
            'status' => 200,
            'response' => $datas
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datas = User::where("id", $id);

        if(!$datas){
            return response()->json([
                'message' => 'Data Tidak Ditemukan',
                'status' => 401,
            ],401);
        }

        $datas->delete();

        return response()->json([
            'message' => 'Delete Data Berhasil',
            'status' => 201,
        ]);
    }
}

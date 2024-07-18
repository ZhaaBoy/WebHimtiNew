<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\level;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserApiController extends Controller
{

    protected $model;
    public function __construct(){
        $this->model = new User();
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required'],
            'password' => ['required'],
            'id_level' => '',
            'verifikasi_password' => ['required'],

        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Registrasi, Silahkan ulang lagi',
                'user' => $validator->errors()
            ],404);
        }

        $user = User::where('email', $request->email)->first();
        if($user){
            return response()->json([
                'status' => false,
                'message' => 'Email Sudah Diguanakan'
            ],404);
        }else{
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'no_hp'=>$request->input('no_hp'),
                'id_level'=>$request->input('id_level'),
                'password' => Hash::make($request->input('password')),
                'verifikasi_password' =>Hash::make($request->input('verifikasi_password')),
            ]);

            if ($user) {

                return response()->json([
                    'status' => true,
                   'message' => 'Registrasi Berhasil',
                    'user' => $user
                ], 200);
            }else {
                return response()->json([
                     'message' => 'Gagal Registrasi, Silahkan ulang lagi',
                    'status' => false
                ], 404);
            }
        }

    }


    public function login(Request $request){

        $status = User::all();

        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Gagal Login, Silahkan ulang lagi',
                'user' => $validator->errors()
            ],200);
        }

        $user = User::where('email', $request->email)->first();
        if(!$user) {
            return response()->json([
                'status' => false,
                'message' => 'email Tidak Terdaftar',
                'user' => $validator->errors()
            ],200);
        }

        if(Auth::attempt($request->only('email','password'))){

                return response()->json([
                    'status' => true,
                    'message' => "Login Berhasil",
                    'dataLogin' => $user
                ], 200);

        }else{
            return response()->json([
                'status' => false,
                'message' => "Password Tidak Sesuai"
            ], 200);
        }

    }

    public function logout(Request $request) {
        if(Auth::user()){
            $user = Auth::user()->tokens();
            $user->revoke();
         return response()->json([
             'success' => true,
             'message' => 'Logout successfully',
            ]);
           } else{
            return response()->json([
             'success' => false,
             'message' => 'Unable to Logout',
            ]);
           }
    }


    public function lupapassword(Request $request){
        $validasi = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);


        if($validasi->fails()){
            return response()->json([
                'status' => false ,
                'user' => $validasi->errors()
            ], 200);
        }

        $user = User::where('email', $request->email)->first();

        if($user){
            $user = User::where('email', $request->email)->first();
            $user->password = bcrypt($request->password);
            $user->update();

            return response()->json([
                'message' => 'Password Berhasil Diubah',
                'status' => true,
                'user' => $user,

            ],200);
        }else{
            return response()->json([
                'message' => 'Email Tidak Terdaftar, Password Gagal Diubah',
                'status' => false
            ], 200);
        }

    }

    public function profile(Request $request){
        $user = User::where('email', $request->email)->get();

        if(!$user){
            return response()->json([
                'status' => false,
                'message' => 'Email Belum Terdaftar'
            ], 200);
        }else{
            return response()->json([
                'message' => 'Data Ada di database',
                'status' => true,
                'profile' => $user
            ], 200);
        }

    }

    public function editProfile(Request $request, $id){
        $edit = User::findOrFail($id);
        $user = $request->all();

        $validasi = Validator::make($user,[
            'name' => 'nullable',
            'email' => 'nullable|email:dns',
            'no_hp' => 'nullable |numeric',
            'password' => 'nullable',
        ]);

        if($validasi->fails()){
            return response()->json([
                'status'=> false ,
                'user' =>$validasi->errors()
            ],200);
        }

        // dd($edit);

        $edit->update($user);
        if ($edit) {

            $edit->password = bcrypt($request->password);
            $edit->update();
            return response()->json([
                'message' => 'Data Berhasil Di-Update',
                'status' => true,
                'profilUpdate' => $edit
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data Gagal Di-Update',
                'status' => false
            ], 200);
        }
    }

    public function loginGoogle(){

    }

}

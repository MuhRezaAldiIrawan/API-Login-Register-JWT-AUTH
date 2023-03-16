<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\Factory;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        $title = 'Wesclic | Register Page';

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        toast('User Telah berhasil di daftarkan','success');
        return view('login', compact('title'));

        // return response()->json([
        //     'message' => 'User telah berhasil di daftarkan',
        //     'user' => $user
        // ], 201);
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),422);
        }
        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Autentikasi Tidak Valid '] ,401);
        }
        return $this->createNewToken($token);
    }

    public function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->Factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }

    public function loginpage()
    {

        $title = 'Wesclic | Login Page';

        return view('login', compact('title'));
    }

    public function registerpage()
    {

        $title = 'Wesclic | Register Page';
        return view('register', compact('title'));
    }
}

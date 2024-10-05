<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|string|max:30|unique:users,nickname',
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'agreement' => 'required|accepted',
        ], [
            'password.confirmed' => 'Şifrələr uyğun gəlmir!',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'messages' => $validator->errors()
            ], 422);
        }
    
        User::create([
            'nickname' => $request->nickname,
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => 0,
        ]);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Qeydiyyat uğurlu!',
        ]);
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 'success',
                'message' => 'Giriş uğurlu!',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'E-poçt vəya parol xətalı!',
        ], 401);
    }

    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
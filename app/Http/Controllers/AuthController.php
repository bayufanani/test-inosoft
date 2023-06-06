<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $user = new User();
        // $user->username = 'bayu';
        // $user->password = Hash::make('bayu');
        // $user->save();
        // return;
        $cridential = $request->only(['username', 'password']);
        if (Auth::attempt($cridential)) {
            $user = Auth::user();
            if ($user instanceof User) {
                $success['token'] = $user->createToken('mytokenapp')->plainTextToken;
                return $this->sendResponse($success, 'Login Berhasil');
            }
        }

        return $this->sendError([], 'Login Gagal');
    }
}

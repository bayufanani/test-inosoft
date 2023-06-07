<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (!$token = Auth::attempt($cridential)) {
            return $this->sendError([], 'Unauthorized', 401);
        }

        $success = [
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ];
        return $this->sendResponse($success, 'Login Berhasil');
    }
}

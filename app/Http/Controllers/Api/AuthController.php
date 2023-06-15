<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse {
        
        $input = $request->only(['email', 'password']);
        try {
            if (!$token = JWTAuth::attempt($input)) return $this->internalErrorResponse("Cek kembali password atau email anda",);
        } catch (JWTException $e) {
            return $this->internalErrorResponse("Ada yang salah :(");
        }

        //Token created, return with success response and jwt token
        $data = array(
            'user' => Auth::user(),
            'success' => true,
            'token' => $token,
        );
        return response()->json($data);
    }

   public function register(Request $request) : JsonResponse {
        $input = $request->only(['name', 'email', 'password']);
        User::create($input);
        return response()->json(array('message'=>'Berhasil mendaftar'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(request $request){

        $user = User::where('email',request()->email)->first();

        if(!$user || Hash::check($user->password, $request->password)){
            return response([
                'message'=>'Credenciales invalidas'
            ],404);
        }

        $token = $user->createToken('developer-token')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,201);

    }

    public function showAll(){

        return User::all();
    }
}

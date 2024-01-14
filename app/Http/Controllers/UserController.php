<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(){
        return view('accounts.Login');
    }
    public function register(){
        return view('accounts.Register');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:users',
            'phone' => 'numeric|starts_with:0',
            'cfpassword' =>'same:password'
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' =>$validator->messages(),
            ]);
        }
        else{
            $user = new User();
            $user->name = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->passward = $request->password;
            $user->role = 2;
            $user->save();
            return response()->json([
                'status' => 200,
            ]);
        }
    }
}

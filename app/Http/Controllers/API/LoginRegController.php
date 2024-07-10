<?php

namespace App\Http\Controllers\API;

use App\Models\LoginReg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegController extends Controller
{
    public function signup(Request $request){
        $loginreg = new LoginReg;
        $loginreg->username = $request->input('username');
        $loginreg->email = $request->input('email');
        $loginreg->password = $request->input('password');
        $loginreg->save();

        return response()->json([
            'status'=>200,
            'message'=>'Student Added Successfully',
        ]);
    }

    public function signin(Request $request)
    {
        $loginreg = LoginReg::where('email',$request->email)->first();
        if(!$loginreg || ($request->password !== $loginreg->password))
        {
            return response()->json([
                'status'=>401,
                'message'=>'Email or Password is incorrect',
            ]);
        }
        return response()->json([
            'status'=>200,
            'user'=>$loginreg
        ]);
    }
}

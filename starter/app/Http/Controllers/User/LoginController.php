<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Crypt;
class LoginController extends Controller
{
    public function showview()
    {
        return view('login');
    }
    public function check(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
         } if (!Hash::check($request->password, $user->password)) {
            return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
         }
            return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
  

    }
}

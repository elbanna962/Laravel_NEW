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
        // $pass=bcrypt($request->password);
        // $p =decrypt($pass);
        // $pas=User::where('password','=',$pass)->get();
        $user = User::select('password')->get();
        // return $user;
        if (Hash::check($request->password, $user->password->first())) 
        {
           return $user->password;
        }
       
  

    }
}

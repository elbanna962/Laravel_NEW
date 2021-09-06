<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
class SignupController extends Controller
{
    public function showview()
    {
        return view('signup');
    }
    public function getrules()
    {
       return  $rules=[     
        'fname'=>'required|max:15',
        'lname'=>'required|max:15',
        'email'=>'required|unique:users,email',
        'password'=>'required',
    ];
    }
    public function getmessages()
    {
        return $messages=[     
            'fname.required' => 'Name must be filled first',
            'fname.max:1' => 'name must be less than 15 char.',
            'email'=>'required|unique:users,email',
            'password.required'=>'required',
        ];
    }
   public function store( Request $request)
   {
       $rules=$this->getrules();
       $messages=$this->getmessages();
       $validat= Validator::make($request->all(),$rules,$messages);
       if($validat ->fails())
       {
        //    return $validat->errors();
           return redirect()->back()->withErrors($validat)->withInputs($request->all());
       }
       else{
        User::create([
            'first_name'=>$request ->fname,
            'last_name'=>$request ->lname,
            'email'=>$request ->email,
            'password'=>Hash::make($request ->password),
            'role'=>'user',
    
         ]);
         return view('login');
       }


    }

}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =['first_name','last_name','email','password','role','updated_at','created_at'];
 
    protected $hidden =['updated_at','created_at'];
}

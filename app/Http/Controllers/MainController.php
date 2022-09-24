<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MainController extends Controller
{



public function login()
{
    return view('login');

}

public function user_login(Request $request)
{
   $user= User::where('email',$request->email)->first();
    if($user)
    {
         if($user->password==$request->password)
         {
              $request->session()->put('user',$user);
              $user= $request->session()->get('user');
         return view('backend.index',compact('user'));
         }
         else
         {
              return redirect('login')->with('error','Incorrect Password');
         }
    }
    else
    {
         return redirect('login')->with('fail','No Account Found');
    }

}



}


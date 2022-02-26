<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin(){
        return view('panel.login');
    }
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.panel');

        }
        else
        {
            return redirect()->route('admin.login');
            }
    }
}

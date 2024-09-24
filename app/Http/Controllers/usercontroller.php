<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    
public function register(Request $request){
    $formfeild = $request ->validate([
        "name"=>"required",
        "email"=>"required",
        "password"=>"required|min:3|max:20|confirmed",
    ]);
        $user = User::create($formfeild);

        return redirect('register');
    }

    


    public function login(request $request){
        $formfeild = $request->validate([
            "email"=>"required",
            "password"=>"required|min:3|max:20"
        ]);    

        if (Auth::attempt($formfeild)) {
            return redirect('/index');

        }else{
                
        }
    }
}

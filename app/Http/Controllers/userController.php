<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
  public function login()
  {
    return view("dashboard.login");
  }
  public function postlogin(Request $request)
  {
    $val = $request->validate([
      "email" => "required|email",
      "password" => "required",
    ]);
    // dd($val);
    $user_data = ($request->only('email','password'));
    if(Auth::attempt($user_data)) {
      return redirect("/product/index");
    }
    else{
      $request->session()->flash('message', 'user not register');
      return redirect("/login");
    }
  }






  public function register()
  {
    return view("dashboard.register");
  }
  public function postregister(Request $request)
  {
    $val = $request->validate([
      "username" => "required",
      "email" => "required|email",
      "password" => "required|confirmed",
    ]);
    $user = new User();
    $user->name = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    if ($user->save()) {
      $request->session()->flash('message', 'register was successful');
    } else {
      $request->session()->flash('message', 'register was faild');
    }
    return redirect('/register');
  }


  public function logout() {
    Auth::logout();
    return redirect("/login");
  }
}

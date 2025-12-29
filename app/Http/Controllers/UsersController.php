<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function UserLogin(Request $request) {
       
       
     $data = $request->validate([
        "email" => "required",
        "password" => "required"
      ]);

      if(Auth::attempt([
        "email" => $data['email'],
        "password" => $data['password']
      ])) {
          $request->session()->put('data', $data['email']);
        }

      return redirect()->route('journal.form');



    }



    public function UserRegister(Request $request) {
      $data = $request->validate([
        "name" => "required",
        "email" => "required",
        "password" => "required"
      ]);

      $data['password'] = bcrypt($request->password);
      $data['email'] = strip_tags($request->email);
      $data['name'] = strip_tags($request->name);


      User::create($data);

      if(Auth::attempt([
        "email" => $data['email'],
        "password" => $data['password']
      ])) {
          $request->session()->put('data', $data['email']);
        }

        return redirect('/submit-journal');

    }
}

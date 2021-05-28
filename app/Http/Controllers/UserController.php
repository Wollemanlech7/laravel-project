<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function index() {
        return view('dashboard.user-register');
    }

    public function store(Request $request) {
        $name = $request->input('txt_name');
        $lastName = $request->input('txt_last_name');
        $birthday = $request->input('txt_birthday');
        $email = $request->input('txt_email');
        $password = $request->input('txt_password');

        $newUser = new User;

        $newUser->name = $name;
        $newUser->last_name = $lastName;
        $newUser->img_path = '/';
        $newUser->birthday = now();
        $newUser->email = $email;
        $newUser->password = bcrypt($password);
        $newUser->phone = '000';
        $newUser->address = 'VHS';
        $newUser->active = true;
        $newUser->save();
        return redirect()->route('dashboard.login');
    }
}

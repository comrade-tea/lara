<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

//        return $users;
//        return view('users', compact('users'));
//        return view('users')->withUsers($users);
//        return view('users')->with(['users' => $users]);
        return view('users')->withUsers($users)->withBlabla('blabla');
    }

    public function about()
    {
        return view('about');
    }


    public function store()
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();

//        return $lol;
        return back();
    }
}

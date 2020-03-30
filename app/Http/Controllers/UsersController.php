<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function edit()
    {
    }

    public function delete()
    {
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        //return view('user.index', ['user' => $user]);
    }
}

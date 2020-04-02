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

    public function update()
    {
    }

    public function edit(Request $request)
    {
        $request->user;
    }

    public function destroy()
    {
    }

    public function show(Request $request)
    {
        $user = User::find($request->id);
        //return view('user.index', ['user' => $user]);
    }
}

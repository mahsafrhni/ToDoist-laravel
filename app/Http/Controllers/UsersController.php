<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return view('ShowAllPeople');
    }

    public function edit()
    {
    }

    public function delete()
    {
    }

    public function show(Request $request)
    {
        $request->user;
        //return view('showPerson');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
//    public function add()
//    {
//    }

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

    public function show($id)
    {
        return view('showPerson');
    }
}

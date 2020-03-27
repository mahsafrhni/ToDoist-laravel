<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
    }

    public function showEdit()
    {
        return view('editProfile');
    }
}

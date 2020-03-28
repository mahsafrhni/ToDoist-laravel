<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        $request->user;
       // return view('editProfile');
    }

    public function update()
    {

    }
}

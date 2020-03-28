<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function delete()
    {
    }

    public function add(Request $request)
    {
        $request->id;
        // return view('addTeam');
    }

    public function edit(Request $request)
    {
        $request->id;
        //return view('editTeam');
    }

    public function update()
    {
    }

    public function insert()
    {
    }
}

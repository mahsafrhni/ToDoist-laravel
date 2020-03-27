<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function delete()
    {
    }

    public function add()
    {
        return view('addTeam');
    }

    public function editPage()
    {
        return view('editTeam');
    }

    public function update()
    {
    }
}

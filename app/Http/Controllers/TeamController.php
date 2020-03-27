<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add()
    {
    }

    public function delete()
    {
    }

    public function addPage()
    {
        return view('addTeam');
    }

    public function editPage()
    {
        return view('editTeam');
    }

    public function edit()
    {
    }
}

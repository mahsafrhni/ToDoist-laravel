<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show($id)
    {
        return view('showProjects');
    }

    public function edit()
    {

    }

    public function delete()
    {
    }

    public function add()
    {
    }

    public function editInfo()
    {
        return view('editProjInfo');
    }
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }
}

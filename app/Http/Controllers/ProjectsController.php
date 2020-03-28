<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show(Request $request)
    {
        $request->id;
        // return view('showProjects');
    }

    public function edit(Request $request)
    {
        $request->id;
        // return view('editProjInfo');
    }

    public function delete()
    {
    }

    public function add()
    {
    }

    public function update()
    {

    }

    public function index()
    {
        return view('showProjects');
    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }
}

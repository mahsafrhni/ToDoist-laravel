<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show(Request $request)
    {
        $request->id;
    }

    public function edit(Request $request)
    {
        $request->id;
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route("projects.index")->with('success', 'پروژه مورد نظر با موفقیت حذف شد');
    }

    public function store()
    {
    }

    public function update()
    {

    }

    public function index()
    {

    }

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }
}

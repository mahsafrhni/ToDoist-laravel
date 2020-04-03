<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route("home")->with('success', 'تیم مورد نظر با موفقیت حذف شد');
    }

    public function store(Request $request)
    {
        $request->id;
    }

    public function edit(Request $request)
    {
        $request->id;
    }

    public function update()
    {
    }

    public function show(Request $request)
    {
        $request->id;
    }

}

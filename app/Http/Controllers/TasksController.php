<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function store()
    {
    }

    public function update()
    {
    }

    public function edit(Request $request)
    {
        $request->id;
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route("home")->with('success', 'کار مورد نظر با موفقیت حذف شد');
    }
}

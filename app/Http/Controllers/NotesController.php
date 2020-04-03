<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request)
    {
        $request->id;
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
        $note = Note::find($id);
        $note->delete();
        return redirect()->route("home")->with('success', 'یادداشت مورد نظر با موفقیت حذف شد');
    }
}

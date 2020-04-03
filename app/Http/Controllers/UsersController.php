<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function update()
    {
    }

    public function edit(Request $request)
    {
        $request->user;
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route("users.index")->with('success', 'کاربر مورد نظر با موفقیت حذف شد');
    }
}

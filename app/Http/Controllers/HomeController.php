<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        $teams = Auth::user()->Team;
        $tasks = Auth::user()->Task;
        $projects = [];
        if(!empty($teams)) {
            foreach ($teams as $team) {
                array_push($projects, $team->Project);
            }
        }
        return view('users.index', ['users' => 'teams','page_title' => 'صفحه نخست' , 'teams' => $teams , 'tasks' => $tasks, 'projects' => $projects]);

    }
}

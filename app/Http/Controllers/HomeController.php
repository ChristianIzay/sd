<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\User;
use App\Models\Eleves;
use App\Models\Promotions;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

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
    public function index()
    {
        $user = User::count();
        $eleves = Eleves::count();
        $promotions = Activity::count();
        $enseignants = Prof::count();
        return view('home', compact('user', 'eleves', 'promotions', 'enseignants'));
    }
}

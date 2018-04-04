<?php

namespace App\Http\Controllers;

use App\Picture;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $pictures = Picture::orderBy('created_at', 'DESC')->where('user_id', $user->id)->get();
        return view('dashboard')->with(['pictures' => $pictures]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\User;
use DB;

class RouteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome', 'auth.login', 'auth.register']]);
    }

    public function welcome()
    {
        $pictures = Picture::orderBy('id', 'DESC')->get();
        return view('welcome')->with('pictures', $pictures);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function manage()
    {
        $user = auth()->user();
        $pictures = $user->pictures;
        return view('pictures.manage')->with(['pictures' => $pictures]);
    }
}

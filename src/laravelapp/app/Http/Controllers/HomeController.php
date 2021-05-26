<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function cookie()
    {
        return view('cookie_home');
    }

    public function cookie_forward()
    {
        return view('cookie_next');
    }


    public function cookie_next(Request $request)
    {
        $flag = $request->flag;
        setcookie('flag', $flag, time()+1800, "/");

        return redirect()->route('cookie_next');
    }

    public function cookie_back(Request $request)
    {
        $flag = $request->flag;
        setcookie('flag', $flag, time()+1800, "/");

        return redirect()->route('cookie_home');
    }
}

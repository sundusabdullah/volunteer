<?php

namespace App\Http\Controllers;

use App\About;
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
     *
     */
    public function getInfo()
    {
        $about = About:: where('id', Auth::user()->id)->first();
        return $about;
    }

    public function index()
    {
        $about = $this->getInfo();
        return view('user/nav/home', compact('about'));
    }

    //TODO :: To be deleted later
    public function dashboard()
    {
        $about = $this->getInfo();
        return view('admin/dashboard', compact('about'));
    }
}

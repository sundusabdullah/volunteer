<?php

namespace App\Http\Controllers;
use App\Volunteer;
use App\Announcements;
use Illuminate\Http\Request;



class HomeController extends Controller
{

    public function index()
    {
        $volunteer = new Volunteer ;
        $announcements = new Announcements;
        $volunteer = Volunteer::take(4)->orderBy('id', 'DESC')->get();
        $announcements = announcements::take(4)->orderBy('id', 'DESC')->get();

        // return view('home', compact('volunteer', 'announcements'));
        return view('home')->with(compact('volunteer', 'announcements'));


    }
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
   
}

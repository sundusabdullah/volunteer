<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\About;
use Illuminate\Support\Facades\Auth;
use App\Volunteer;
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


    public function index()
    {
        $about = $this->getAboutInfo();
        $data = AnnouncementController::getAnnouncementInfo();
        return view('user/nav/home', compact('about', 'data'));
    }
    public function index2()
    {
        $volunteer = new Volunteer ;

        return view('home', compact('volunteer'));
    }

    function fetch(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('announcements')->paginate(6);
            return view('user/nav/ads/ads_data', compact('data'))->render();
        }
    }
    public static function  getAboutInfo()
    {
        $about = About:: where('id', Auth::user()->id)->first();
        return $about;
    }
    //TODO :: To be deleted later.
    public function dashboard()
    {
        $about = $this->getAboutInfo();
        return view('admin/dashboard', compact('about'));
    }
}

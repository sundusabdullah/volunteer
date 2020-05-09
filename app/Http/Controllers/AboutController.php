<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Auth;
class AboutController extends Controller
{
    public function __construct()
    {
    }

    public function postSaveAbout(Request $request)
    {
        $about =About::where('id', Auth::user()->id)->first();
        $about-> user_id = Auth::user()->id;
        $about-> about_us = $request['about_us'];
        $about-> mission = $request['mission'];
        $about-> vision = $request['vision'];
        $about-> date_of_found = $request['date_of_found'];
        $about-> goals = $request['goals'];
        $about->update();
        return redirect()->back();
    }
}

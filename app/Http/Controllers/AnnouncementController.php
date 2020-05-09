<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController
{
    public function postSaveAnnouncement(Request $request)
    {
        $announcement =new Announcement();
        $announcement-> user_id = Auth::user()->id;
        $announcement-> event_name = $request['ِevent_name'];
        $announcement-> event_place = $request['ِevent_place'];
        $announcement-> event_date = $request['event_date'];
        $announcement-> event_description = $request['ِevent_description'];
        $announcement-> seat_no = $request['seat_no'];
        $announcement->save();
        return redirect()->back();
    }
    function index()
    {
        $data = DB::table('announcements')->paginate(1);
        return view('pagination_parent', compact('data'));
    }

    function fetch(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('announcements')->paginate(1);
            return view('pagination_child', compact('data'))->render();
        }
    }
}

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
        return redirect()->route('Announcement');
    }
    public static function getAnnouncementInfo()
    {
        $announcements = DB::table('announcements')->paginate(6);

        return $announcements;
    }

    public function getAnnouncementDetail($id){
       $announcement = Announcement::find($id);
        return view('user.nav.ads.details', compact('announcement'));
    }
    public function getAnnouncementEditForm(){
        $announcements= $this->getAnnouncementInfo();
        return view('admin.nav.ads.show', compact('announcements'));

    }
    public function getAnnouncementAddForm(){

        return view('admin.nav.ads.add');
    }
    public function getDeleteAnnouncement($id){
        $announcement = Announcement::where('id', $id)->first();
        if (Auth::user() != $announcement->user) {
            return redirect()->back();
        }
        $announcement->delete();
        return redirect()->back()->with(['message' => 'Successfully deleted!']);
    }
    public function getEditAnnouncement($id){
        $announcement = Announcement::where('id', $id)->first();
        return view('admin.nav.ads.edit', compact('announcement'));
    }
    public function postEditAnnouncement($id,Request $request){
        $announcement = Announcement::where('id', $id)->first();
        if (Auth::user() != $announcement->user) {
            return redirect()->back();
        }
        $announcement-> user_id = Auth::user()->id;
        $announcement-> event_name = $request['ِevent_name'];
        $announcement-> event_place = $request['ِevent_place'];
        $announcement-> event_date = $request['event_date'];
        $announcement-> event_description = $request['ِevent_description'];
        $announcement-> seat_no = $request['seat_no'];
        $announcement->update();

    }
}

<?php

namespace App\Http\Controllers;
use App\Announcements;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use \app\Mail\sendConfirm;


class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = 's@hotmail.com';
        $user = Auth::user();
        $email = $user->email;
        $sendController = new SendController;
        if($email == $emails){
        }else{
            
        }
        $announcements = Announcements::orderBy('id', 'DESC')->get();
        return view('AnnouncementsView.index', compact('announcements', 'emails', 'email', 'sendController'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('AnnouncementsView.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $announcements = new Announcements();           
        $announcements->create($request->all());
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */

    public function show(Announcements $announcements, Request $request, $id)
    {
        $user = Auth::user();        
        $announcements = Announcements::find($id);

        //check Admin
        $emails = 's@hotmail.com';
        $email = $user->email;
        $id = $user->id;

        if($email == $emails){
        }else{
            
        }
        
        return view('AnnouncementsView.show', compact('announcements', 'email', 'emails')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcements $announcements, $id)
    {

        $announcements = Announcements::find($id);
        return view('AnnouncementsView.edit', compact('announcements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcements $announcements, $id)
    {

        $announcements = Announcements::find($id);
        $announcements->update($request->all());

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcements  $announcements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcements $announcements, $id)
    {
        $announcements = Announcements::find($id);
        $announcements->delete();
        return redirect('home');
    } 

  
}








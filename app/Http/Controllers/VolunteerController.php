<?php

namespace App\Http\Controllers;
use App\Volunteer;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer = Volunteer::orderBy('id', 'DESC')->get();
        return view('VolunterViews.index', compact('volunteer'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VolunterViews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $volunteer = new Volunteer;
        $title = $request->Input('title');
        $description = $request->Input('description');
        $place = $request->Input('place');
        $date = $request->Input('date');

        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1');
            $name_1 = $image_1->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image_1->move($destinationPath, $name_1);

        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2');
            $name_2 = $image_2->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image_2->move($destinationPath, $name_2);

        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3');
            $name_3 = $image_3->getClientOriginalName();
            $destinationPath = public_path('/images');
            $image_3->move($destinationPath, $name_3);


            $volunteer->image_1 = $name_1;
            $volunteer->image_2 = $name_2;
            $volunteer->image_3 = $name_3;
            $volunteer->title = $title;
            $volunteer->description = $description;
            $volunteer->place = $place;
            $volunteer->date = $date;
            $volunteer->save();

        }
    }}
        
        return view('home', compact('volunteer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer, Request $request)
    {
        // $email = request('email');
        $emails = 's@hotmail.com';
        $user = Auth::user();
        $email = $user->email;
        if($email == $emails){
        }else{
            
        }
        return view('VolunterViews.show', compact('volunteer', 'email', 'emails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
       
        return view('VolunterViews.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        $volunteer->update($request->all());
        return redirect()->back();

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {

        $volunteer->delete();
        return redirect('home');
    }

}

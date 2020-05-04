<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\insert_comp;


class PageController extends Controller
{

    public function insert_comp_form(){
        return view('insert_comp');
    }
  

    public function inset_comp_func(Request $request){
        $all_data = new insert_comp;
        $title = $request->input('title');
        $place = $request->input('place');
        $description = $request->input('description');
        $date = $request->input('date');
        $image_1 = $request->input('image_1');
        $image_2 = $request->input('image_2');
        $image_3 = $request->input('image_3');

        if(isset($_POST['insert'])){
            
            $all_data->title = $title;
            $all_data->description = $description ;
            $all_data->image_1 = $image_1;
            $all_data->image_2 = $image_2;
            $all_data->image_3 = $image_3;
            $all_data->place = $place;
            $all_data->date = $date->format('Y/m/d');
            $all_data->save();
        }

    }

    public function show_comp_form(){
        return view('show_comp');
    }


    public function show_comp_func(){
        $informations = DB::select('select * from accomplish');
        return view('show_comp',['informations'=>$informations]); 
    }

    public function show_all_info_form(){
        return view('show_all_info');
    }

   
}

@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{route('announcement.update', ['id' => $announcement->id])}}" class="mt-5">
        @csrf
        <p class="offset-md-7 mb-4"><span>يعني ان الحقل مطلوب</span> *</p>
        <div class="form-group row justify-content-end">
            <div class="col-md-6">
                <input id="ِevent_name" type="text" class="form-control text-right" name="ِevent_name"
                       placeholder="ادخل اسم الفعالية" value="{{$announcement->event_name}}">


            </div>
            <label for="ِevent_name" class="col-md-4 col-form-label text-md-left">* <span> اسم الفعالية </span></label>

        </div>


        <div class="form-group row justify-content-end">
            <div class="col-md-6">
                <input id="ِevent_place" type="text" class="form-control text-right" name="ِevent_place"
                       placeholder="ادخل مكان الفعالية" value="{{$announcement->event_place}}">


            </div>
            <label for="ِevent_place" class="col-md-4 col-form-label text-md-left">* <span>مكان الفعالية </span></label>
        </div>

        <div class="form-group row justify-content-end">
            <div class="col-md-6">
                <input id="ِevent_date" type="text" class="form-control text-right" name="event_date" value="{{$announcement->event_date}}">

            </div>
            <label for="ِevent_date" class="col-md-4 col-form-label text-md-left">* <span> تاريخ الفعالية </span></label>

        </div>
        <div class="form-group row justify-content-end">
            <div class="col-md-6">
                <textarea id="ِevent_description" class="form-control text-right" name="ِevent_description" rows="5"
                          placeholder="ادخل وصف الفعالية">{{$announcement->event_description}}</textarea>

            </div>
            <label for="ِevent_description" class="col-md-4 col-form-label text-md-left">* <span> وصف الفعالية </span></label>
        </div>


        <div class="form-group row justify-content-end">
            <div class="col-sm-1">
                <input id="seat_no" type="number" class="form-control" name="seat_no" min ="1" placeholder="عدد المقاعد"
                       value="{{$announcement->seat_no}}">


            </div>
            <label for="seat_no" class="col-md-4 col-form-label text-md-left si d-flex">* <span> عدد المقاعد </span></label>

        </div>
        <div class="form-group row mb-5">
            <div class="col-md-2 offset-md-4">
                <button type="submit" class="btn btn-primary btn-block">
                    نشر
                </button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </div>
    </form>
    </div>
@endsection
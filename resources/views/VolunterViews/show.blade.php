@extends('layouts.app')
@section('content')
<!-- <h1>عرض التفاصيل</h1> -->


<!-- Edit/delete button will appear for only owner -->
<!-- Show specific volunteer in DB -->

<div class="pl-3 pr-3">
    <div class="card " style="width: 18rem;" style="width: 21.5em;margin:0 auto;">
    <h5 class="card-header"> {{$volunteer->title}} </h5>

    <img src="{{ asset('images/' . $volunteer->image_1) }}" class="card-img-top pt-3 pb-3" height="300" width="300">
    <img src="{{ asset('images/' . $volunteer->image_2) }}" class="card-img-top pt-3 pb-3" height="300" width="300">
    <img src="{{ asset('images/' . $volunteer->image_3) }}" class="card-img-top pt-3 pb-3 " height="300" width="300">


    <div class="card-body">
        <p class="card-text">{{$volunteer->description}}</p>
        <p class="card-text"><small class="text-muted">{{$volunteer->place}}</small></p>
        <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
    @if($email == $emails)
        </div>  
        <!-- Make sure this button only appear for admin -->
    <a href="{{route('volunteer.edit', $volunteer)}}" class="btn btn-primary"> تحديث </a>
    <form action="{{route('volunteer.destroy', $volunteer) }}" method="post" style="
    display: inline-block">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('هل أنت متأكد؟')">
        حذف</button>
    @endif
    </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection


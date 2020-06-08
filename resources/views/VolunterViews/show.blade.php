@extends('layouts.app')
@section('content')
<!-- <h1>عرض التفاصيل</h1> -->


<!-- Edit/delete button will appear for only owner -->
<!-- Show specific volunteer in DB -->

<div class="pl-3 pr-3 pt-5 text-center">
    <h1 class=""> {{$volunteer->title}} </h1>
<hr>
    <img src="{{ asset('images/' . $volunteer->image_1) }}" class="card-img-top pt-3 pb-3" style="height:800px; width:800px">
   


    <div class="pt-3">
        <h2 style ="font-size:40px">{!! $volunteer->description !!}</h2>
        <p ><small class="text-muted">{{$volunteer->place}}</small></p>
        <p ><small class="text-muted">{{$volunteer->date}}</small></p>
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

@section('footer')
    <hr>
    @include('footer')
@endsection


@extends('layouts.app')
@section('content')
<h1>Show Details</h1>


<!-- Edit/delete button will appear for only owner -->
<!-- Show specific volunteer in DB -->

<div class="pl-3">
    <div class="card " style="width: 18rem;" style="width: 21.5em;margin:0 auto;">
    <h5 class="card-header">{{$volunteer->title}}</h5>

    <img src="{{URL::asset($volunteer->image_1)}}"  class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">{{$volunteer->description}}</p>
        <p class="card-text"><small class="text-muted">{{$volunteer->place}}</small></p>
        <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
        <a href="{{route('volunteer.edit', $volunteer)}}" class="btn btn-primary"> تحديث </a>
    </div>  
    </div>





<form action="{{route('volunteer.destroy', $volunteer)}}" method="post">
@method('Delete')
@csrf
<button type="button" class="btn btn-danger" onclick="return confirm('هل أنت متأكد؟')">
حذف</button>

</div>

</form>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection
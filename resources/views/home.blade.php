@extends('layouts.app')
@section('content')



<!-- only owner can created -->
<div class="container">
    <a href="{{route('volunteer.create')}}" class=" btn btn-lg"> Create </a>
</div>


<div class="container">
    <a href="{{route('volunteer.show', $volunteer)}}" class=" btn btn-lg"> Show </a>
</div>


<div class="container">
    <a href="{{route('volunteer.index', $volunteer)}}" class=" btn btn-lg"> Index </a>
</div>


@endsection

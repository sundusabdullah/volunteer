
@extends('layouts.app')
@section('content')

<!-- Show All volunteer in DB -->

@forelse($volunteer as $volunteer)
    <div class="card-deck pr-5 pl-5 text-right">
        <div class="card">
            <h5 class="card-header">{{$volunteer->title}}</h5>
            <div class="card-body">
            <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
            <a href="{{route('volunteer.show', $volunteer)}}"  class="btn btn-primary"> عرض التفاصيل </a>
        </div>
    </div>

        @empty
            {{'Not yet'}}
@endforelse
@endsection


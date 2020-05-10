
@extends('layouts.app')
@section('content')

<!-- Show All volunteer in DB -->

@forelse($volunteer as $volunteer)
        <div class="pt-3 pl-3">
            <div class="card " style="width: 18rem;" style="width: 21.5em;margin:0 auto;">
            <h5 class="card-header">{{$volunteer->title}}</h5>
            <div class="card-body">
                <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
                <a href="{{route('volunteer.show', $volunteer)}}" class="btn btn-primary"> عرض التفاصيل </a>
            </div>  
            @empty
            {{'Not yet'}}
         </div>
        </div>

      

    @endforelse
@endsection



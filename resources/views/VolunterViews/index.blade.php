
@extends('layouts.app')
@section('content')

<!-- Show All volunteer in DB -->
<div class="row">
@forelse($volunteer as $volunteer)
    <div class="col-md-4">
        <div class="card  mb-4 mr-3 text-center">
            <h5 class="card-header">{{$volunteer->title}}</h5>
            <div class="card-body">
                <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
                <a href="{{route('volunteer.show', $volunteer)}}"  class="btn btn-primary"> عرض التفاصيل </a>
            </div>
        </div>
    </div>

        @empty
        <div class="alert alert-danger" role="alert">
                لم نقم بإضافة أي فعالية، انتظرونا قرياً
        </div>

@endforelse
</div>


<!-- Only Admin Can create -->
@if($email == $emails)

<div class="container">
    <a href="{{route('volunteer.create')}}" class="btn btn-primary"> إضافة تقرير </a>
</div>
@endif
@endsection


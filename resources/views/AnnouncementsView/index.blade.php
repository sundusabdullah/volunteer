
@extends('layouts.app')
@section('content')

<!-- Show All announcements in DB -->
    <div class="row">
@forelse($announcements as $announcements)
        <div class="col-md-4">
            <div class="card mb-4 mr-3 text-center">
                <h5 class="card-header">{{$announcements->event_name}}</h5>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">{{$announcements->event_date}}</small></p>
                    <a href="{{route('announcements.show', $announcements)}}"  class="btn btn-primary"> عرض التفاصيل </a>
                </div>
            </div>
        </div>
                @empty
                    <div class="alert alert-danger" role="alert">
                        لم نقم بإضافة أي خـبر، انتظرونا قريباً
                    </div>
          

@endforelse
</div>


@if($email == $emails)
<!-- only owner can created -->
<div class="container">
    <a href="{{route('announcements.create')}}" class="btn btn-primary"> إضافة إعلان</a>
</div>

@endif
@endsection
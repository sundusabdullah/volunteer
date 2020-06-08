@extends('layouts.app')
@section('content')

<div class="header">

<img src="images/logo_3.jpg" class="w-100" height="500">

</div>

<div id="About">
@include('about')

</div>

<br><br><br><br><br><br>


<div id="Ads">
    <div class="row">
        @forelse($announcements as $announcements)
            <div class="col-md-4">
                <div class="card mb-4 mr-3 text-center">
                        <h5 class="card-header">{{$announcements->event_name}}</h5>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{$announcements->event_date}}</small></p>
                            <a href="{{route('announcements.show', $announcements)}}"  style="border-radius:10px" class="btn btn-light"> عرض التفاصيل </a>
                        </div>
                </div>
            </div>
        @empty
            <div class="alert alert-danger" role="alert">
                لم نقم بإضافة أي فعالية، انتظرونا قريباً
            </div>
    @endforelse
        </div>
        <div class="container text-right pt-4">
            <a href="{{route('announcements.index', $announcements)}}"  style="border-radius:10px;margin:auto;display:block; width:30%;" class=" btn btn-info btn-lg"> مشاهدة المزيد من الأخبار</a>
        </div>
</div>



<br><br><br><br><br><br>


<div id="Comp">
    <div class="row">
        @forelse($volunteer as $volunteer)
            <div class="col-md-4 ">
                    <div class="card mr-3 text-center">
                        <h5 class="card-header">{{$volunteer->title}}</h5>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">{{$volunteer->date}}</small></p>
                            <a href="{{route('volunteer.show', $volunteer)}}"  style="border-radius:10px" class="btn btn-light"> عرض التفاصيل </a>
                        </div>
                    </div>
            </div>
        @empty
            <div class="alert alert-danger" role="alert">
                لم نقم بإضافة أي خـبر، انتظرونا قريباً
            </div>
        @endforelse
        </div>
        <div class="container text-right pt-4">
            <a href="{{route('volunteer.index', $volunteer)}}" style="border-radius:10px;margin:auto;display:block; width:30%;" class=" btn btn-info btn-lg "> مشاهدة المزيد من التقارير </a>
        </div>
    </div>
@endsection

@section('footer')
    <hr>
    @include('footer')
@endsection


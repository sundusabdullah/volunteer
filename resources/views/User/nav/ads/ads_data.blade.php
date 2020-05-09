<div class="row mb-4 wow fadeIn" >
@foreach ($data as $announcement)
    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-4">
    <!--Card-->
    <div class="card ">

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h3 class="alert-dark p-5">إعلان</h3>
            <hr>
            <h4 class="card-title">{{ $announcement->event_name }}</h4>
            <p dir="rtl">{{Str::limit($announcement->event_description , 100) }}</p>
            <!--Text-->
            <p class="card-text"></p>
            <a href="{{route('details', ['id'=>$announcement->id] ) }}"  class="btn btn-primary btn-md">
                التفاصيل
                <i class="fas fa-play ml-2"></i>
            </a>
        </div>

    </div>
    <!--/.Card-->
    </div>
@endforeach
</div>
    <div class=" d-flex justify-content-center this"> {!! $data->links() !!}</div>


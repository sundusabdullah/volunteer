@extends('layouts.user')

@section('content')

    <!-- Page Content -->
    <div class="container" id="news" style="margin-top: -2rem;">
        <section class="container-fluid bg-white text-center w-75">
            <br/><br/>
            <nav class="text-right justify-content-center" style="font-size: 1rem">
                <a href="/" class="text-muted">الرئيسية</a> >
                <a href="/#announcement" class="text-muted">الأعلانات</a> >
                <a href="" class="text-dark pb-1" style="pointer-events: none; cursor: default;">{{ $announcement->event_name }}</a>

            </nav>
            <div class="row justify-content-center">

                <!-- Post Content Column -->
                <div class="container col-lg-8">
                    <!-- Title -->
                    <h2 class="mt-4">{{ $announcement->event_name }}</h2>

                    <hr>

                    <!-- Date/Time -->
                    <p> {{substr($announcement->created_at, 0, 10)}}&nbsp;:تم نشره في </p>
                    <hr>
                    <div dir="rtl" class="text-right">
                        <label class="text-dark">وصف الفعالية</label>
                        <p class="text-secondary" style="overflow-wrap: break-word;">{{$announcement->event_description}}</p>
                        <div class="d-flex">
                            <label class="text-dark"> مكان الفعالية: &nbsp;</label>
                            <p class="text-secondary"> {{$announcement->event_place}}</p>
                        </div>
                        <div class="d-flex">
                            <label class="text-dark"> مدة الفعالية:&nbsp; </label>
                            <p class="text-secondary">{{$announcement->event_date}}</p>
                        </div>
                        <div class="d-flex">
                            <label class="text-dark"> عدد المقاعد:&nbsp;</label>
                            <p class="text-secondary">{{$announcement->seat_no}}</p>
                        </div>
                    </div>
                    <a href=""  class="btn btn-success btn-md col-md-4 offset-md-2">
                        تقديم
                        <i class="fas fa-play ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- /.row -->
        </section>
    </div>
    <!-- /.container -->
@endsection

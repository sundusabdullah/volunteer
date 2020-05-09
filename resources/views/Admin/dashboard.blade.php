@extends('layouts.admin')

@section('content')
    <div class="container-fluid bg-1 text-center w-75 flex-row-reverse">
        <div class="row">

            <div class="col-sm-9 d-inline-block align-self-start d-flex">
                <div class="col">
                    <div class="card">
                        <div class="card-header">@yield('Header')</div>
                        <div class="card-body">@yield('Content')</div>
                    </div>
                </div>
            </div>

            <div class="col-sm-2 d-inline-block align-self-start mr-5" >
                <div class="bg-light col p-0" style="border: 1px solid lightgray;">

                    <div class="wel">
                        <ul class="list-unstyled text-right" >
                            <li style="border-bottom: 1px solid lightgray;" class="pb-3 pr-2"><a href="{{route('about')}}" class="text-dark text-decoration-none">عن الفريق</a></li>
                            <li style="border-bottom: 1px solid lightgray;" class="pb-3 pr-2"><a href="" class="text-dark text-decoration-none">أخبار الفريق</a></li>
                            <li style="border-bottom: 1px solid lightgray;" class="pb-3 pr-2"><a href="{{route('Announcement')}}" class="text-dark text-decoration-none">الأعلانات</a></li>
                            <li class="pr-2"><a href="" class="text-dark text-decoration-none">نبذة عن الأعضاء</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


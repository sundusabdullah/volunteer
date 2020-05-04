@extends('layouts.app')

@section('content')

    <div class="container-fluid bg-1 text-center"
         id="mainPage"
         style="background-color: white; margin-top: -5rem">
        <br/><br>
        <h1 class="margin"
        style="font-size: 12em"><span style="color: #123c24">العمل </span> <span style="color: #1b4b72">التطوعي</span> </h1>
        <h3  style="font-size: 5em">
            <span style="color: #f6993f">بذرة من
                <span style="color: #9561e2">النقاء،
                </span>
            </span>
            <span style="color: #f6993f">
                تثمر خيرًا <span style="color: #9561e2">
                    وصفاء </span>
            </span>
        </h3>
        <img src="images/volunteer.png" class="w-100" height="475">
    </div>

    @include('nav.about')
    @include('nav.news')​

@endsection


@extends('layouts.user')

@section('content')

    <div class="container text-center"
         id="mainPage">
        <br/><br>
        <h1>
            <span style="color: #123c24">العمل </span> <span style="color: #1b4b72">التطوعي</span> </h1>
        <h2>
            <span style="color: #f6993f">بذرة من
                <span style="color: #9561e2">النقاء،
                </span>
            </span>
            <span style="color: #f6993f">
                تثمر خيرًا <span style="color: #9561e2">
                    وصفاء </span>
            </span>
        </h2>
        <img src="images/volunteer.png" class="w-100" height="500" style="">
    </div>

    @include('User.nav.about')
    @include('User.nav.news.news')​

@endsection


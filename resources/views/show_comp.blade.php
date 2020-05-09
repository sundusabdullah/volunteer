@extends('layouts.app')
@section('content')


    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

@if(!empty($informations))
    <form method="get">
        <div class="card mb-3">

            <div class="card-body">
                @foreach($informations as $information)

                    <h5 class="card-title">{{ $information->title }} </h5>
                    <p class="card-text"><small class="text-muted">{{ $information->place }}</small></p>
                    <p class="card-text"><small class="text-muted">{{ $information->date }} </small></p>
                    <a href="show_all_info" class="btn btn-primary">عرض التفاصيل</a>
            </div>
        </div>
    </form>
@endforeach
@endif

@endsection

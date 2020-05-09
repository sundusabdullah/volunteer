@extends('layouts.app')
@section('content')


    <!DOCTYPE html>
<html>
<head>

    <title>{{config('app.name')}} | {{__(' اضافة فعالية')}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<form method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">عنوان الفعالية</label>
        <input name="title" class="form-control">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">مكان اقامة الفعالية</label>
        <input name="place" class="form-control">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">التاريخ</label>
        <input type="date" name="date" class="form-control">
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">تقرير الفعالية</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <div class="custom-file">
        <h1>صور من الفعالية</h1>
        <input type="file" name="image_1">
        <input type="file" name="image_2">
        <input type="file" name="image_3">
    </div>
    <button name="insert" class="btn btn-primary">insert</button>


</form>

@endsection




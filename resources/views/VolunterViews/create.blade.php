
@extends('layouts.app')
@section('content')
<h1>Create</h1>

<form action="{{route('volunteer.store')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label>عنوان الفعالية</label>
    <input type="text" name="title" class="form-control" >
  </div>

  <div class="form-group">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_1">
  </div>
  <div class="form-group">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_2">
  </div>
  <div class="form-group">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_3">
  </div>
  <div class="form-group">
    <label>تفاصيل الفعالية</label>
    <textarea class="form-control" name="description"  rows="5"></textarea>
  <!-- </div> -->
  <div class="form-group">
    <label>مكان الفعالية</label>
    <input type="text" name="place" class="form-control">
  </div>

  <div class="form-group">
    <label>تاريخ الفعالية</label>
    <input type="date" name="date" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">إضافة</button>
</form>
@endsection
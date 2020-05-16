
@extends('layouts.app')
@section('content')




<div class="form-group pr-5 pl-5  text-right">
  <h1>نشر فعالية</h1>
</div>


<form action="{{route('volunteer.store')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group pr-5 pl-5  text-right">
    <label >عنوان الفعالية</label>
    <input type="text" name="title" class="form-control" >
  </div>

  <div class="form-group pr-5 pl-5 text-right">
    <label >1صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_1">
  </div>
  <div class="form-group pr-5 pl-5 text-right">
    <label >2صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_2">
  </div>
  <div class="form-group pr-5 pl-5 text-right">
    <label >3صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_3">
  </div>
  <div class="form-group pr-5 pl-5 text-right">
    <label>تفاصيل الفعالية</label>
    <textarea id="description" class="form-control" name="description"  rows="5"></textarea>
</div>
  <div class="form-group pr-5 pl-5 text-right">
    <label>مكان الفعالية</label>
    <input type="text" name="place" class="form-control">
  </div>

  <div class="form-group pr-5 pl-5 text-right">
    <label>تاريخ الفعالية</label>
    <input type="date" name="date" class="form-control">
  </div>

  <button type="submit"  style="margin-left:auto;margin-right:auto;display:block;" class="btn btn-primary">إضافة</button>
</form>
@endsection

@section('style')
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection('endstyle')


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
@endsection('scripts')


<script>
      $('#description').summernote({
        tabsize: 2,
        height: 1000
      });
    </script>

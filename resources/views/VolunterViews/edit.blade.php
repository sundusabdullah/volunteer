
@extends('layouts.app')
@section('content')



<div class="form-group pr-5 pl-5  text-right">
    <h1>تعديل الفعالية</h1>
  </div>



<form action="{{route('volunteer.update', $volunteer)}}" method="post" enctype="multipart/form-data">

@method('PATCH')
@csrf
  <div class="form-group pr-5 pl-5  text-right">
    <label>عنوان الفعالية</label>
    <input type="text" name="title" class="form-control" value="{{$volunteer->title}}">
  </div>

  <div class=" form-group pr-5 pl-5  text-right">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_1">
  </div>
  <div class="form-group pr-5 pl-5  text-right">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_2">
  </div>
  <div class="form-group pr-5 pl-5  text-right">
    <label >صور من الفعالية</label>
    <input type="file" class="form-control-file" name="image_3">
  </div>
  <div class="form-group pr-5 pl-5  text-right">
    <label>تفاصيل الفعالية</label>
    <textarea class="form-control" id="description" name="description"  rows="5"><?=$volunteer->description?></textarea>

  </div> 
  <div class="form-group pr-5 pl-5  text-right">
    <label>مكان الفعالية</label>
    <input type="text" name="place" class="form-control" value="{{$volunteer->place}}">
  </div>

  <div class="form-group pr-5 pl-5 text-right">
    <label>تاريخ الفعالية</label>
    <input type="date" name="date" class="form-control" value="{{$volunteer->date}}">
  </div>
  

  <button type="submit" class="btn btn-primary" style="margin-left:auto;margin-right:auto;display:block;">تعديل</button>
</form>
@endsection


@section('style')
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection('endstyle')


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
@endsection('scripts')


<script type="application/javascript">
      $('#description').summernote({
        tabsize: 5,
        height: 1000
      });
</script>


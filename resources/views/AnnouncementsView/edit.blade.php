
@extends('layouts.app')
@section('content')



<div class="form-group pr-5 pl-5  text-right">
    <h1>تعديل الفعالية</h1>
  </div>


<form action="{{route('announcements.update', $announcements)}}" method="post" enctype="multipart/form-data">

@method('PATCH')
@csrf

<div class="form-group pr-5 pl-5 text-right">
    <label>عنوان الفعالية</label>

    <input type="text" name="event_name" class="form-control" value="{{$announcements->event_name}}">
  </div>

  <div class="form-group pr-5 pl-5  text-right">
    <label>تفاصيل الفعالية</label>
    <textarea class="form-control" id="description" name="event_description"  rows="5"><?=$announcements->event_description?></textarea>

  </div>
  <div class="form-group pr-5 pl-5  text-right">
    <label>مكان الفعالية</label>
    <input type="text" name="event_place" class="form-control" value="{{$announcements->event_place}}">
  </div>


  <div class="form-group pr-5 pl-5  text-right">
    <label>المقاعد المتاحة</label>
    <input type="text" name="seat_no" class="form-control" value="{{$announcements->seat_no}}">
  </div>


  <div class="form-group pr-5 pl-5 text-right">
    <label>تاريخ الفعالية</label>
    <input type="date" name="event_date" class="form-control" value="{{$announcements->event_date}}">
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
        tabsize: 2,
        height: 1000
      });
</script>
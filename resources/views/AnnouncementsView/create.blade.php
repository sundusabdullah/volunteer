
@extends('layouts.app')
@section('content')




<div class="form-group pr-5 pl-5  text-right">
  <h1>نشر خبـر</h1>
</div>

<form action="{{route('announcements.store')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group pr-5 pl-5  text-right">
    <label >عنوان الفعالية</label>
    <input type="text" name="event_name" class="form-control" >
  </div>

  <div class="form-group pr-5 pl-5 text-right">
    <label>تفاصيل الفعالية</label>
    <textarea id="description" class="form-control" name="event_description"  rows="5"></textarea>
</div>

  <div class="form-group pr-5 pl-5 text-right">
    <label>مكان الفعالية</label>
    <input type="text" name="event_place" class="form-control">
  </div>


  <div class="form-group pr-5 pl-5 text-right">
    <label>تاريخ الفعالية</label>
    <input type="date" name="event_date" class="form-control">
  </div>

  <div class="form-group pr-5 pl-5 text-right">
    <label>عدد المقاعد المتاحة </label>
    <input type="text" name="seat_no" class="form-control">
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

<script type="application/javascript">
      $('#description').summernote({
        tabsize: 2,
        height: 1000
      });
</script>
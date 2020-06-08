@extends('layouts.app')
@section('content')
<!-- <h1>عرض التفاصيل</h1> -->


<!-- Edit/delete button will appear for only owner -->
<!-- Show specific volunteer in DB -->

<div class="pt-5 pb-5 text-center">
    <h1 class=""> {{$announcements->event_name}} </h1>
    <hr>
            <p class="card-text pt-4">نبذة عن الفعالية : {!! $announcements->event_description !!}</p>
            <p class="card-text">   عدد المقاعد المتاحة : {{$announcements->seat_no}}</p>
            <p class="card-text"><small class="text-muted"> مكان الفعالية : {{$announcements->event_place}}</small></p>
            <p class="card-text"><small class="text-muted">بداية الفعالية : {{$announcements->event_date}}</small></p>
        </div>
      <hr>
      <form action="{{url('send') }}" method="POST" style="">
        @csrf
        <p class="card-text text-center"><small class="text-muted text-center">في حال الضغط على زر مساهمة، سوف تصلك رسالة على البريد المسجل</small></p>

        <button type="submit" style="border-radius:10px;margin:auto;display:block; width:30%; " class="btn btn-info btn-lg " name="send">
        مساهمة
        </button>
      </form>

@if($email == $emails)

    <!-- Make sure this button only appear for admin -->
    <a href="{{route('announcements.edit', $announcements)}}" class="btn btn-primary"> تحديث </a>
    <form action="{{route('announcements.destroy', $announcements) }}" method="post" style="
    display: inline-block">
    @method('DELETE')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('هل أنت متأكد؟')">
    حذف</button>
    @endif
    </form>
    </div>

</div>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
@endsection



@section('footer')
    <hr>
    @include('footer')
@endsection


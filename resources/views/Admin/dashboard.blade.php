@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-right">عن الفريق</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('about.save') }}">
                            @csrf
                            <p class="offset-md-6"><span>يعني ان الحقل مطلوب</span> *</p>


                            <div class="form-group row justify-content-end">
                                <div class="col-md-6">
                                    <textarea rows="4" cols="50" id="about_us"  class="form-control " name="about_us"> {{$about->about_us}}</textarea>

                                </div>
                                <label for="about_us" class="col-md-4 col-form-label text-md-left">* <span>نبذة عن الفريق</span></label>

                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-md-6">
                                    <input id="vision" type="text" class="form-control " name="vision" value="{{$about->vision}}">

                                </div>
                                <label for="vision" class="col-md-4 col-form-label text-md-left">* <span>الرؤية</span></label>

                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-md-6">
                                    <input id="mission" type="text" class="form-control " name="mission" value="{{$about->mission}}">

                                </div>
                                <label for="mission" class="col-md-4 col-form-label text-md-left">* <span>الرسالة</span></label>

                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-md-6">
                                    <input id="date_of_found" type="text" class="form-control" name="date_of_found" value="{{$about->date_of_found}}">


                                </div>
                                <label for="date_of_found" class="col-md-4 col-form-label text-md-left">* <span> تاريخ تأسيس الفريق </span></label>

                            </div>
                            <div class="form-group row justify-content-end">
                                <div class="col-md-6">
                                    <input id="goals" type="text" class="form-control" name="goals" value="{{$about->goals}}">


                                </div>
                                <label for="goals" class="col-md-4 col-form-label text-md-left">* <span> الأهداف </span></label>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        تحديث
                                    </button>
                                    <input type="hidden" value="{{ Session::token() }}" name="_token">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


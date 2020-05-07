@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">تسجيل الدخول</div>

                <div class="card-body">
                    @if(Session::has('error'))
                                <center>
                                    <div class="w-75">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{Session::get('error')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </center>
                    @endif
                    <form method="POST" action="{{ route('Login') }}">
                        @csrf
                        <p class="offset-md-6"><span>يعني ان الحقل مطلوب</span> *</p>
                        <div class="form-group row justify-content-end">
                            <div class="col-md-6">

                                <input id="email"
                                       type="text" class="form-control @error('email')
                                   @if($message != 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.')
                                    is-invalid  @endif
                                   @enderror " name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                @if($message != 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @endif
                                @enderror
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-left">* <span>عنوان البريد الالكتروني</span></label>

                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="password" class="col-md-4 col-form-label text-md-left">* <span> الرقم السري</span></label>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        تذكرني
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                  تسجيل الدخول
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        نسيت الرقم السري؟
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

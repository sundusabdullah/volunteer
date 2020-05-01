@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-right">
                <div class="card-header">إعادة تعيين الرقم السري</div>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <p class="offset-md-6"><span>يعني ان الحقل مطلوب</span> *</p>
                        <div class="form-group row justify-content-end">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-٣">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('أرسل اعادة تعيين الرقم السري') }}
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input id="email"
                                       type="text" class="form-control @error('email')
                                @if($message != 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.')
                                    is-invalid  @endif
                                @enderror " name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="email" class="col-md-3 col-form-label text-md-left">* <span>عنوان البريد الالكتروني</span></label>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

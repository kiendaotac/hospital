@extends('frontend.layout.layout')
@section('content')
<div class="banner-item otp">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
<div class="register-wrap">
    <div class="register-form otp">
        <h3 class="register-form-title">Xác nhận thông tin đăng ký</h3>
        <form action="{{ route('postOtp') }}" method="post">
            <div class="form-group">
                <label for="">  Vui lòng kiểm tra email hoặc số điện thoại đăng ký để lẫy mã OTP xác thực chúng tôi gửi cho bạn:</label>
                <input style="Width:100%" type="text" name="otp" value="" placeholder="Nhập OTP">
                @error('otp')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="hidden" name="id" value="{{ $customer->id }}">
                @csrf
            </div>
            <button type="submit">
               Hoàn tất
            </button>
        </form>
    </div>
</div>
@endsection
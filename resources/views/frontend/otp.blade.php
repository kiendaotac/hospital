@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
<div class="register-wrap">
    <div class="register-form">
        <h3 class="register-form-title">Nhập OTP</h3>
        <form action="#">
            <div class="form-group">
                <label for=""> Nhập mã OTP chúng tôi đã gửi SMS qua điện thoại của bạn</label>
                <input style="Width:100%" type="text" name="name_doctor" value="" placeholder="Nhập OTP">
            </div>
            <button>
               Hoàn tất
            </button>
        </form>
    </div>
</div>
@endsection
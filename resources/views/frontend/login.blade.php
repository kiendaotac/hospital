@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
<div class="register-wrap">
    <div class="register-form login-success">
        @if(session('welcome'))
            {!! session('welcome') !!}
        @endif
        <h3 class="register-form-title">Đăng nhập</h3>
        <form action="{{ route('frontend.customer.login') }}" method="post">
            <div class="form-group">
                <input style="Width:100%" type="number" name="phone" placeholder="Nhập Số điện thoại để đăng nhập" required>
            </div>
            <div class="form-group">
                <input style="Width:100%" type="password" name="password" placeholder="Nhập mật khẩu để đăng nhập" required>
            </div>
            @csrf
            <button type="submit">
                Đăng nhập ngay
            </button>
        </form>
    </div>
</div>
@endsection
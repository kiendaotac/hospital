@extends('frontend.layout.layout')
@section('content')
<!-- <div class="wrap-banner loop owl-carousel owl-theme owl-loaded owl-drag">

    <a>
        <img src="{{asset("assets/images/banner-web-1.jpg")}}" alt="">
    </a>
    <a>
        <img src="{{asset("assets/images/e3b26251542f9371ca3e-scaled.jpg")}}" alt="">
    </a>
    <a>
        <img src="{{asset("assets/images/BVHN-nuoi-con-bang-sua-me.jpg")}}" alt="">
    </a>

</div> -->
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
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
    <h3 class="register-form-title">Đặt lịch khám</h3>
    <form action="#">
        <div class="form-group">
        <label for=""> Nhập số điện thoại </label>
            <input style="Width:100%" type="text" name="name_doctor" value=""
                placeholder="Nhập Số điện thoại để đặt lịch">
        </div>
        <div class="form-group">
            <label for=""> Chọn theo Chuyên khoa </label>
            <select name="park" id="">
                <option value="">Chọn theo Chuyên khoa</option>
                <option value="896">Khoa Chẩn đoán hình ảnh và Điện quang can thiệp</option>
            </select>
        </div>
        <button>
            Đặt lịch ngay
        </button>
    </form>
</div>
</div>
@endsection
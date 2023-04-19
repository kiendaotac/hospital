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
        <form action="{{route('dangky')}}"  enctype="multipart/form-data" method="post" required>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" > 
            <div class="form-group">
                <label for=""> Nhập họ tên của bạn </label>
                <input style="Width:100%" type="text" name="name_doctor" value="" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group">
                <label for=""> Ngày tháng năm sinh</label>
                <input style="Width:100%" type="date" name="date" value="" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group">
                <label for=""> Chọn theo Chuyên khoa </label>
                <select name="service" id="">
                    <option disable>Chọn theo Chuyên khoa</option>
                    <option>Khám thai định kỳ</option>
                    <option>Khám sức khỏe tiền hôn nhân</option>
                    <option>Tiêm chủng</option>
                </select>
            </div>
            <div class="form-group">
                <label for=""> Chọn ngày khám</label>
                <input style="Width:100%" type="date" name="date" value="" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group">
                <label for=""> Chọn giờ khám</label>
                <input id="appt-time" type="time" name="appt-time" min="8:00" max="18:00" required />
            </div>
            <button type="submit">
                Đặt lịch ngay
            </button>
        </form>
    </div>
</div>
@endsection
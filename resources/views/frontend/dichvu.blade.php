@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
    <div class="breadcumb">
    <div class="container"></div>
</div>
<div class="content-page single-content">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dichvu-item">
                <h4 class="fs18 b600">Khám bệnh</h4>
                <img class="normal" src="{{asset("assets/images/dich-vu-kham-benh.png")}}">
            </div>
            <div class="dichvu-item">
                <h4 class="fs18 b600">Cận lâm sàng</h4>
                <img class="normal" src="{{asset("assets/images/can-lam-sang.png")}}">
                <img class="normal" src="{{asset("assets/images/can-lam-sang-2.png")}}">
            </div>
            <div class="dichvu-item">
                <h4 class="fs18 b600">Điều trị</h4>
                <img class="normal" src="{{asset("assets/images/dieu-tri.png")}}">
            </div>
            <div class="dichvu-item">
                <h4 class="fs18 b600">Gói đăng ký</h4>
                <img class="normal" src="{{asset("assets/images/dich-vu-thanh-vien.png")}}">
            </div>
          </div>
        </div>
    </div>
</div>
</div>
@endsection
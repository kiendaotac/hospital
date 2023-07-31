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
                <img class="normal" src="{{asset("assets/images/dichvu-001.jpg")}}" alt="dichvu-001">
                <img class="normal" src="{{asset("assets/images/dichvu-002.jpg")}}" alt="dichvu-002">
                <img class="normal" src="{{asset("assets/images/dichvu-003.jpg")}}" alt="dichvu-003">
                <img class="normal" src="{{asset("assets/images/dichvu-004.jpg")}}" alt="dichvu-004">
            </div>
          </div>
        </div>
    </div>
</div>
</div>
@endsection
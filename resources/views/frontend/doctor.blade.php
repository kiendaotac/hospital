@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
<div class="content-page about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="page-title b700" >Đội ngũ chuyên gia</h2>
            <p style="    text-align: justify;">Phòng Khám Sản Phụ Khoa TINA là nơi quy tụ của đội ngũ y bác sĩ chuyên khoa tài giỏi, giàu kinh nghiệm chuyên môn, đã và đang công tác tại những bệnh viện Từ Dũ, Hùng Vương.</p>
            <div class="list-doctor">
              @foreach($doctors as $doctor)
              <div class="item-doctor d-flex">
                <div class="thumb"> <a href="{{route('doctor_detail',$doctor->id)}}"> <img
                      src="{{asset('storage/'.$doctor->avatar)}}" class="w-100"> </a>
                </div>
                <div class="info">
                  <h3><a href="{{route('doctor_detail',$doctor->id)}}">{{$doctor->name}}
                  </a></h3>
                  <p><span class="b600"> Chuyên khoa:</span> {{$doctor->specialist}}</p>
                  
                  <p><span  class="b600"> Hoạt động chuyển ngành</span>: {{$doctor->activity}}</p>
                </div>
              </div>
              @endforeach
            </div>
  
          </div>
          <div class="col-md-4">
            <div class="sidebar"></div>
          </div>
        </div>
      </div>
    </div>
    @endsection
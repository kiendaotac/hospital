@extends('frontend.layout.layout')
@section('content')
<div class="page-banner"> <img
        src="{{asset("assets/images/banner.png")}}"
        class="w-100"></div>
<div class="content-page about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1 class="page-title">Đội ngũ chuyên gia</h1>

            <div class="list-doctor">
              @foreach($doctors as $doctor)
              <div class="item-doctor d-flex">
                <div class="thumb"> <a href="{{route('doctor_detail',$doctor->id)}}"> <img
                      src="{{asset('storage/'.$doctor->avatar)}}" class="w-100"> </a>
                </div>
                <div class="info">
                  <h3><a href="{{route('doctor_detail',$doctor->id)}}">{{$doctor->name}}
                  </a></h3>
                  <p><img src="{{asset("assets/images/icon-level.png")}}" alt=""> {{$doctor->education}}</p>
                  
                  <p><img src="{{asset("assets/images/icon-17.svg")}}" alt=""> {{$doctor->phone}}</p>
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
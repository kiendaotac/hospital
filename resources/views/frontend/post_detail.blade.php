@extends('frontend.layout.layout')
@section('content')
<div class="page-banner"> <img
        src="{{asset("assets/images/banner.png")}}"
        class="w-100"></div>
    <div class="breadcumb">
      <div class="container"></div>
    </div>
    <div class="content-page service-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">{{$post->title}}</h1>
            <div class="page-simple">
              <p style="text-align: justify;"><span style="color: #000000;">{{$post->excerpt}}</b></span></p>
                {!!$post->content!!}
            </div>
        
          </div>
       
        </div>
      </div>
    </div>
    @endsection
@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
<div class="container">
<h2 class="page-title  b700">Bài viết danh mục "{{$category->name}}"</h2>
    <div class="row">
        @foreach($blogs as $post)

        <div class="col-md-4 post-item">
            <div class="normal-post"> <a href="{{route('post',$post->slug)}}">
            <div class="date">
                        <span>{{Carbon\Carbon::parse($post->created_at)->format('d')}}</span>
                        <span>{{Carbon\Carbon::parse($post->created_at)->format('M')}}</span>
                    </div>
                    <img src="{{$post->banner_url}}">
                </a>
                <h4><strong><a
                            href="{{route('post',$post->slug)}}">
                            {{$post->title}}</a></strong></h4>
                <div class="excerpt text-justify">
                    <p> {{Str::limit($post->excerpt, 200 , ' ...')}} </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
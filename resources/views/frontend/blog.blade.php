@extends('frontend.layout.layout')
@section('content')
<div class="container">
<h1 class="page-title">Tin tức phụ sản Tina</h1>
    <div class="row">
        @foreach($blogs as $post)

        <div class="col-md-4">
            <div class="normal-post"> <a href="{{route('post',$post->slug)}}">
                    <img src="{{$post->banner_url}}">
                </a>
                <h4><strong><a
                            href="{{route('post',$post->slug)}}">
                            {{$post->title}}</a></strong></h4>
                <div class="excerpt text-justify">
                    <p> {{$post->excerpt}}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
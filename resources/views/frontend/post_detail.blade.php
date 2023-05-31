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
          <div class="col-md-8">
            <h1 class="page-title post-title">{{$post->title}}</h1>
            <div class="page-simple">
              <p style="text-align: justify;"><span style="color: #000000;">{{$post->excerpt}}</b></span></p>
                {!!$post->content!!}
            </div>
          </div>
          <div class="col-md-4">
                <div class="sidebar">
                    <!-- <div id="search-5" class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform"
                            action="">
                            <div> <label class="screen-reader-text" for="s">Tìm kiếm cho:</label> <input type="text"
                                    value="" name="s" id="s"> <input type="submit" id="searchsubmit" value="Tìm kiếm">
                            </div>
                        </form>
                    </div> -->
                    <div id="nsfp-featured-post-widget-3" class="widget nsfp_featured_post_widget">
                        <h2 class="widget-title">Bài viết gần đây</h2>
                        <ul>
                          @foreach($posts as $post )
                            <li> 
                              <a href="{{route('post',$post->slug)}}">
                              {{Str::limit($post->title, 79 , ' ...')}}
                              </a>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    @endsection
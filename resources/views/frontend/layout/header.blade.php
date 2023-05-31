<div class="wrap-header d-none d-lg-block">
    <div class="topbar">
        <div class="container ">
            <div class="d-flex" style="justify-content: flex-end;">
                <a href="tel: 0858608080" class=" text-white info2 ml-3 mb-0">
                    <img src="{{asset("assets/images/icon-2.svg")}}" )}}">
                    <span class="text-white pl-2">
                        0858 60 80 80
                    </span>
                </a>
                <p class="ml-3 mb-0" style="line-height: 32px;">
                    &nbsp;
                    <span class="fs18 b600 text-white">
                        |
                    </span>
                    &nbsp;
                    @auth('customer')
                <div class="switch-lang ">
                    <a class="text-white pointer">Xin chào!
                        {{ \Illuminate\Support\Facades\Auth::guard('customer')->user()->name }} <img width="10px"
                            src="{{asset("assets/images/icon-down.png")}}" )}}"></a>
                    <ul>
                        <li><a href="{{route('frontend.lichsukham')}}">Lịch sử khám</a> </li>
                        <li><a href="{{ route('frontend.customer.logout') }}">Thoát</a></li>
                    </ul>
                </div>
                @else
                <div data-toggle="modal" data-target="#login" class="switch-lang ">
                    <a class="text-white pointer">Đăng nhập</a>
                </div>
                @endauth
                <div class="modal modal-login fade" id="login" tabindex="1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                                X
                            </button>
                            <div class="modal-body">
                                <h2 class="modal-title">
                                    Đăng nhập
                                </h2>
                                <div class="appointment-form-popup">
                                    <form action="{{ route('frontend.customer.login') }}" method="post">
                                        <div class="form-group">
                                            <input style="Width:100%" type="number" name="phone"
                                                placeholder="Nhập Số điện thoại để đăng nhập" required>
                                        </div>
                                        <div class="form-group">
                                            <input style="Width:100%" type="password" name="password"
                                                placeholder="Nhập mật khẩu để đăng nhập" required>
                                        </div>
                                        @csrf
                                        <button type="submit">
                                            Đăng nhập
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="wrap-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset("assets/images/logo-tina.png")}}"  class="logo-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="menu-menu-1-container">
                        <ul id="menu-menu-1" class="main-menu navbar-nav ml-auto">
                            <li id="menu-item-947"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-947">
                                <a href="{{route('gioithieu')}}">
                                    Giới thiệu
                                </a>

                            </li>

                            <li id="menu-item-84590"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84590">
                                <a href="{{route('doi-ngu-bac-si')}}">
                                    Đội ngũ bác sĩ
                                </a>
                            </li>
                            <li id="menu-item-84590"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84590">
                                <a href="{{route('dichvu')}}">
                                    Dịch vụ của chúng tôi
                                </a>
                            </li>

                            @php
                            $categories = \Stephenjude\FilamentBlog\Models\Category::all();
                            @endphp
                            <li id="menu-item-1106"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1106">
                                <a href="{{route('blog')}}">
                                    Tin tức và ưu đãi
                                </a>
                                <ul class="sub-menu">
                                  @foreach($categories as $category)
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                                        <a
                                            href="{{route('danhmuc',$category->slug)}}">{{$category->name}}
                                          </a>
                                          </li>
                                    @endforeach
                                </ul>

                            </li>

                            <li id="menu-item-1103"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1103">
                                <a href="{{route('lienhe')}}">
                                    Liên hệ
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="header-mobile d-block d-lg-none">
    <div class="topbar">
        <div class="container ">
            <div class="d-flex" style="justify-content: center;">
                <p class=" info2 ml-3 mb-0">
                    <a href="tel: 0858608080" class=" text-white info2 ml-3 mb-0">
                        <img src="{{asset("assets/images/icon-2.svg")}}" )}}" height="55px">
                        <span class="text-white pl-2">
                            0858 60 80 80
                        </span>
                    </a>
                </p>
                <p class="ml-3 mb-0" style="line-height: 32px;">
                    &nbsp;
                    <span class="fs18 b600 text-white">
                        |
                    </span>
                    &nbsp;
                    @auth('customer')
                <div class="switch-lang ">
                    <a class="text-white pointer">Xin chào!
                        {{ \Illuminate\Support\Facades\Auth::guard('customer')->user()->name }} <img width="10px"
                            src="{{asset("assets/images/icon-down.png")}}" )}}"></a>
                    <ul>
                        <li><a>Lịch sử khám</a> </li>
                        <li><a>Thoát</a></li>
                    </ul>
                </div>
                @else
                <div data-toggle="modal" data-target="#login3" class="switch-lang ">
                    <a class="text-white pointer">Đăng nhập</a>
                </div>
                <div class="modal modal-login fade" id="login3" tabindex="1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                                X
                            </button>
                            <div class="modal-body">
                                <h2 class="modal-title">
                                    Đăng nhập
                                </h2>
                                <div class="appointment-form-popup">
                                    <form action="{{ route('frontend.customer.login') }}" method="post">
                                        <div class="form-group">
                                            <input style="Width:100%" type="number" name="phone"
                                                placeholder="Nhập Số điện thoại để đăng nhập" required>
                                        </div>
                                        <div class="form-group">
                                            <input style="Width:100%" type="password" name="password"
                                                placeholder="Nhập mật khẩu để đăng nhập" required>
                                        </div>
                                        @csrf
                                        <button type="submit">
                                            Đăng nhập
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div class="header-mobile-middle">
        <div class="button_container unactive" id="toggle">
            <span class="top">
            </span>
            <span class="middle">
            </span>
            <span class="bottom">
            </span>
        </div>
        <div class="mobile-logo">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset("assets/images/logo-tina.png")}}" class="logo-top">
            </a>
        </div>
        <div class="menu-menu-1-container">
            <ul id="menu-menu-2" class="mobile-menu navbar-nav ml-auto">
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-947">
                    <a href="{{route('gioithieu')}}">
                        Giới thiệu
                    </a>
                   
                </li>
                
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84590">
                    <a href="{{route('doi-ngu-bac-si')}}">
                        Đội ngũ bác sĩ
                    </a>
                </li>
        
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1103">
                    <a href="{{route('dichvu')}}">
                        Dịch vụ của chúng tôi
                    </a>

                </li>
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1106">
                    <a href="{{route('blog')}}">
                        Tin tức và ưu đãi
                    </a>
                    <ul class="sub-menu">
                    <span class="submenu-button">
                    <img width="20px" src="{{asset("assets/images/icon-down-black.png")}}" )}}">
                    </span>
                    @foreach($categories as $category)
                                
                                          <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31861"
                    style="display: none;">
                      <a href="{{route('danhmuc',$category->slug)}}">
                      {{$category->name}}
                      </a>
                    </li>
                                    @endforeach
                
                  </ul>
                </li>

                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1103">
                    <a href="{{route('lienhe')}}">
                        Liên hệ
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobile-meta 22">
            <span class="search-form-tigger" data-toggle="search-form">
                <div data-toggle="modal" data-target="#exampleModal" class="item item-1">
                    <img src="{{asset("assets/images/time-management.png")}}">
                </div>

            </span>

        </div>
        <div class="switch-lang-mobile">
        </div>
    </div>
</div>
@if($errors->count())
<script>
alert('{{ $errors->first() }}')
</script>
@endif
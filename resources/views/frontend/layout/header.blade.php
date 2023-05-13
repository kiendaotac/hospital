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
                        <a class="text-white pointer">Xin chào! {{ \Illuminate\Support\Facades\Auth::guard('customer')->user()->name }} <img width="10px" src="{{asset("assets/images/icon-down.png")}}" )}}"></a>
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
                <div class="modal modal-login fade" id="login" tabindex="1" role="dialog"
                     aria-hidden="true">
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
                                            Đăng nhập ngay
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
                    <img src="{{asset("assets/images/logo-tina.png")}}" width="80px" class="logo-top">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false"
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
                                <a href="{{route('doctor')}}">
                                    Đội ngũ bác sĩ
                                </a>
                            </li>
                            <li id="menu-item-84590"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84590">
                                <a href="{{route('dichvu')}}">
                                    Dịch vụ của chúng tôi
                                </a>
                            </li>

                            <li id="menu-item-1106"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1106">
                                <a href="{{route('blog')}}">
                                    Tin tức và ưu đãi
                                </a>

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
                    <img src="{{asset("assets/images/icon-2.svg")}}" )}}" height="55px">
                    <span class="text-white pl-2">
                        0915 45 13 13
                    </span>
                </p>
                <p class="ml-3 mb-0" style="line-height: 32px;">
                    &nbsp;
                    <span class="fs18 b600 text-white">
                        |
                    </span>
                    &nbsp;
                    @auth('customer')
                    <div class="switch-lang ">
                        <a class="text-white pointer">Xin chào! {{ \Illuminate\Support\Facades\Auth::guard('customer')->user()->name }} <img width="10px" src="{{asset("assets/images/icon-down.png")}}" )}}"></a>
                    <ul>
                      <li><a>Lịch sử khám</a> </li>
                      <li><a>Thoát</a></li>
                    </ul>
                      </div>
                @else
                    <div data-toggle="modal" data-target="#login" class="switch-lang ">
                        <a class="text-white pointer">Đăng nhập</a>
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
                <img src="{{asset("assets/images/logo-tina.png")}}" width="80px"  class="logo-top">
            </a>
        </div>
        <div class="menu-menu-1-container">
            <ul id="menu-menu-2" class="mobile-menu navbar-nav ml-auto">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-947">
                    <a href="{{route('gioithieu')}}">
                        Giới thiệu
                    </a>
                    <!-- <ul class="sub-menu">
                    <span class="submenu-button">
                      <i class="fa fa-angle-down" aria-hidden="true">
                      </i>
                      <i class="fa fa-angle-up" aria-hidden="true">
                      </i>
                    </span>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31809"
                    style="display: none;">
                      <a href="#benh-vien-da-khoa-hong-ngoc-yen-ninh/">
                        Bệnh viện Đa khoa Hồng Ngọc Yên Ninh
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-50259"
                    style="display: none;">
                      <a href="#benh-vien-da-khoa-hong-ngoc-co-so-my-dinh/">
                        Bệnh viện Đa khoa Hồng Ngọc Phúc Trường Minh
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-948"
                    style="display: none;">
                      <a href="#phong-kham-hong-ngoc-keangnam/">
                        Phòng khám Đa khoa Hồng Ngọc Keangnam
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31811"
                    style="display: none;">
                      <a href="#phong-kham-hong-ngoc-savico/">
                        Phòng khám Đa khoa Hồng Ngọc Savico
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31810"
                    style="display: none;">
                      <a href="#phong-kham-da-khoa-hong-ngoc-nguyen-tuan/">
                        Phòng khám Đa khoa Hồng Ngọc Nguyễn Tuân
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31812"
                    style="display: none;">
                      <a href="#phong-kham-hong-ngoc-to-huu/">
                        Phòng khám Đa khoa Hồng Ngọc Tố Hữu
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-54933"
                    style="display: none;">
                      <a href="#tung-bung-khai-truong-phong-kham-da-khoa-kosmo-tay-ho/">
                        Phòng khám Đa khoa Hồng Ngọc Tây Hồ
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-72010"
                    style="display: none;">
                      <a href="https://issuu.com/benhvienhongngoc/docs/hongngoc_2021">
                        Brochure Bệnh viện Đa khoa Hồng Ngọc
                      </a>
                    </li>
                  </ul> -->
                </li>
                <!-- <li class="mega menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-955">
                  <a href="#dich-vu-y-te/">
                    Dịch vụ y tế
                  </a>
                  <ul class="sub-menu">
                    <span class="submenu-button">
                      <i class="fa fa-angle-down" aria-hidden="true">
                      </i>
                      <i class="fa fa-angle-up" aria-hidden="true">
                      </i>
                    </span>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44355"
                    style="display: none;">
                      <a href="#cac-chuyen-khoa-cua-benh-vien/">
                        Các chuyên khoa
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40308"
                    style="display: none;">
                      <a href="#dich-vu-thai-san-va-sinh-con-tron-goi/">
                        Thai sản và sinh con trọn gói
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40189"
                    style="display: none;">
                      <a href="https://ivfhongngoc.com/tiet-kiem-30-cho-lieu-trinh-ivf/">
                        Hỗ trợ sinh sản IVF Hồng Ngọc
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40190"
                    style="display: none;">
                      <a href="#kham-benh-tai-nha/">
                        Khám bệnh tại nhà
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-54993"
                    style="display: none;">
                      <a href="#dich-vu-tam-soat-ung-thu/">
                        Tầm soát ung thư
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64823"
                    style="display: none;">
                      <a href="#kham-suc-khoe-dinh-ky-ca-nhan/">
                        Khám sức khỏe định kỳ cá nhân
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37669"
                    style="display: none;">
                      <a href="#kham-suc-khoe-doanh-nghiep/">
                        Khám sức khỏe doanh nghiệp
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993"
                    style="display: none;">
                      <a href="#kham-suc-khoe-xuat-khau-lao-dong/">
                        Khám sức khỏe xuất khẩu lao động- work permit vietnam
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-74439"
                    style="display: none;">
                      <a href="#work-permit/">
                        KSK cấp giấy phép lao động
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48595"
                    style="display: none;">
                      <a href="#tam-soat-benh-ly/">
                        Gói khám phát hiện bệnh lý
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1019"
                    style="display: none;">
                      <a href="#tiem-chung/">
                        Tiêm chủng
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44388"
                    style="display: none;">
                      <a href="#bao-hiem-hong-ngoc/">
                        Bảo hiểm Hồng Ngọc
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1023"
                    style="display: none;">
                      <a href="#dich-vu-cap-cuu/">
                        Dịch vụ cấp cứu
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79617"
                    style="display: none;">
                      <a href="#coxuongkhop/">
                        Cơ xương khớp
                      </a>
                    </li>
                  </ul>
                </li> -->
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84590">
                    <a href="{{route('doctor')}}">
                        Đội ngũ bác sĩ
                    </a>
                </li>
                <!-- <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1111">
                  <a href="#tu-van-suc-khoe/">
                    Tư vấn sức khỏe
                  </a>
                  <ul class="sub-menu">
                    <span class="submenu-button">
                      <i class="fa fa-angle-down" aria-hidden="true">
                      </i>
                      <i class="fa fa-angle-up" aria-hidden="true">
                      </i>
                    </span>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31862"
                    style="display: none;">
                      <a href="#tu-van-suc-khoe/song-khoe/">
                        Sống khỏe
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31864"
                    style="display: none;">
                      <a href="#tu-van-suc-khoe/cau-chuyen-khach-hang/">
                        Câu chuyện khách hàng
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31863"
                    style="display: none;">
                      <a href="#benh-hoc/">
                        Bệnh học A – Z
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31867"
                    style="display: none;">
                      <a href="#tu-dien-co-the/">
                        Từ điển cơ thể
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66516"
                    style="display: none;">
                      <a href="#covid-19/?utm_source=Ref&amp;utm_medium=Organic&amp;utm_campaign=Ncov2021&amp;utm_term=1&amp;utm_content=Home">
                        Toàn tập Covid-19
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70034"
                    style="display: none;">
                      <a href="#nuoi-con-bang-sua-me/">
                        Cẩm nang nuôi con bằng sữa mẹ
                      </a>
                    </li>
                  </ul>
                </li> -->
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1103">
                    <a href="{{route('dichvu')}}">
                        Dịch vụ của chúng tôi
                    </a>
           
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1106">
                    <a href="{{route('blog')}}">
                        Tin tức và ưu đãi
                    </a>
                    <!-- <ul class="sub-menu">
                    <span class="submenu-button">
                      <i class="fa fa-angle-down" aria-hidden="true">
                      </i>
                      <i class="fa fa-angle-up" aria-hidden="true">
                      </i>
                    </span>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31861"
                    style="display: none;">
                      <a href="#tin-tuc/thong-tin-uu-dai/">
                        Thông tin ưu đãi
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-31860"
                    style="display: none;">
                      <a href="#tin-tuc/thong-tin-su-kien/">
                        Hoạt động của Hồng Ngọc
                      </a>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1107"
                    style="display: none;">
                      <a href="#tin-tuc/tu-thien/">
                        Từ thiện – Vì cộng đồng
                      </a>
                    </li>
                  </ul> -->
                </li>
        
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1103">
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
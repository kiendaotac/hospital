@extends('frontend.layout.layout')
@section('content')
<div class="bts-popup" role="alert">
    <div class="bts-popup-container">
        <form action="{{route('nhaptelephone')}}">
            <div class="form-group">
                <input type="telephone" name="telephone" value=""
                    placeholder="Nhập Số điện thoại để đặt lịch" required>
            </div>

            <button>
                Đặt lịch ngay
            </button>
        </form>
        <a href="#0" class="bts-popup-close img-replace">Close</a>
    </div>
</div>
<div class="wrap-banner loop owl-carousel owl-theme owl-loaded owl-drag">
    <div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div>
</div>
<div class="section-1">
    <div class="container">
        <div class="content">
            <div data-toggle="modal" data-target="#exampleModal" class="item item-1">
                <img class="normal" src="{{asset("assets/images/icon-3.svg")}}">
                <img class="active" src="{{asset("assets/images/icon-3-active.svg")}}">
                <span class="pl-3">
                    Giờ làm việc
                </span>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                            X
                        </button>
                        <div class="modal-body">
                            <h2 class="modal-title b700">
                                Giờ làm việc
                            </h2>
                            <p>
                                Với mong muốn mang lại cho quý khách hàng các dịch vụ y tế chất lượng
                                cao, phục vụ kịp thời nhất, Phụ sản Tina áp dụng giờ làm việc như
                                sau:
                            </p>
                            <div class="list-time">
                                <p>
                                    <span class="text-left">
                                        Phòng khám phụ sản Tina Hồ Chí Minh
                                    </span>
                                    <span class="text-right">
                                    Thứ 2 đến thứ 6 từ 16h30 - 20h30<br> Thứ 7, Chủ nhật: sáng 8h-11h30, chiều 13h - 20h30
                                    </span>
                                </p>

                                <div class="contact">
                                    <a href="tel:0858 60 80 80">
                                        <img src="{{asset("assets/images/phone.png")}}">
                                        0858 60 80 80
                                    </a>
                                    <span>
                                        Mọi thông tin chi tiết xin liên lạc với Hotline của Phụ sản Tina.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-toggle="modal" data-target="#exampleModal3" class="item item-2">
                <img class="normal" src="{{asset("assets/images/icon-5.svg")}}">
                <img class="active" src="{{asset("assets/images/icon-5-active.svg")}}">
                <span class="pl-3">
                    Đặt lịch khám
                </span>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                            X
                        </button>
                        <div class="modal-body">
                            <h2 class="modal-title b700">
                                Đăng ký lịch khám
                            </h2>
                            <div class="appointment-form-popup">
                                <form action="{{route('nhaptelephone')}}">
                                    <div class="form-group">
                                        <input style="Width:100%" type="number" name="telephone" value=""
                                            placeholder="Nhập Số điện thoại để đặt lịch" required>
                                    </div>

                                    <button>
                                        Đặt lịch ngay
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-toggle="modal" data-target="#exampleModal4" class="item item-3">
                <img class="normal" src="{{asset("assets/images/icon-6.svg")}}">
                <img class="active" src="{{asset("assets/images/icon-6-active.svg")}}">
                <span class="pl-3">
                    Chi nhánh Phụ sản Tina
                </span>
            </div>
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-add">
                        <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                            X
                        </button>
                        <div class="modal-body">
                            <h2 class="modal-title b700">
                                Hệ thống Phụ sản Tina
                            </h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item-add d-flex">
                                        <img src="{{asset("assets/images/map.png")}}">
                                        <p class="text-bold">
                                            <b>
                                                Phòng khám Phụ sản Tina Hồ Chí Minh
                                            </b>
                                            <br>
                                            738 Quang Trung, Phường 8
                                            Quận Gò Vấp, Thành Phố Hồ Chí Minh
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
        </div>
    </div>
</div>
<div class="clearfix">
</div>
<div class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="">
                    <h1 class="fs30 b700 text-uppercase">
                        DỊCH VỤ
                        <br>
                        PHỤ SẢN TINA
                    </h1>
                    <p style="text-align: justify">
                        Thăm khám và điều trị tại Phụ Sản Tina, khách hàng sẽ được
                        trải nghiệm các dịch vụ chăm sóc sức khỏe chất lượng cao đạt tiêu chuẩn
                        quốc tế.
                    </p>
                    <a class="read-more" href="{{route('gioithieu')}}">Tìm hiểu thêm</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="wrap-dichvu loop owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/cham-soc-truoc-sinh.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/cham-soc-truoc-sinh.jpg" )}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#kham-tai-nha-bv-hong-ngoc" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Chăm sóc, tư vấn trước sinh
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/cap-cuu.jpg" )}}">
                                <img class="owl-lazy"
                                    data-src="{{asset("assets/images/kham-va-dieu-tri-phu-khoa.jpg" )}}" alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" )}}" style="width: 28px;">
                            <a href="#dich-vu-cap-cuu/" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Khám và điều trị các bệnh phụ khoa
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/sang-loc-ung-thu.png" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/sang-loc-ung-thu.png")}}" alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Sàng lọc ung thư phụ khoa
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/kham-tong-quat.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/kham-tong-quat.jpg" )}}" alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#tiem-chung/" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Gói khám sức khỏe phụ nữ tổng quát
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/kham-nhi-tong-quat.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/kham-nhi-tong-quat.jpg" )}}"
                                    alt="" src="{{asset("assets/kham-nhi-tong-quat.jpg")}}" style="opacity: 1;">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#goi-kham-nhi/" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Khám sức khỏe tiền hôn nhân
                                </span>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>
<div class="section-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="fs28 b700 text-white text-uppercase mb-5">
                    Số Liệu nổi bật
                </h2>
                <div class="blog-1">
                    <div class="d1 d-flex aic">
                        <div class="d-flex" style="margin-left: 35px;">
                            <img src="{{asset("assets/images/icon-10.svg")}}">
                            <div class="pl-3">
                                <p class="fs30 b600 text-white mb-0 funfacts" id="num1" style="line-height: 45px;"
                                    max="19" time="2">
                                    1
                                </p>
                                <p class="mb-0 text-white fs16">
                                    Năm thành lập
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d2 d-flex aic">
                        <div class="d-flex" style="margin-left: 35px;">
                            <img src="{{asset("assets/images/icon-12.svg")}}">
                            <div class="pl-3">
                                <p class="fs30 b600 text-white mb-0 funfacts" max="206" time="3"
                                    style="line-height: 45px;">
                                    7
                                </p>
                                <p class="mb-0 text-white fs16">
                                    Chuyên gia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d3 d-flex aic">
                        <div class="d-flex" style="margin-left: 35px;">
                            <img src="{{asset("assets/images/icon-13.svg")}}">
                            <div class="pl-3">
                                <p class="fs30 b600 text-white mb-0 " style="line-height: 45px;">
                                    <span>
                                        0
                                    </span>
                                </p>
                                <p class="mb-0 text-white fs16">
                                    Bệnh nhân
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d4 d-flex aic">
                        <div class="d-flex" style="margin-left: 35px;">
                            <img src="{{asset("assets/images/icon-14.svg")}}">
                            <div class="pl-3">
                                <p class="fs30 b600 text-white mb-0 funfacts" max="7" time="2"
                                    style="line-height: 45px;">
                                    1
                                </p>
                                <p class="mb-0 text-white fs16">
                                    Cơ sở
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-2">
                    <p class="text-white text-justify mb-4">
                        Từ những ngày đầu đi vào hoạt động, Phụ sản Tina đã từng bước tạo dựng uy
                        tín và danh tiếng với mô hình phòng khám phụ sản tiên phong ở TP.Hồ Chí Minh
                        cũng như toàn khu vực miền Nam.
                    </p>
                    <div class="d-flex wrap-doctor" style="align-items: flex-end;">
                    <img style="max-width: 200px" src="{{asset("assets/images/Bac-si-Nhat.jpg")}}">
                        <div class="pl-3">
                            <div style="border-bottom: 1px solid #FFFFFF;">
                                <p class="fs18 text-uppercase b600 text-white mb-0">
                                    ThS, BS HỒ QUANG NHẬT
                                </p>
                                <p class="text-white">
                                    Giám đốc Phòng khám Phụ sản Tina
                                </p>
                            </div>
                            <div class="d-flex mt-3" style="align-items: flex-start;">
                                <img src="{{asset("assets/images/icon-15.svg")}}">
                                <p class="mb-0 pl-3 text-white text-justify">
                                    Với đội ngũ bác sĩ giỏi chuyên môn, liên tục cập nhật những phương pháp
                                    điều trị hiện đại, Phòng khám Tina luôn không ngừng phấn đấu để khẳng
                                    định sứ mệnh lớn lao mà mình theo đuổi bằng việc trở thành hệ thống y tế
                                    tư nhân hàng đầu Việt Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>
<div class="section-4">
    <div class="container">
        <div class="d-flex jcs aic pb-2 w-100" style="border-bottom: 1px solid #2F4857;">
            <h2 class="fs28 b700 text-uppercase ls2 mb-0">
                tin tức hoạt động
            </h2>
            <p class="mb-0">
                <a class="more" href="{{route('blog')}}">
                    Xem thêm
                </a>
            </p>
        </div>
        <div class="row mt-4">
            @foreach($posts as $post )
            <div class="col-md-4 mb-4 post-item">
                <div class="ovh">
                    <div class="date">
                        <span>{{Carbon\Carbon::parse($post->created_at)->format('d')}}</span>
                        <span>{{Carbon\Carbon::parse($post->created_at)->format('M')}}</span>
                    </div>
                    <a href="{{route('post',$post->slug)}}">
                        <img data-src="{{$post->banner_url}}" class="img-zoom lazy"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                    </a>
                </div>
                <a href="{{route('post',$post->slug)}}">
                    <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                        {{Str::limit($post->title, 79 , ' ...')}}
                    </p>
                </a>
                <p class=" text-justify">
                    {{Str::limit($post->excerpt, 200 , ' ...')}}
                </p>
            </div>
            @endforeach
        </div>

    </div>
</div>
<div class="clearfix">
</div>

<div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6645603591746!2d106.65425467558968!3d10.836961889315527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0c3cfcb85%3A0x491224bfa9033145!2zNzM4IFF1YW5nIFRydW5nLCBQaMaw4budbmcgOCwgR8OyIFbhuqVwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1682176344410!5m2!1svi!2s"
        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection
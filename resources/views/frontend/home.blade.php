@extends('frontend.layout.layout')
@section('content')
<div class="wrap-banner loop owl-carousel owl-theme owl-loaded owl-drag">

    <a>
        <img src="{{asset("assets/images/banner.png")}}" alt="">
    </a>
    <!-- <a>
        <img src="{{asset("assets/images/e3b26251542f9371ca3e-scaled.jpg")}}" alt="">
    </a>
    <a>
        <img src="{{asset("assets/images/BVHN-nuoi-con-bang-sua-me.jpg")}}" alt="">
    </a> -->

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
                            <h2 class="modal-title">
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
                                        24/7
                                    </span>
                                </p>
                                <!-- <p>
                        <span class="text-left">
                          Phòng khám Đa khoa Hồng Ngọc Keangnam
                        </span>
                        <span class="text-right">
                          7h30 - 17h00
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Phòng khám Đa khoa Hồng Ngọc Savico
                        </span>
                        <span class="text-right">
                          7h00 - 18h00
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Phòng khám Đa khoa Hồng Ngọc Nguyễn Tuân
                        </span>
                        <span class="text-right">
                          8h00 - 18h00
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Phòng khám Đa khoa Hồng Ngọc Tố Hữu
                        </span>
                        <span class="text-right">
                          8h00 - 18h00
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Phòng khám Đa khoa Hồng Ngọc Tây Hồ
                        </span>
                        <span class="text-right">
                          8h00 - 18h00
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Cấp cứu 24/24
                        </span>
                        <span class="text-right">
                        </span>
                      </p>
                      <p>
                        <span class="text-left">
                          Lưu ý: Giờ làm việc hành chính từ 6h30 -17h00. Ngoài giờ hành chính giá
                          dịch vụ sẽ tăng 20%
                        </span>
                        <span class="text-right">
                        </span>
                      </p> -->
                                <div class="contact">
                                    <a href="tel: (+84)2473008866">
                                        <img src="{{asset("assets/images/phone.png")}}">
                                        0915 45 13 13
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
            <div  class="item item-3">
                <a href="dangky">
                <img class="normal" src="{{asset("assets/images/icon-5.svg")}}">
                <img class="active" src="{{asset("assets/images/icon-5-active.svg")}}">
                <span class="pl-3">
                    Đăng ký lịch khám
                </span>
</a>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                            X
                        </button>
                        <div class="modal-body">
                            <h2 class="modal-title">
                                Đăng ký lịch khám
                            </h2>
                            <div class="appointment-form-popup">
                                <form action="#">
                                    <div class="form-group">

                                        <input style="Width:100%" type="text" name="name_doctor" value=""
                                            placeholder="Nhập Số điện thoại để đặt lịch">
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Chọn theo Chuyên khoa </label>
                                        <select name="park" id="">
                                            <option value="">Chọn theo Chuyên khoa</option>
                                            <option value="896">Khoa Chẩn đoán hình ảnh và Điện quang can thiệp</option>
                                        </select>
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
            <div data-toggle="modal" data-target="#exampleModal4" class="item item-4">
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
                            <h2 class="modal-title">
                                Chi nhánh Phụ sản Tina
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
                                            100 Lê Quang Định, P10, Q Bình Thạnh, TP Hồ chí Minh
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <a href="" target="_blank">
                    <img class="normal" src="{{asset("assets/images/icon-4.svg")}}">
                    <img class="active" src="{{asset("assets/images/icon-4-active.svg")}}">
                    <span class="pl-3">
                        Hòm thư góp ý
                    </span>
                </a>
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
                    <h1 class="fs26 b600 text-uppercase">
                        DỊCH VỤ
                        <br>
                        PHỤ SẢN TINA
                    </h1>
                    <p style="text-align: justify">
                        Thăm khám và điều trị tại Phụ Sản Tina, khách hàng sẽ được
                        trải nghiệm các dịch vụ chăm sóc sức khỏe chất lương cao đạt tiêu chuẩn
                        quốc tế.
                    </p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="wrap-dichvu loop owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/kham-benh-tai-nha.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/kham-benh-tai-nha.jpg" )}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#kham-tai-nha-bv-hong-ngoc" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Khám bệnh tại nhà
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/cap-cuu.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/cap-cuu.jpg" )}}" alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#dich-vu-cap-cuu/" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Cấp cứu 24/24
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/kham-tien-hon-nhan.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/kham-tien-hon-nhan.jpg")}}"
                                    alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Khám sức khỏe tiền hôn nhân
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
                        <div class="ovh">
                            <picture>
                                <source class="owl-lazy" media="(max-width: 768px)"
                                    data-srcset="{{asset("assets/images/tiem-chung.jpg" )}}">
                                <img class="owl-lazy" data-src="{{asset("assets/images/tiem-chung.jpg" )}}" alt="">
                            </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                            <img src="{{asset("assets/images/icon-9.svg")}}" style="width: 28px;">
                            <a href="#tiem-chung/" class="pl-2">
                                <span class="mb-1 fs18 green-link">
                                    Tiêm chủng
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pl-1 pr-1">
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
                                    Khám tổng quát nhi
                                </span>
                            </a>
                        </div>
                    </div>
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
                <h2 class="fs36 b600 text-white text-uppercase mb-5">
                    Số Liệu nổi bật
                </h2>
                <div class="blog-1">
                    <div class="d1 d-flex aic">
                        <div class="d-flex" style="margin-l\eft: 35px;">
                            <img src="{{asset("assets/images/icon-10.svg")}}">
                            <div class="pl-3">
                                <p class="fs30 b600 text-white mb-0 funfacts" id="num1" style="line-height: 45px;"
                                    max="19" time="2">
                                    19
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
                                    206
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
                                        1.821.000
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
                                    7
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
                        <img style="max-width: 200px" src="{{asset("assets/images/gs-nguyen-van-thang-6407.jpg")}}">
                        <div class="pl-3">
                            <div style="border-bottom: 1px solid #FFFFFF;">
                                <p class="fs18 text-uppercase b600 text-white mb-0">
                                    TTƯT. BSCK II        
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
            <p class="fs36 b600 text-uppercase ls2 mb-0">
                tin tức hoạt động
            </p>
            <p class="mb-0">
                <a class="more" href="#tin-tuc-va-uu-dai/">
                    Xem thêm
                </a>
            </p>
        </div>
        <!-- <ul class="tabs d-flex">
            <li class="tab-link" data-tab="tab-1">
                Tin tức
            </li>
            <li class="tab-link" data-tab="tab-333">
                Hoạt động của Hồng Ngọc
            </li>
            <li class="tab-link" data-tab="tab-331">
                Thông tin ưu đãi
            </li>
         
        </ul> -->
        <div class="row mt-4">
            @foreach($posts as $post    )
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a
                            href="{{route('post',$post->slug)}}">
                            <img data-src="{{$post->banner_url}}"
                                class="img-zoom lazy"
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                        </a>
                    </div>
                    <a href="{{route('post',$post->slug)}}">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                          {{$post->title}}
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                    {{$post->excerpt}}
                    </p>
                </div>
                @endforeach
            </div>
        <!-- <div id="tab-1" class="tab-content current">
          
        </div> -->
        <!-- <div id="tab-333" class="tab-content ">
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#khoa-xet-nghiem-bvdk-hong-ngoc-phuc-truong-minh-dat-chung-chi-iso-151892012/">
                            <img class="img-zoom lazy" src="{{asset("assets/chung-chi-iso-4-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#khoa-xet-nghiem-bvdk-hong-ngoc-phuc-truong-minh-dat-chung-chi-iso-151892012/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Khoa Xét nghiệm BVĐK Hồng Ngọc Phúc Trường Minh đạt chứng chỉ ISO 15189:2012
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Ngày 12/1/2023, khoa Xét nghiệm BVĐK Hồng Ngọc Phúc Trường Minh vinh dự
                        được trao nhận chứng chỉ ISO 15189:2012 từ Văn phòng AOSC. Lễ trao nhận
                        chứng chỉ được...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#benh-vien-hong-ngoc-vinh-du-tiep-don-hoang-gia-bhutan-toi-tham-quan/">
                            <img class="img-zoom lazy"
                                src="{{asset("assets/hoang-gia-bhutan-tham-benh-vien-hong-ngoc-8-1-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#benh-vien-hong-ngoc-vinh-du-tiep-don-hoang-gia-bhutan-toi-tham-quan/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Bệnh viện Hồng Ngọc vinh dự tiếp đón Hoàng gia Bhutan tới tham quan
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Chiều ngày 28/12 vừa qua, đoàn Hoàng gia Bhutan đã tới tham quan Bệnh
                        viện Hồng Ngọc Phúc Trường Minh. Đây là vinh dự to lớn đối với toàn thể...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#benh-vien-da-khoa-hong-ngoc-co-so-my-dinh/">
                            <img class="img-zoom lazy"
                                src="{{asset("assets/benh-vien-hong-ngoc-my-dinh-tu-ben-ngoai-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#benh-vien-da-khoa-hong-ngoc-co-so-my-dinh/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Bệnh viện Đa khoa Hồng Ngọc – Phúc Trường Minh: Bệnh viện xanh – thông
                            minh – tiêu chuẩn Anh Quốc giữa lòng Hà Nội
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Bệnh viện Đa khoa Hồng Ngọc - Phúc Trường Minh sẽ là bệnh viện thông minh
                        với tỷ lệ phủ xanh lên đến 45%. Đây là bệnh viện đầu tiên...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a
                            href="#khoa-san-phu-khoa-bvdk-hong-ngoc-don-vi-dau-tien-tai-viet-nam-nhan-chung-chi-cham-soc-suc-khoe-achs-uc/">
                            <img class="img-zoom lazy" src="{{asset("assets/chung-chi-uc-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a
                        href="#khoa-san-phu-khoa-bvdk-hong-ngoc-don-vi-dau-tien-tai-viet-nam-nhan-chung-chi-cham-soc-suc-khoe-achs-uc/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Khoa Sản phụ khoa BVĐK Hồng Ngọc – Đơn vị đầu tiên tại Việt Nam nhận chứng
                            chỉ chăm sóc sức khỏe từ ACHSI (Úc)
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Vượt qua các tiêu chuẩn kiểm định quốc tế nghiêm ngặt của Hội đồng Úc
                        về Chăm sóc sức khỏe (ACHSI), Khoa Sản Phụ khoa BVĐK Hồng Ngọc Phúc Trường...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#20-10-ngay-hoi-ao-hong-khi-cong-dong-cung-chung-tay-day-lui-ung-thu-vu/">
                            <img class="img-zoom lazy" src="{{asset("assets/pink-day-3-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#20-10-ngay-hoi-ao-hong-khi-cong-dong-cung-chung-tay-day-lui-ung-thu-vu/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            20/10 ngày hội áo hồng – Khi cộng đồng cùng chung tay đẩy lùi ung thư
                            vú
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        “Ngày hội áo hồng - Pinkday” là một sự kiện đặc biệt diễn ra tại bệnh
                        viện Đa Khoa Hồng Ngọc đúng vào 20/10. Đây là dịp để lan tỏa...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#bv-hong-ngoc-bao-tro-y-te-cho-giai-chay-vmm-2022/">
                            <img class="img-zoom lazy" src="{{asset("assets/bao-tro-y-te-1-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#bv-hong-ngoc-bao-tro-y-te-cho-giai-chay-vmm-2022/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            BV Hồng Ngọc bảo trợ y tế cho giải chạy VMM 2022 dưới những cung đường
                            vô cùng khắc nghiệt
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Từ ngày 09 - 11/09/2022, tại vùng đất Sapa xinh đẹp nhưng đầy khắc nghiệt,
                        giải chạy VMM – cuộc chạy bộ khó nhất tại Việt Nam đã diễn ra...
                    </p>
                </div>
            </div>
        </div>
        <div id="tab-331" class="tab-content ">
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#kham-phu-khoa-cung-bac-si-hong-ngoc/">
                            <img class="img-zoom lazy" src="{{asset("assets/0ac56ca74ecc9392cadd-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#kham-phu-khoa-cung-bac-si-hong-ngoc/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Khám phụ khoa cùng bác sĩ Hồng Ngọc
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Theo thống kê của Bộ Y tế, tỉ lệ mắc bệnh viêm nhiễm phụ khoa ở phụ nữ
                        Việt Nam lên tới 90%, đây là con số báo động cảnh...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#uu-dai-tiem-chung-tron-goi/">
                            <img class="img-zoom lazy" src="{{asset("assets/tablet-le-tan-2-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#uu-dai-tiem-chung-tron-goi/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Bệnh viện Hồng Ngọc ưu đãi tiêm chủng trọn gói lên tới 2,5 triệu đồng
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Nhân dịp Quốc tế Phụ nữ 8/3, Trung tâm Tiêm chủng Hồng Ngọc xin dành tặng
                        các mẹ những ưu đãi lên tới 2,5 triệu đồng khi đăng ký gói...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#uu-dai-thai-san-va-sinh-con-tron-goi/">
                            <img class="img-zoom lazy" src="{{asset("assets/Tablet-le-tan-1250x800-1.png")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#uu-dai-thai-san-va-sinh-con-tron-goi/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            QUÀ TẶNG MẸ CON – ĐI SINH TRÒN VẸN ưu đãi tới 20 TRIỆU gói thai sản
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        BV Hồng Ngọc dành tặng ưu đãi thai sản hấp dẫn lên tới 20 triệu cho các
                        mẹ bầu, mẹ không chỉ được trải nghiệm hành trình sinh con nhẹ...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#uu-dai-kham-suc-khoe-nhan-li-xi-kep/">
                            <img class="img-zoom lazy" src="{{asset("assets/1920x1080-sua-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#uu-dai-kham-suc-khoe-nhan-li-xi-kep/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            KHÁM SỨC KHỎE NHẬN LÌ XÌ TỚI 3.000.000Đ: COMBO ƯU ĐÃI CHỈ CÓ DỊP ĐẦU NĂM
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Từ 10/02/2023 – 20/03/2023, với mong muốn tạo cơ hội cho khách hàng kiểm
                        tra sức khoẻ bắt đầu một năm mới khỏe mạnh hơn, Bệnh viện Đa khoa Hồng...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#luu-dai-chay-than-nhan-tao/">
                            <img class="img-zoom lazy"
                                src="{{asset("assets/Chay-than-nhan-tao-350x194.jpg")}}-540x300.jpg" )}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#luu-dai-chay-than-nhan-tao/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            [LÌ XÌ ĐẦU NĂM] BV Hồng Ngọc giảm 20% chi phí chạy thận nhân tạo
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Nhân dịp đầu xuân năm mới, BV Hồng Ngọc dành tặng khách hàng món quà lixi
                        đầu năm, ưu đãi 20% chi phí chạy thận nhân tạo thường quy và...
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="ovh">
                        <a href="#cay-oc-tai-cho-be-viem-mang-nao/">
                            <img class="img-zoom lazy" src="{{asset("assets/banner-01-540x300.jpg")}}"
                                style="display: inline-block;">
                        </a>
                    </div>
                    <a href="#cay-oc-tai-cho-be-viem-mang-nao/">
                        <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                            Cấy ốc tai cho bé viêm màng não – Hành trình phi thường và đầy cảm động
                            để tìm lại âm thanh cho con
                        </p>
                    </a>
                    <p class="fs14 text-justify">
                        Số phận có những biến cố không thể lường được, bệnh tật bất ngờ ập đến
                        đôi khi tưởng như dồn con người vào ngõ cụt. Nhưng may mắn, phép...
                    </p>
                </div>
            </div>
        </div> -->
    </div>
</div>
<div class="clearfix">
</div>
<div class="partners">
    <div class="container">
        <div class="list-partner owl-carousel owl-theme owl-loaded owl-drag">
            <div class="item">
                <img data-src="{{asset("assets/images/groupa-logo2.png" )}}" alt="" class="owl-lazy">
            </div>
            <div class="item">
                <img data-src="{{asset("assets/images/healix-logo2.png" )}}" alt="" class="owl-lazy">
            </div>
            <div class="item">
                <img data-src="{{asset("assets/images/heathycare-logo2.png" )}}" alt="" class="owl-lazy">
            </div>
            <div class="item">
                <img data-src="{{asset("assets/images/henner-logo2.png" )}}" alt="" class="owl-lazy">
            </div>
            <div class="item">
                <img data-src="{{asset("assets/images/img-logo2.png" )}}" alt="" class="owl-lazy">
            </div>

            <div class="item">
                <img data-src="{{asset("assets/images/inslink-logo2.png" )}}" alt="" class="owl-lazy">
            </div>

            <div class="item">
                <img data-src="{{asset("assets/images/insmart-logo2.png" )}}" alt="" class="owl-lazy">
            </div>

            <div class="item">
                <img data-src="{{asset("assets/images/inter-logo2.png" )}}" alt="" class="owl-lazy">
            </div>
        </div>

    </div>
</div>
<!-- <div class="section-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.7368039675343!2d106.69602761410545!3d10.805813561607053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c733641dc7%3A0x9a19a1283a045554!2zMTAwIEzDqiBRdWFuZyDEkOG7i25oLCBQaMaw4budbmcgMTQsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1680010486522!5m2!1svi!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div> -->
@endsection
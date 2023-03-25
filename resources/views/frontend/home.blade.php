@extends('frontend.layout.layout')
@section('content')
      <div class="wrap-banner loop owl-carousel owl-theme owl-loaded owl-drag">
      
              <a>
                <img src="{{asset("assets/images/banner-web-1.jpg")}}"
                alt="">
              </a>
              <a>
                <img src="{{asset("assets/images/e3b26251542f9371ca3e-scaled.jpg")}}"
                alt="">
              </a>
            <a>
                <img src="{{asset("assets/images/BVHN-nuoi-con-bang-sua-me.jpg")}}"
                alt="">
              </a>
    
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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      cao, phục vụ kịp thời nhất, Bệnh viện Hồng Ngọc áp dụng giờ làm việc như
                      sau:
                    </p>
                    <div class="list-time">
                      <p>
                        <span class="text-left">
                          Bệnh viện Đa khoa Hồng Ngọc 55 Yên Ninh
                        </span>
                        <span class="text-right">
                          24/7
                        </span>
                      </p>
                      <p>
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
                      </p>
                      <div class="contact">
                        <a href="tel: (+84)2473008866">
                          <img src="{{asset("assets/images/phone.png")}}">
                          (+84) 24 7300 8866
                        </a>
                        <span>
                          Mọi thông tin chi tiết xin liên lạc với Hotline của Bệnh viện Hồng Ngọc.
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-toggle="modal" data-target="#exampleModal3" class="item item-3">
              <img class="normal" src="{{asset("assets/images/icon-5.svg")}}">
              <img class="active" src="{{asset("assets/images/icon-5-active.svg")}}">
              <span class="pl-3">
                Tìm bác sĩ
              </span>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                    X
                  </button>
                  <div class="modal-body">
                    <h2 class="modal-title">
                      Tìm bác sĩ
                    </h2>
                    <div class="appointment-form-popup">
                      <form action="https://hongngochospital.vn/doi-ngu-chuyen-gia/">
                        <div class="form-group">
                          <label for="">
                            Tìm kiếm theo tên bác sĩ
                          </label>
                          <input type="text" name="name_doctor" value="" placeholder="Tìm kiếm theo tên bác sĩ">
                        </div>
                        <div class="form-group">
                          <label for="">
                            Chọn theo Chuyên khoa
                          </label>
                          <select name="park" id="">
                            <option value="">
                              Chọn theo Chuyên khoa
                            </option>
                            <option value="896">
                              Khoa Chẩn đoán hình ảnh và Điện quang can thiệp
                            </option>
                            <option value="941">
                              Khoa Cơ - Xương khớp
                            </option>
                            <option value="927">
                              Khoa Da liễu
                            </option>
                            <option value="965">
                              Khoa Dược
                            </option>
                            <option value="916">
                              Khoa Gây mê hồi sức
                            </option>
                            <option value="34721">
                              Khoa Hô Hấp
                            </option>
                            <option value="889">
                              Khoa Hồi sức tích cực - ICU
                            </option>
                            <option value="974">
                              Khoa Khám bệnh
                            </option>
                            <option value="976">
                              Khoa Kiểm soát nhiễm khuẩn
                            </option>
                            <option value="929">
                              Khoa Ngoại Chung
                            </option>
                            <option value="902">
                              Khoa Nhi
                            </option>
                            <option value="891">
                              Khoa Nội Chung
                            </option>
                            <option value="910">
                              Khoa Nội tiết
                            </option>
                            <option value="957">
                              Khoa Phẫu thuật Tạo hình thẩm mỹ
                            </option>
                            <option value="945">
                              Khoa Răng - Hàm - Mặt
                            </option>
                            <option value="883">
                              Khoa Sản - Phụ Khoa
                            </option>
                            <option value="920">
                              Khoa Tai - Mũi - Họng
                            </option>
                            <option value="918">
                              Khoa Tâm lý và sức khỏe tâm thần
                            </option>
                            <option value="943">
                              Khoa Thẩm mỹ và Chăm sóc trị liệu
                            </option>
                            <option value="34684">
                              Khoa Thận Lọc máu
                            </option>
                            <option value="955">
                              Khoa Tiêu hóa - Gan - Mật
                            </option>
                            <option value="912">
                              Khoa Tim mạch
                            </option>
                            <option value="963">
                              Khoa Ung bướu
                            </option>
                            <option value="922">
                              Khoa Vật lý trị liệu và phục hồi chức năng
                            </option>
                            <option value="947">
                              Khoa Xét nghiệm và giải phẫu bệnh
                            </option>
                            <option value="949">
                              Khoa Y tế dự phòng
                            </option>
                            <option value="893">
                              Nhãn Khoa
                            </option>
                            <option value="931">
                              TT Hỗ trợ sinh sản IVF Hồng Ngọc
                            </option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">
                            Tìm kiếm theo cơ sở
                          </label>
                          <select name="add" id="">
                            <option value="">
                              Tìm kiếm theo cơ sở
                            </option>
                            <option value="33166">
                              Bệnh viện Đa khoa Hồng Ngọc Phúc Trường Minh
                            </option>
                            <option value="887">
                              BVĐK Hồng Ngọc Yên Ninh
                            </option>
                            <option value="908">
                              Phòng Khám Đa Khoa Hồng Ngọc Keangnam
                            </option>
                            <option value="32532">
                              Phòng Khám Đa Khoa Hồng Ngọc Kosmo
                            </option>
                            <option value="15844">
                              Phòng khám Đa Khoa Hồng Ngọc Nguyễn Tuân
                            </option>
                            <option value="885">
                              Phòng Khám Đa Khoa Hồng Ngọc Savico
                            </option>
                            <option value="959">
                              Thẩm mỹ Hồng Ngọc Keangnam
                            </option>
                          </select>
                        </div>
                        <button>
                          Tìm kiếm
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
                Chi nhánh Hồng Ngọc
              </span>
            </div>
            <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-add">
                  <button class="modal-close modal-toggle " data-dismiss="modal" aria-label="Close">
                    X
                  </button>
                  <div class="modal-body">
                    <h2 class="modal-title">
                      Chi nhánh Hồng Ngọc
                    </h2>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Bệnh viện Đa khoa Hồng Ngọc Yên Ninh
                            </b>
                            <br>
                            Số 55 Yên Ninh,Trúc Bạch, quận Ba Đình, Hà Nội
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Phòng khám Đa khoa Hồng Ngọc Savico
                            </b>
                            <br>
                            Tầng 3, tòa B, Savico Megamall, 07- 09 Nguyễn Văn Linh, quận Long Biên,
                            Hà Nội
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Phòng khám Đa khoa Hồng Ngọc Nguyễn Tuân
                            </b>
                            <br>
                            Tầng 1- NO2 - TNL PLAZA GOLDSEASON, 47 Nguyễn Tuân, quận Thanh Xuân, Hà
                            Nội
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Phòng khám Đa khoa Hồng Ngọc Tố Hữu
                            </b>
                            <br>
                            Tầng 1 - HPC Landmark 105, Tố Hữu, La Khê, Hà Đông, Hà Nội
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Phòng khám Đa khoa Hồng Ngọc Keangnam
                            </b>
                            <br>
                            Tầng 10, Keangnam Landmark 72, Phạm Hùng, quận Nam Từ Liêm, Hà Nội
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="item-add d-flex">
                          <img src="{{asset("assets/images/map.png")}}">
                          <p class="text-bold">
                            <b>
                              Phòng khám Đa khoa Hồng Ngọc Tây Hồ
                            </b>
                            <br>
                            Tầng 1, 2 &amp; 3 - Kosmo Tây Hồ, 161 Xuân La, Bắc Từ Liêm, Hà Nội
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLScFIensnRKqJOjAPT0x8u4HdGPemgE3R0hzjlSjNP_K9ioYFQ/viewform"
              target="_blank">
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
                <h1 class="fs36 b600 text-uppercase">
                  DỊCH VỤ
                  <br>
                  HỒNG NGỌC
                </h1>
                <p>
                  Thăm khám và điều trị tại Bệnh viện Đa khoa Hồng Ngọc, khách hàng sẽ được
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
                            <source class="owl-lazy" media="(max-width: 768px)" data-srcset="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-benh-tai-nha.jpg")}}">
                              <img class="owl-lazy" data-src="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-benh-tai-nha.jpg")}}"
                              alt="">
                          </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                          <img src="{{asset("assets/images/icon-9.svg")}}"
                          style="width: 28px;">
                          <a href="https://hongngochospital.vn/kham-tai-nha-bv-hong-ngoc" class="pl-2">
                            <span class="mb-1 fs18 green-link">
                              Khám bệnh tại nhà
                            </span>
                          </a>
                        </div>
                        </div>
                      <div class="pl-1 pr-1">
                        <div class="ovh">
                          <picture>
                            <source class="owl-lazy" media="(max-width: 768px)" data-srcset="https://hongngochospital.vn/wp-content/uploads/2020/06/cap-cuu.jpg")}}">
                              <img class="owl-lazy" data-src="https://hongngochospital.vn/wp-content/uploads/2020/06/cap-cuu.jpg")}}"
                              alt="">
                          </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                          <img src="{{asset("assets/images/icon-9.svg")}}"
                          style="width: 28px;">
                          <a href="https://hongngochospital.vn/dich-vu-cap-cuu/" class="pl-2">
                            <span class="mb-1 fs18 green-link">
                              Cấp cứu 24/24
                            </span>
                          </a>
                        </div>
                        </div>
                      <div class="pl-1 pr-1">
                        <div class="ovh">
                          <picture>
                            <source class="owl-lazy" media="(max-width: 768px)" data-srcset="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-tien-hon-nhan.jpg")}}">
                              <img class="owl-lazy" data-src="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-tien-hon-nhan.jpg")}}"
                              alt="">
                          </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                          <img src="{{asset("assets/images/icon-9.svg")}}"
                          style="width: 28px;">
                          <a href="https://hongngochospital.vn/goi-kham-suc-khoe-tien-hon-nhan/"
                          class="pl-2">
                            <span class="mb-1 fs18 green-link">
                              Khám sức khỏe tiền hôn nhân
                            </span>
                          </a>
                        </div>
                      </div>
                     <div class="pl-1 pr-1">
                        <div class="ovh">
                          <picture>
                            <source class="owl-lazy" media="(max-width: 768px)" data-srcset="https://hongngochospital.vn/wp-content/uploads/2020/06/tiem-chung.jpg")}}">
                              <img class="owl-lazy" data-src="https://hongngochospital.vn/wp-content/uploads/2020/06/tiem-chung.jpg")}}"
                              alt="">
                          </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                          <img src="{{asset("assets/images/icon-9.svg")}}"
                          style="width: 28px;">
                          <a href="https://hongngochospital.vn/tiem-chung/" class="pl-2">
                            <span class="mb-1 fs18 green-link">
                              Tiêm chủng
                            </span>
                          </a>
                        </div>
                      </div>
                      <div class="pl-1 pr-1">
                        <div class="ovh">
                          <picture>
                            <source class="owl-lazy" media="(max-width: 768px)" data-srcset="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-nhi-tong-quat.jpg")}}">
                              <img class="owl-lazy" data-src="https://hongngochospital.vn/wp-content/uploads/2020/06/kham-nhi-tong-quat.jpg")}}"
                              alt="" src="{{asset("assets/kham-nhi-tong-quat.jpg")}}"
                              style="opacity: 1;">
                          </picture>
                        </div>
                        <div class="d-flex aic mt-3 service-link">
                          <img src="{{asset("assets/images/icon-9.svg")}}"
                          style="width: 28px;">
                          <a href="https://hongngochospital.vn/goi-kham-nhi/" class="pl-2">
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
      <div>
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
                      <p class="fs30 b600 text-white mb-0 funfacts" max="206" time="3" style="line-height: 45px;">
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
                      <p class="fs30 b600 text-white mb-0 funfacts" max="7" time="2" style="line-height: 45px;">
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
                  Từ những ngày đầu đi vào hoạt động, Hồng Ngọc đã từng bước tạo dựng uy
                  tín và danh tiếng với mô hình bệnh viện – khách sạn tiên phong ở Hà Nội
                  cũng như toàn khu vực miền Bắc.
                </p>
                <div class="d-flex wrap-doctor" style="align-items: flex-end;">
                  <img style="max-width: 200px" src="{{asset("assets/images/1f1e57470c04f75aae15.jpg")}}">
                  <div class="pl-3">
                    <div style="border-bottom: 1px solid #FFFFFF;">
                      <p class="fs18 text-uppercase b600 text-white mb-0">
                        TTƯT. BSCK II CAO ĐỘC LẬP
                      </p>
                      <p class="text-white">
                        Giám đốc BV Đa khoa Hồng Ngọc
                      </p>
                    </div>
                    <div class="d-flex mt-3" style="align-items: flex-start;">
                      <img src="{{asset("assets/images/icon-15.svg")}}">
                      <p class="mb-0 pl-3 text-white text-justify">
                        Với đội ngũ bác sĩ giỏi chuyên môn, liên tục cập nhật những phương pháp
                        điều trị hiện đại, Bệnh viện Hồng Ngọc luôn không ngừng phấn đấu để khẳng
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
              <a class="more" href="https://hongngochospital.vn/tin-tuc-va-uu-dai/">
                Xem thêm
              </a>
            </p>
          </div>
          <ul class="tabs d-flex">
            <li class="tab-link" data-tab="tab-1">
              Tin tức
            </li>
            <li class="tab-link" data-tab="tab-333">
              Hoạt động của Hồng Ngọc
            </li>
            <li class="tab-link" data-tab="tab-331">
              Thông tin ưu đãi
            </li>
            <li class="tab-link" data-tab="tab-3">
              Từ thiện - Vì cộng đồng
            </li>
          </ul>
          <div id="tab-1" class="tab-content current">
            <div class="row mt-4">
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/tiem-con-diet-hach-gasser-cham-dut-10-nam-dau-day-than-kinh-so-5-cho-benh-nhan-75-tuoi/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2023/03/tiem-con-diet-hach-gasser-540x300.jpg")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/tiem-con-diet-hach-gasser-cham-dut-10-nam-dau-day-than-kinh-so-5-cho-benh-nhan-75-tuoi/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Tiêm cồn diệt hạch Gasser – Chấm dứt 10 năm đau dây thần kinh số 5 cho
                    bệnh nhân 75 tuổi
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Chỉ sau 20 phút thực hiện tiêm cồn diệt hạch Gasser, những cơn đau gần
                  như mất hoàn toàn. Sau một đêm ngủ ngon, ông Đ.D.Sứ đã có thể ăn...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/goi-tiem-chung-tai-hong-ngoc/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2023/03/350x194-px.jpg")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/goi-tiem-chung-tai-hong-ngoc/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Toàn bộ các gói tiêm chủng tại Bệnh Viện Hồng Ngọc
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Tiêm vắc-xin đầy đủ và đúng lịch là biện pháp hiệu quả nhất giúp cơ thể
                  sinh ra miễn dịch chủ động đặc hiệu, từ đó tăng cường sức đề...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/kham-phu-khoa-cung-bac-si-hong-ngoc/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2023/03/0ac56ca74ecc9392cadd-540x300.jpg")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/kham-phu-khoa-cung-bac-si-hong-ngoc/">
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
                  <a href="https://hongngochospital.vn/uu-dai-tiem-chung-tron-goi/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2022/11/tablet-le-tan-2-540x300.jpg")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/uu-dai-tiem-chung-tron-goi/">
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
                  <a href="https://hongngochospital.vn/uu-dai-thai-san-va-sinh-con-tron-goi/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2023/03/Tablet-le-tan-1250x800-1.png")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/uu-dai-thai-san-va-sinh-con-tron-goi/">
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
                  <a href="https://hongngochospital.vn/quan-he-ra-mau-nguoi-phu-nu-39-tuoi-phat-hien-ung-thu-co-tu-cung/">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2023/03/132.png")}}"
                    class="img-zoom lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/quan-he-ra-mau-nguoi-phu-nu-39-tuoi-phat-hien-ung-thu-co-tu-cung/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Quan hệ ra máu, người phụ nữ 39 tuổi phát hiện ung thư cổ tử cung
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Bệnh viện Hồng Ngọc vừa phẫu thuật thành công một ca ung thư cổ tử cung
                  cho bệnh nhân 39 tuổi. Căn bệnh này có triệu chứng thường gặp là...
                </p>
              </div>
            </div>
          </div>
          <div id="tab-333" class="tab-content ">
            <div class="row mt-4">
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/khoa-xet-nghiem-bvdk-hong-ngoc-phuc-truong-minh-dat-chung-chi-iso-151892012/">
                    <img class="img-zoom lazy" src="{{asset("assets/chung-chi-iso-4-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/khoa-xet-nghiem-bvdk-hong-ngoc-phuc-truong-minh-dat-chung-chi-iso-151892012/">
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
                  <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-vinh-du-tiep-don-hoang-gia-bhutan-toi-tham-quan/">
                    <img class="img-zoom lazy" src="{{asset("assets/hoang-gia-bhutan-tham-benh-vien-hong-ngoc-8-1-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-vinh-du-tiep-don-hoang-gia-bhutan-toi-tham-quan/">
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
                  <a href="https://hongngochospital.vn/benh-vien-da-khoa-hong-ngoc-co-so-my-dinh/">
                    <img class="img-zoom lazy" src="{{asset("assets/benh-vien-hong-ngoc-my-dinh-tu-ben-ngoai-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-da-khoa-hong-ngoc-co-so-my-dinh/">
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
                  <a href="https://hongngochospital.vn/khoa-san-phu-khoa-bvdk-hong-ngoc-don-vi-dau-tien-tai-viet-nam-nhan-chung-chi-cham-soc-suc-khoe-achs-uc/">
                    <img class="img-zoom lazy" src="{{asset("assets/chung-chi-uc-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/khoa-san-phu-khoa-bvdk-hong-ngoc-don-vi-dau-tien-tai-viet-nam-nhan-chung-chi-cham-soc-suc-khoe-achs-uc/">
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
                  <a href="https://hongngochospital.vn/20-10-ngay-hoi-ao-hong-khi-cong-dong-cung-chung-tay-day-lui-ung-thu-vu/">
                    <img class="img-zoom lazy" src="{{asset("assets/pink-day-3-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/20-10-ngay-hoi-ao-hong-khi-cong-dong-cung-chung-tay-day-lui-ung-thu-vu/">
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
                  <a href="https://hongngochospital.vn/bv-hong-ngoc-bao-tro-y-te-cho-giai-chay-vmm-2022/">
                    <img class="img-zoom lazy" src="{{asset("assets/bao-tro-y-te-1-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/bv-hong-ngoc-bao-tro-y-te-cho-giai-chay-vmm-2022/">
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
                  <a href="https://hongngochospital.vn/kham-phu-khoa-cung-bac-si-hong-ngoc/">
                    <img class="img-zoom lazy" src="{{asset("assets/0ac56ca74ecc9392cadd-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/kham-phu-khoa-cung-bac-si-hong-ngoc/">
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
                  <a href="https://hongngochospital.vn/uu-dai-tiem-chung-tron-goi/">
                    <img class="img-zoom lazy" src="{{asset("assets/tablet-le-tan-2-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/uu-dai-tiem-chung-tron-goi/">
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
                  <a href="https://hongngochospital.vn/uu-dai-thai-san-va-sinh-con-tron-goi/">
                    <img class="img-zoom lazy" src="{{asset("assets/Tablet-le-tan-1250x800-1.png")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/uu-dai-thai-san-va-sinh-con-tron-goi/">
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
                  <a href="https://hongngochospital.vn/uu-dai-kham-suc-khoe-nhan-li-xi-kep/">
                    <img class="img-zoom lazy" src="{{asset("assets/1920x1080-sua-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/uu-dai-kham-suc-khoe-nhan-li-xi-kep/">
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
                  <a href="https://hongngochospital.vn/luu-dai-chay-than-nhan-tao/">
                    <img class="img-zoom lazy" src="{{asset("assets/Chay-than-nhan-tao-350x194.jpg")}}-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/luu-dai-chay-than-nhan-tao/">
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
                  <a href="https://hongngochospital.vn/cay-oc-tai-cho-be-viem-mang-nao/">
                    <img class="img-zoom lazy" src="{{asset("assets/banner-01-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/cay-oc-tai-cho-be-viem-mang-nao/">
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
          </div>
          <div id="tab-3" class="tab-content ">
            <div class="row mt-4">
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-bao-tro-y-te-cho-giai-chay-cuc-phuong-jungle-paths-2022/">
                    <img class="img-zoom lazy" src="{{asset("assets/bao-tro-y-te-giai-chay-cuc-phuong-2022-5-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-bao-tro-y-te-cho-giai-chay-cuc-phuong-jungle-paths-2022/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Bệnh viện Hồng Ngọc bảo trợ y tế cho giải chạy Cúc Phương Jungle Paths
                    2022
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Ngày 3/4 vừa qua, giải chạy Cúc Phương Jungle Paths 2022 đã diễn ra thành
                  công tốt đẹp sau nhiều lần bị trì hoãn do dịch COVID-19. Đóng góp cho...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/bv-hong-ngoc-cung-to-chuc-newborns-vietnam-trao-tang-trang-thiet-bi-y-te-cho-bvdk-hoai-duc/">
                    <img class="img-zoom lazy" src="{{asset("assets/bv-hong-ngoc-tai-tro-thiet-bi-y-te-3-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/bv-hong-ngoc-cung-to-chuc-newborns-vietnam-trao-tang-trang-thiet-bi-y-te-cho-bvdk-hoai-duc/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    BV Hồng Ngọc cùng Tổ chức Newborns Vietnam trao tặng trang thiết bị y
                    tế cho BVĐK Hoài Đức&nbsp;
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Ngày 29/3/2022, Bệnh viện Hồng Ngọc phối hợp với Tổ chức Newborns Vietnam
                  trao tặng trang thiết bị y tế trị giá 60 triệu đồng cho khoa Nhi và khoa...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/bv-hong-ngoc-huong-ung-le-hoi-hien-mau-xuan-nham-dan-voi-147-don-vi-mau-duoc-hien-tang/">
                    <img class="img-zoom lazy" src="{{asset("assets/hien-mau-xuan-2022-4-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/bv-hong-ngoc-huong-ung-le-hoi-hien-mau-xuan-nham-dan-voi-147-don-vi-mau-duoc-hien-tang/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    BV Hồng Ngọc hưởng ứng lễ hội hiến máu chào Xuân Nhâm Dần với 147 đơn
                    vị máu được hiến tặng
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Tổng cộng đã có 147 Đơn vị máu của bệnh viện được hiến tặng cho Viện Huyết
                  học Truyền máu Trung ương, chung tay góp một phần nhỏ bé trong...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-xay-dung-cau-tai-bac-kan/">
                    <img class="img-zoom lazy" src="{{asset("assets/xay-cau-bac-kan-1-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-xay-dung-cau-tai-bac-kan/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Bệnh viện Hồng Ngọc hỗ trợ xây dựng 10 cây cầu dân sinh tại tỉnh Bắc Kạn
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Giữa tháng 12/2021, Tập đoàn Hồng Ngọc kết hợp với đoàn thiện nguyện Tâm
                  Từ Bi tham gia khánh thành “Cầu Hồng Ngọc Phúc Trường Minh 05” và khởi
                  công...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-bao-tro-y-te-thanh-cong-cho-giai-chay-vmm-2020/">
                    <img class="img-zoom lazy" src="{{asset("assets/vmm2-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-hong-ngoc-bao-tro-y-te-thanh-cong-cho-giai-chay-vmm-2020/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Bệnh viện Hồng Ngọc bảo trợ y tế thành công cho giải chạy VMM 2020
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Từ ngày 20 – 22/11/2020, tại vùng đất Sapa xinh đẹp, giải chạy VMM – cuộc
                  chạy bộ khó nhất tại Việt Nam đã diễn ra thành công tốt đẹp...
                </p>
              </div>
              <div class="col-md-4 mb-4">
                <div class="ovh">
                  <a href="https://hongngochospital.vn/benh-vien-da-khoa-hong-ngoc-dong-hanh-cung-hon-5000-vdv-chinh-phuc-giai-chay-vpbank-hanoi-marathon-asean-2020/">
                    <img class="img-zoom lazy" src="{{asset("assets/vpbank-marathon-hong-ngoc-2-540x300.jpg")}}"
                    style="display: inline-block;">
                  </a>
                </div>
                <a href="https://hongngochospital.vn/benh-vien-da-khoa-hong-ngoc-dong-hanh-cung-hon-5000-vdv-chinh-phuc-giai-chay-vpbank-hanoi-marathon-asean-2020/">
                  <p class="b600 fs18 mt-3 mb-2 green-link link-hover">
                    Bệnh viện Đa khoa Hồng Ngọc đồng hành cùng hơn 5000 VĐV chinh phục giải
                    chạy VPBank Hanoi Marathon ASEAN 2020
                  </p>
                </a>
                <p class="fs14 text-justify">
                  Ngày 18/10 vừa qua, giải VPBank Hanoi Marathon Asean 2020 đã diễn ra thành
                  công với sự bảo trợ y tế của Bệnh viện Đa khoa Hồng Ngọc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="partners">
        <div class="container">
          <div class="list-partner owl-carousel owl-theme owl-loaded owl-drag">
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/groupa-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/healix-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/heathycare-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/henner-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/img-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
            
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/inslink-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
             
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/insmart-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
            
                  <div class="item">
                    <img data-src="https://hongngochospital.vn/wp-content/uploads/2020/07/inter-logo2.png")}}"
                    alt="" class="owl-lazy">
                  </div>
                </div>
               
          </div>
        </div>
      </div>
      <div class="section-5">
        <div class="overlay">
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.755724778281!2d105.84194631533224!3d21.042457892685462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abba7ba53e11%3A0x587dbd43c0113ca9!2zQuG7h25oIFZp4buHbiDEkGEgS2hvYSBI4buTbmcgTmfhu41j!5e0!3m2!1svi!2s!4v1578450310705!5m2!1svi!2s"
        width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""
        data-gtm-yt-inspected-22="true">
        </iframe>
      </div>
@endsection
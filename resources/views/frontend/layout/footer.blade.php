<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset("assets/images/logo-tina.png")}}" width="80px" class="logo-footer d-block">
                    </a>
                </div>
                <p class=" mt-2 mb-2" style="    text-align: justify;">
                    Phòng khám sản phụ khoa Tina còn được trang bị hệ thống máy móc hiện đại như máy siêu âm, máy chụp
                    X-quang, máy điện tim và các thiết bị khác giúp cho việc chẩn đoán và điều trị các bệnh lý phụ khoa
                    được dễ dàng và chính xác hơn.
                </p>

            </div>
            <div class="col-md-4">
                <div class="footer-title">
                    Địa chỉ
                </div>
                <p class="fs15 text-uppercase b600 mt-2 mb-2"><a href="https://hongngochospital.vn">PHÒNG KHÁM PHỤ SẢN
                        TINA </a></p>
                <div class="pb-3">
                    <div class="mb-1 d-flex">
                        <div> <img src="https://hongngochospital.vn/wp-content/themes/hongngoc/images/icon-16.svg">
                        </div>
                        <p class="pl-2 mb-0">738 Quang Trung, Phường 8
                            Quận Gò Vấp, Thành Phố Hồ Chí Minh</p>
                    </div>
                    <div class="mb-1 d-flex">
                        <div> <img src="https://hongngochospital.vn/wp-content/themes/hongngoc/images/icon-17.svg">
                        </div>
                        <p class="pl-2 mb-0">Hotline: 0858 60 80 80
                        </p>
                    </div>
                    <div class="social-footer">
                        <a href=" https://bit.ly/42e6ZcP">
                            <img src="{{asset("assets/images/fb.svg")}}" alt="">
                        </a>
                        <a href="http://bit.ly/3ZP02O0">
                            <img src="{{asset("assets/images/icon-tiktok.png")}}" alt="">
                        </a>
                        <a href="##">
                            <img src="{{asset("assets/images/LinkedIN.svg")}}" alt="">
                        </a>
                        <a href="##">
                            <img src="{{asset("assets/images/instagram.svg")}}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="footer-title">
                    Liên hệ hợp tác
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea type="text" placeholder="Nội dung">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit">Gửi đi</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <div class="text-center text-white copy-right" style="padding: 8px 0px; background-color: #ee4668;">
        Copyright @2023 by <a href="tel:0979397973">CongPV<a>
    </div>

    <img src="{{asset("assets/images/icon-21.svg")}}" class="gototop">
    <img src="{{asset("assets/images/icon-22.svg")}}" class="msg">
    <a href="tel:0858608080">
        <img src="{{asset("assets/images/phone.gif")}}" class="btn-call-footer">
    </a>
    
    <div class="nav-right"> 
    <div data-toggle="modal" data-target="#exampleModal3" class="item item-2">
    Đăng ký lịch khám

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
    </div>
</footer>
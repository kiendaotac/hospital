@extends('frontend.layout.layout')
@section('content')
<div class="register-wrap">
    <div class="register-form">
        <h3 class="register-form-title">Đặt lịch khám</h3>
        <form action="{{route('dangky')}}" enctype="multipart/form-data" method="post" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for=""> Nhập họ tên của bạn </label>
                <input style="Width:100%" type="text" name="name_doctor" value="" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group">
                <label for=""> Ngày tháng năm sinh</label>
                <input style="Width:100%" type="date" name="date" value="" placeholder="Nhập Họ tên" required>
            </div>
            <!-- <div class="form-group">
                <label for=""> Chọn theo Chuyên khoa </label>
                <select name="service" id="">
                    <option disable>Chọn theo Chuyên khoa</option>
                    <option>Khám thai định kỳ</option>
                    <option>Khám sức khỏe tiền hôn nhân</option>
                    <option>Tiêm chủng</option>
                </select>
            </div> -->
            <div class="form-group">
                <label for=""> Chọn ngày khám</label>
                <input style="Width:100%" type="date" name="date" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group time">
                <label> Chọn giờ khám</label>
                @php
                $starTime = now()->setTime(8,0);
                $endTime = now()->setTime(18, 0);
                $index = 0;
                @endphp
                @while($starTime->lessThanOrEqualTo($endTime))
                <input type="radio" class="btn-check" id="option-{{ $index }}" name="options" autocomplete="off"
                    value="{{($starTime->format('H:i'))}}" />
                <label class="btn btn-secondary" for="option-{{ $index++ }}">{{($starTime->format('H:i'))}}</label>
                @php($starTime->addMinutes(15))
                @endwhile
            </div>
            <div class="form-group">
            <label> Chọn dịch vụ khám</label>
                <select>
                   <option value="Gói khám sức khỏe phụ nữ tổng quát">Gói khám sức khỏe phụ nữ tổng quát</option>
                   <option value="Chăm sóc, tư vẫn trước sinh">Chăm sóc, tư vẫn trước sinh</option>
                   <option value="Khám và điều trị các bệnh phụ khoa">Khám và điều trị các bệnh phụ khoa</option>
                   <option value="Sàng lọc ung thư phụ khoa">Sàng lọc ung thư phụ khoa</option>
                </select>
            </div>  
            <button type="submit">
                Đặt lịch ngay
            </button>
        </form>
    </div>
</div>
@endsection
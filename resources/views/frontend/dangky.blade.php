@extends('frontend.layout.layout')
@section('content')
<div class="register-wrap">
    <div class="register-form">
        <h3 class="register-form-title">Đặt lịch khám</h3>
        <form id="submit" action="{{route('dangky')}}" enctype="multipart/form-data" method="post" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-register">
                <div class="left-register">
                    @auth('customer')
                    <div class="form-group">
                        <label for=""> Nhập họ tên của bạn </label>
                        <input style="Width:100%" type="text" name="name" readonly
                            value="{{ auth('customer')->user()->name }}" placeholder="Nhập Họ tên" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Số điện thoại</label>
                        <input style="Width:100%" type="text" name="phone" value="{{ auth('customer')->user()->phone }}"
                            placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <label for=""> Email</label>
                        <input style="Width:100%" type="email" name="email"
                            value="{{ auth('customer')->user()->email }}" placeholder="Nhập địa chỉ email" required>
                    </div>
                    @else
                    @if($appointment)
                    <div class="form-group">
                        <label for=""> Nhập họ tên của bạn </label>
                        <input style="Width:100%" type="text" name="name" readonly value="{{ $appointment->name }}"
                            placeholder="Nhập Họ tên" required>
                    </div>
                    @else
                    <div class="form-group">
                        <label for=""> Nhập họ tên của bạn </label>
                        <input style="Width:100%" type="text" name="name" value="" placeholder="Nhập Họ tên" required>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for=""> Số điện thoại</label>
                        <input style="Width:100%" type="text" name="phone" value="{{ request()->telephone }}"
                            placeholder="Nhập số điện thoại" required>
                    </div>
                    @if($appointment)
                        <div class="form-group">
                            <label for=""> Email</label>
                            <input style="Width:100%" type="email" name="email" value="{{ $appointment->email }}" placeholder="Nhập địa chỉ email" required>
                        </div>
                    @else
                        <div class="form-group">
                            <label for=""> Email</label>
                            <input style="Width:100%" type="email" name="email" value="" placeholder="Nhập địa chỉ email" required>
                        </div>
                    @endif
                    @endauth
                    @if($appointment)
                    <div class="form-group">
                        <label for=""> Ngày tháng năm sinh</label>
                        <input style="Width:100%" type="date" name="dob" value="{{ $appointment->dob }}" placeholder="Nhập Họ tên" required>
                    </div>
                    @else
                    <div class="form-group">
                        <label for=""> Ngày tháng năm sinh</label>
                        <input style="Width:100%" type="date" name="dob" value="" placeholder="Nhập Họ tên" required>
                    </div>
                    @endif
                </div>
                <div class="right-register">
                    <div class="form-group">
                        <label for="date-appointment"> Chọn ngày khám</label>
                        <input style="Width:100%" id="date-appointment" type="date"  name="date" min='{{now()->format('Y-m-d')}}' placeholder="Nhập Họ tên" required />
                    </div>
                    <div class="form-group time">
                        <label> Chọn giờ khám</label>
                        @php
                        $starTime = now()->setTime(7,0);
                        $endTime = now()->setTime(20, 30);
                        $index = 0;
                        @endphp
                        @while($starTime->lessThanOrEqualTo($endTime))
                        @if(!$starTime->between(now()->setTime(11, 31), now()->setTime(12, 59)))
                        <input type="radio" class="btn-check" id="option-{{ $index }}" name="options" autocomplete="off"
                            value="{{($starTime->format('H:i'))}}" required/>
                        <label
                            class="btn btn-secondary {{ $starTime->lessThan(now()->setTime(16, 30)) ? 'weekend' : '' }} {{ $starTime->between(now()->setTime(11, 1), now()->setTime(15, 59)) ? 'weekend1' : '' }}"
                            for="option-{{ $index++ }}">{{($starTime->format('H:i'))}}</label>
                        @endif
                        @php($starTime->addMinutes(30))
                        @endwhile
                    </div>
                    <div class="form-group">
                        <label> Chọn dịch vụ khám</label>
                        <select name="service" required>
                            <option value="">Lựa chọn dịch vụ</option>
                            <option value="Khám thai">Khám thai</option>
                            <option value="Xét nghiệm">Xét nghiệm</option>
                            <option value="Siêu âm thai">Siêu âm thai</option>
                            <option value="Gói khám sức khỏe phụ nữ tổng quát">Gói khám sức khỏe phụ nữ tổng quát</option>
                            <option value="Chăm sóc, tư vẫn trước sinh">Chăm sóc, tư vấn trước sinh</option>
                            <option value="Khám và điều trị các bệnh phụ khoa">Khám và điều trị các bệnh phụ khoa</option>
                            <option value="Sàng lọc ung thư phụ khoa">Sàng lọc ung thư phụ khoa</option>
                        </select>
                    </div>
                </div>
                <div>
</div>
</div>
                    <button type="submit" id="btn-submit">
                        Đặt lịch ngay
                    </button>
        </form>
    </div>
</div>
@endsection

@push('js')
<script>
$(document).ready(function() {
    $('#date-appointment').on('change', function() {
        if ((new Date($(this).val())).getDay() % 6 === 0) {
            $('.weekend').removeClass('disable')
            $('.weekend1').addClass('disable')
        } else {
            $('.weekend').addClass('disable')
        }
    })

    $('form#submit').on('submit', function (e) {
        $('#btn-submit').attr('disabled', true)
    })
})
</script>
@endpush
@extends('frontend.layout.layout')
@section('content')
<div class="register-wrap">
    <div class="register-form">
        <h3 class="register-form-title">Đặt lịch khám</h3>
        <form action="{{route('dangky')}}" enctype="multipart/form-data" method="post" required>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @auth('customer')
                <div class="form-group">
                    <label for=""> Nhập họ tên của bạn </label>
                    <input style="Width:100%" type="text" name="name" readonly value="{{ auth('customer')->user()->name }}" placeholder="Nhập Họ tên" required>
                </div>
                <div class="form-group">
                    <label for=""> Số điện thoại</label>
                    <input style="Width:100%" type="text" name="phone" value="{{ auth('customer')->user()->phone }}" placeholder="Nhập số điện thoại" required>
                </div>
            @else
                @if($appointment)
                    <div class="form-group">
                        <label for=""> Nhập họ tên của bạn </label>
                        <input style="Width:100%" type="text" name="name" readonly value="{{ $appointment->name }}" placeholder="Nhập Họ tên" required>
                    </div>
                @else
                    <div class="form-group">
                        <label for=""> Nhập họ tên của bạn </label>
                        <input style="Width:100%" type="text" name="name" value="" placeholder="Nhập Họ tên" required>
                    </div>
                @endif
                <div class="form-group">
                    <label for=""> Số điện thoại</label>
                    <input style="Width:100%" type="text" name="phone" value="{{ request()->telephone }}" placeholder="Nhập số điện thoại" required>
                </div>
            @endauth
            <div class="form-group">
                <label for=""> Ngày tháng năm sinh</label>
                <input style="Width:100%" type="date" name="date" value="" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group">
                <label for="date-appointment"> Chọn ngày khám</label>
                <input style="Width:100%" id="date-appointment" type="date" name="date" placeholder="Nhập Họ tên" required>
            </div>
            <div class="form-group time">
                <label> Chọn giờ khám</label>
                @php
                $starTime = now()->setTime(8,0);
                $endTime = now()->setTime(20, 30);
                $index = 0;
                @endphp
                @while($starTime->lessThanOrEqualTo($endTime))
                    @if(!$starTime->between(now()->setTime(11, 31), now()->setTime(12, 59)))
                        <input type="radio" class="btn-check" id="option-{{ $index }}" name="options" autocomplete="off"
                               value="{{($starTime->format('H:i'))}}" />
                        <label class="btn btn-secondary {{ $starTime->lessThan(now()->setTime(16, 30)) ? 'weekend' : '' }}" for="option-{{ $index++ }}">{{($starTime->format('H:i'))}}</label>
                    @endif
                @php($starTime->addMinutes(15))
                @endwhile
            </div>
            <div class="form-group">
            <label> Chọn dịch vụ khám</label>
                <select name="service">
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

@push('js')
    <script>
        $(document).ready(function () {
            $('#date-appointment').on('change', function () {
                if (!(new Date($(this).val())).getDay() % 6) {
                    $('.weekend').removeClass('disable')
                } else {
                    $('.weekend').addClass('disable')
                }
            })
        })
    </script>
@endpush
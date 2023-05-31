Thông tin khách hàng đăng ký: <br>
Họ và tên: {{ $appointment->name }} <br>
Số điện thoại: {{ $appointment->phone }} <br>
Ngày sinh: {{ $appointment->dob }} <br>
Địa chỉ: {{ $appointment->address }} <br>
Dịch vụ đăng ký: {{ $appointment->service }} <br>
Thời gian đăng ký: {{ $appointment->time->format('H:i d/m/Y') }} <br>

Link chi tiết: <a href="{{ route('filament.resources.appointments.edit', $appointment->id) }}"></a>
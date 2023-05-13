Bạn đã đăng ký lịch khám tại: {{ env('APP_NAME') }}

Thời gian: {{ $appointment->time->format('d/m/Y H:i:s') }}

Dịch vụ : {{ $appointment->service }}
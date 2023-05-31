Xin chào {{ $appointment->name }}<br>
Cảm ơn Anh/Chị đã quan tâm sử dụng dịch vụ của HỆ THỐNG PHÒNG KHÁM SẢN PHỤ KHOA - IVF TINA. Thông báo này xác nhận {{ $appointment->name }} đã đặt lịch khám thành công. Thông tin ngày giờ khám như sau: <br>
- <span style="font-weight:700">Dịch vụ khám: </span> {{ $appointment->service }}<br>
- <span style="font-weight:700">Thời gian khám: </span> {{ $appointment->time->format('d/m/Y H:i:s') }}<br>
{{ $appointment->name }} vui lòng đến trước thời gian đặt khám 15 phút để đảm bảo chuẩn bị khám đươc chu đáo nhất. <br>
Lưu ý:  - HỆ THỐNG PHÒNG KHÁM SẢN PHỤ KHOA - IVF TINA sẽ ưu tiên người khám trước cho các bạn đặt lịch khám qua web. Vì vậy, hãy cho chúng tôi xem email/tin nhắn xác nhận đăng ký thành công khi tiền hành làm thủ tục xếp khám tại quầy. <br>
        - Tài khoản đăng nhập hệ thống để xem lịch sử khám là số điện thoại hoặc email cùa bạn, mật khẩu là ngày tháng năm sinh viết liền.<br>
Trân trọng cảm ơn./.
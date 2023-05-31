<?php

namespace App\Listeners;

use App\Connections\SmsGateway;
use App\Events\CustomerMakeAppointment;
use App\Jobs\SendSMSNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SendNotifyAppointmentViaSmsNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CustomerMakeAppointment $event): void
    {
        $appointment = $event->appointment;
        $customer    = $event->customer;
        $name = Str::ascii($customer->name);
        $time        = $appointment->time->format('H:i d/m/y');
//        $content     = "Ban da dang ky kham tai Phu San Tina. Thoi gian dat lich: $time";
        $content = "PK SAN PHU KHOA IVF TINA, CN 738 Quang Trung GV xac nhan $name da dat lich hen kham luc $time Hotline: 0858608080";
        SendSMSNotification::dispatch($customer->phone, $content);
    }
}

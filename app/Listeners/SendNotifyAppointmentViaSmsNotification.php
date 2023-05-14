<?php

namespace App\Listeners;

use App\Connections\SmsGateway;
use App\Events\CustomerMakeAppointment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

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
        $time        = $appointment->time->format('d/m/Y H:i:s');
        $content     = "Ban da dang ky kham tai Phu San Tina. Thoi gian dat lich: $time";
        SmsGateway::sendSms($customer->phone, $content);
    }
}

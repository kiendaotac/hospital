<?php

namespace App\Listeners;

use App\Connections\SmsGateway;
use App\Enums\StatusEnum;
use App\Events\CustomerRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Seshac\Otp\Otp;

class SendOtpViaSmsNotification
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
    public function handle(CustomerRegistered $event): void
    {
        $customer = $event->customer;
        $otp      = $event->otp;
        $content  = "Ban da dang ky tai khoan tai Phu San Tina. Ma OTP cua ban la: $otp->token";
        SmsGateway::sendSms($customer->phone, $content);
    }
}

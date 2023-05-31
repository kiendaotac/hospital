<?php

namespace App\Listeners;

use App\Connections\SmsGateway;
use App\Enums\StatusEnum;
use App\Events\CustomerRegistered;
use App\Jobs\SendSMSNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
        $name = trim(Str::ascii($customer->name));
//        $content  = "Ban da dang ky tai khoan tai Phu San Tina. Ma OTP cua ban la: $otp->token";
        $content  = "Cam on $name da dat lich kham tai PK SAN PHU KHOA IVF TINA. Ma xac thuc thong tin dang ky (OTP) la: $otp->token. Hotline:0858608080";
        SendSMSNotification::dispatch($customer->phone, $content);
    }
}

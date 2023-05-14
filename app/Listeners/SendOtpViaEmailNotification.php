<?php

namespace App\Listeners;

use App\Enums\StatusEnum;
use App\Events\CustomerRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Seshac\Otp\Otp;

class SendOtpViaEmailNotification
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
        if ($customer->status == StatusEnum::INACTIVE->value && !empty($customer->email)) {
            $otp =  $event->otp;
            if ($otp->status) {
                Mail::to($customer)->send(new \App\Mail\CustomerRegistered($otp->token));
            } else {
                Log::info('GENERATE_OTP_FAIL', [$otp]);
            }
        }
    }
}

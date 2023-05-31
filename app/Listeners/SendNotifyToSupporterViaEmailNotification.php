<?php

namespace App\Listeners;

use App\Events\CustomerMakeAppointment;
use App\Jobs\SendEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNotifyToSupporterViaEmailNotification
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
        $appointment    = $event->appointment;
        $supportEmail   = env('SUPPORTER_EMAIL');
        $supportEmailCC = env('SUPPORTER_EMAIL_CC');
        SendEmailNotification::dispatch([$supportEmail, $supportEmailCC], new \App\Mail\NotifySupporterNewCustomer($appointment));
    }
}

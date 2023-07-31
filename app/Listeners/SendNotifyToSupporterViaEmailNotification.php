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
        $supporterEmails = ['pktina738@gmail.com', 'Tranthiyenoanh3009@gmail.com', 'Phan.thuy120494@gmail.com'];
        SendEmailNotification::dispatch($supporterEmails, new \App\Mail\NotifySupporterNewCustomer($appointment));
    }
}

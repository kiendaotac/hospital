<?php

namespace App\Listeners;

use App\Events\CustomerMakeAppointment;
use App\Jobs\SendEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNotifyAppointmentViaEmailNotification
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
        SendEmailNotification::dispatch($customer, new \App\Mail\CustomerMakeAppointment($appointment));
    }
}

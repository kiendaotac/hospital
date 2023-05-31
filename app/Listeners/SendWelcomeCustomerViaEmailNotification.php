<?php

namespace App\Listeners;

use App\Enums\StatusEnum;
use App\Events\CustomerActived;
use App\Jobs\SendEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendWelcomeCustomerViaEmailNotification
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
    public function handle(CustomerActived $event): void
    {
        $customer = $event->customer;
        SendEmailNotification::dispatch($customer, new \App\Mail\WelcomeNewCustomer($customer));
    }
}

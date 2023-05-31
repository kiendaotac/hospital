<?php

namespace App\Jobs;

use App\Connections\SmsGateway;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSMSNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $phone;

    private $content;

    /**
     * Create a new job instance.
     */
    public function __construct($phone, $content)
    {
        $this->phone   = $phone;
        $this->content = $content;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        SmsGateway::sendSms($this->phone, $this->content);
    }
}

<?php

namespace App\Console\Commands;

use App\Connections\SmsGateway;
use App\Jobs\SendEmailNotification;
use App\Mail\CustomerMakeAppointment;
use App\Models\Appointment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class NotifyAppointment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tina:notify-appointment';

    public int $beforeDay = 3;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify appointment before some day';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $day = now()->addDays($this->beforeDay);
        $appointments = Appointment::whereDate('time', $day)->get();
        foreach ($appointments as $appointment) {
            SendEmailNotification::dispatch($appointment->email, new CustomerMakeAppointment($appointment));
            $phone   = $appointment->phone;
            $time    = $appointment->time->format('H:i d/m/y');
            $url     = env('APP_URL');
            $content = "Ban co lich hen kham tai PK SAN PHU KHOA IVF TINA vao luc $time .Truy cap $url de dang ky lich kham";
            SmsGateway::sendSms($phone, $content);
        }
    }
}

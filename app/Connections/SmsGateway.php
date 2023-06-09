<?php

namespace App\Connections;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsGateway
{
    public static function sendSms($toNumber, $content)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Api-key'      => env('SMS_API_KEY')
        ])
            ->post('https://msg.thongtinbds.net/api/sms/send', [
                'contact' => [
                    [
                        'number'   => $toNumber,
                        'body'     => $content,
                        'sms_type' => 'plain'
                    ]
                ]
            ]);

        Log::info('SMS', [$response, [
            'Content-Type' => 'application/json',
            'Api-key'      => env('SMS_API_KEY')
        ],[
            'contact' => [
                [
                    'number'   => $toNumber,
                    'body'     => $content,
                    'sms_type' => 'plain'
                ]
            ]
        ]]);
    }
}
<?php

namespace App\Connections;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsGateway
{
    public static function sendSms($toNumber, $content)
    {
        $apiKey = 'c2823f29-0cc7-4bab-afcb-bdf458147f77';
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Api-key'      => $apiKey
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
            'Api-key'      => $apiKey
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
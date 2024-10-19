<?php

namespace App\Services;
use Twilio\Reset\Client as TwilioClient;

class SmsSenderService implements SmsSenderInterface
{
    protected $client;

    public function send ($message)
    {
        $this->client->messages->create(
            779997839273,
            [
                'from' => 328979832947,
                'body' => 'gfytfuivlinu'
            ]
            );
    }
}
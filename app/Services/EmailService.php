<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    /**
     * Send an email message.
     *
     * @param string $to
     * @param string $subject
     * @param string $messageBody
     * @return void
     */
    public function sendMessage($to, $subject, $messageBody)
    {
        Mail::html($messageBody, function ($message) use ($to, $subject) {
            $message->to($to)
                ->subject($subject);
        });
    }
}

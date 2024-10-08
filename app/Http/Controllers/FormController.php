<?php

namespace App\Http\Controllers;

use App\Services\EmailService;
use App\Services\TelegramBotService;
use Illuminate\Http\Request;

class FormController extends Controller
{
    protected $emailService;
    protected $telegramBotService;

    public function __construct(EmailService $emailService, TelegramBotService $telegramBotService)
    {
        $this->emailService = $emailService;
        $this->telegramBotService = $telegramBotService;
    }

    public function sendForm(Request $request)
    {

        $to = "proface19@gmail.com";
        $subject = "Новая заявка от сайта";
        $legalStatus = 'Пусто';
        $organizationName = 'Пусто';
        if(isset($request->legalStatus)){
            $legalStatus = $request->legalStatus;
        }
        if(isset($request->organizationName)){
            $organizationName = $request->organizationName;
        }
        $messageBody = "**НОВАЯ ЗАЯВКА**\n" .
            "ФИО: $request->fullName\n" .
            "Номер телефона: $request->phone\n" .
            "Тип лица: $legalStatus\n";

        if ($organizationName !== 'Пусто' && !empty($organizationName)) {
            $messageBody .= "Наименование организации: $organizationName\n";
        }

        $this->emailService->sendMessage($to, $subject, $messageBody);

        $telegramResponse = $this->telegramBotService->sendMessage($messageBody);

        return response()->json([
            'message' => 'Email sent successfully!',
            'telegram_response' => $telegramResponse,
        ]);
    }
}

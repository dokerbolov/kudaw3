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
        $messageBody = "<b>НОВАЯ ЗАЯВКА </b> <br>" .
            "ФИО: $request->fullName <br>" .
            "Номер телефона: $request->phone <br>" .
            "Тип лица: $legalStatus <br>";

        if ($organizationName !== 'Пусто' && !empty($organizationName)) {
            $messageBody .= "Наименование организации: $organizationName <br><br>";
        }

        $messageBody .= "Ответы по вопросам:\n" .
            "Вы желаете учавствовать в споре в Арбитраже?: <b> $request->question1 </b> <br>" .
            "У вас имеется спор между юридическими лицами?: <b> $request->question2 </b> <br>" .
            "Какая оговорка у вас указана в договоре, в разделе Порядок решения споров?: <b> $request->question3 </b> <br>" .
            "Ваш спор ранее уже был на рассмотрении в государственном суде?: <b> $request->question4 </b> <br>";

        $this->emailService->sendMessage($to, $subject, $messageBody);

        $telegramResponse = $this->telegramBotService->sendMessage($messageBody);

        return response()->json([
            'message' => 'Email sent successfully!',
            'telegram_response' => $telegramResponse,
        ]);
    }
}
